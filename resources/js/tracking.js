import Tagify from "@yaireo/tagify";
import "@yaireo/tagify/dist/tagify.css";

(function ($) {
    // Tracking code textarea input
    const trackingCodeInput = document.querySelector(
        "textarea[name=tracking_numbers]"
    );

    const trackingPattern = new RegExp(
        trackingCodeInput.dataset.trackingPattern
    );
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

    $(window).on("resize", function () {
        setLastStatusHeightCssVar();
    });

    // Toggle package card
    $(".pkg-card .pkg-card-footer").on("click", function () {
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
})(jQuery);
