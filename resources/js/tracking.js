import Tagify from "@yaireo/tagify";
import "@yaireo/tagify/dist/tagify.css";

(function ($) {
    $("#trackingFormError").hide();
    // Hide all statuses except the first one
    $(".pkg-card .status-list .status").not(":first-of-type").hide();
    // $(".shipments").empty();

    // Tracking code textarea input
    const trackingCodeInput = document.querySelector(
        "textarea[name=tracking_numbers]"
    );

    const trackingPattern = new RegExp(trackingCodeInput.dataset.tp);
    const keepInvalidNumbers = trackingCodeInput.dataset.kit;

    // initialize Tagify on the above input node reference
    const tagify = new Tagify(trackingCodeInput, {
        maxTags: 20,
        duplicates: false,
        pattern: trackingPattern,
        keepInvalidTags: keepInvalidNumbers,
        texts: {
            pattern: "Invalid tracking number",
        },
    });

    // Last status height for tracking status line margin bottom
    function setLastStatusHeightCssVar() {
        const lastStatusHeight =
            $(".status-list .status:last").outerHeight() - 16;
        $(":root").css("--last-status-height", lastStatusHeight + "px");
    }
    setLastStatusHeightCssVar();

    function renderEmptyTrackInfo(number) {
        const markup = `
        <div class="pkg-card">
            <div class="pkg-card-header">
                <p>Waybill number: <span class="track_number">${number}</span></p>
            </div>
            <p class="ms-3 mt-3 text-primary">No logistics track information</p>
        </div>
        `;

        $(".shipments").append(markup);
    }

    function getStatusInfo(statuses) {
        if (statuses.length === 0) {
            return "";
        }

        const datetimeFormatOptions = {
            year: "numeric",
            month: "2-digit",
            day: "2-digit",
            hour: "2-digit",
            minute: "2-digit",
            second: "2-digit",
        };
        let markup = '<ul class="status-list">';
        for (const status of statuses) {
            let statusMarkup = '<li class="status';
            if (status.stage === "Delivered") statusMarkup += " delivered";
            if (status.icon_id === null) statusMarkup += " dot";
            statusMarkup += '">';
            if (status.icon_id !== null)
                statusMarkup += ` <i class="${status.icon.name}"></i>`;
            statusMarkup += '<div class="status-info">';
            statusMarkup += '<p class="status-timestamp">';
            statusMarkup += new Date(status.created_at).toLocaleString(
                "en-US",
                datetimeFormatOptions
            );
            statusMarkup += "</p>";
            statusMarkup += '<p class="status-description">';
            statusMarkup += status.remarks;
            statusMarkup += " ";
            statusMarkup += `Last site is <span class="text-primary">${status.location}</span>.`;
            statusMarkup += "</p>";
            statusMarkup += "</div>";
            statusMarkup += "</li>";

            markup += statusMarkup;
        }
        markup += "</ul>";

        return markup;
    }

    function renderShipment(shipment) {
        const markup = `
        <div class="pkg-card">
            <div class="pkg-card-header">
                <p>Waybill number: <span class="track_number">${
                    shipment.tracking_number
                }</span></p>
                <button type="button" class="btn btn-primary">
                    <i class="fa-sharp fa-solid fa-eye"></i> <span>Info</span>
                </button>
            </div>
            ${getStatusInfo(shipment.statuses)}
            <p class="pkg-card-footer">
                <span>Collapse</span>
                <i class="fa-regular fa-chevron-down"></i>
            </p>
        </div>
        `;

        $(".shipments").append(markup);

        setLastStatusHeightCssVar();

        // Hide all statuses except the first one
        $(".pkg-card .status-list .status").not(":first-of-type").hide();
    }

    $(window).on("resize", function () {
        setLastStatusHeightCssVar();
    });

    // Toggle package card
    // Correct w/ event delegation after DOM is changed w/ jQuery
    $(document).on("click", ".pkg-card .pkg-card-footer", function () {
        // Change the text to the opposite
        const isOpen = $(this).children("span").text() === "Collapse";

        $(this)
            .children("span")
            .text(isOpen ? "More" : "Collapse");

        // Replace the icon class with the opposite
        $(this).children("i").toggleClass("fa-chevron-up fa-chevron-down");

        // Toggle the status list statuses except the first one
        $(this)
            .siblings(".status-list")
            .children(".status")
            .not(":first-of-type")
            .slideToggle(200);
    });

    // Handle tracking form submit
    $("form#trackingForm").on("submit", function (e) {
        e.preventDefault();

        const trackingNumbers = tagify.value.map((tag) => tag.value);

        if (trackingNumbers.length === 0) {
            $("#trackingFormError").show(function () {
                setTimeout(function () {
                    $("#trackingFormError").hide();
                }, 3000);
            });
            return;
        } else {
            $("#trackingFormError").hide();
        }

        const submitButtonText = $(
            "form#trackingForm button[type=submit]"
        ).text();
        // Show the loading spinner
        $("form#trackingForm button[type=submit]")
            .attr("disabled", true)
            .html('<i class="fa fa-loader fa-spin"></i>');

        // Disable tracking code input
        tagify.setDisabled(true);

        // Reset the status list
        $(".shipments").empty();

        // Send the tracking numbers to the server
        $.ajax({
            url: $(this).attr("action"),
            method: "POST",
            data: {
                tracking_numbers: trackingNumbers,
            },
            success: function (data) {
                // Populate the DOM
                for (const number of trackingNumbers) {
                    // Access the number from data
                    const shipment = data?.[number];

                    if (shipment) {
                        renderShipment(shipment);
                    } else {
                        renderEmptyTrackInfo(number);
                    }
                }
            },
            error: function (xhr, status, error) {
                const oldErrorText = $("#trackingFormError").text();
                $("#trackingFormError")
                    .text("Connection error, please try again")
                    .show(function () {
                        setTimeout(function () {
                            $("#trackingFormError").text(oldErrorText).hide();
                        }, 3000);
                    });
            },
            complete: function () {
                // Remove the loading spinner
                $("form#trackingForm button[type=submit]")
                    .attr("disabled", false)
                    .text(submitButtonText);

                // Enable tagify input
                tagify.setDisabled(false);
            },
        });
    });
})(jQuery);
