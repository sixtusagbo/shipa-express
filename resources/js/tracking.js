import Tagify from "@yaireo/tagify";
import "@yaireo/tagify/dist/tagify.css";

(function ($) {
    // Tracking code textarea input
    const trackingCodeInput = document.querySelector(
        "textarea[name=tracking_numbers]"
    );

    // initialize Tagify on the above input node reference
    const tagify = new Tagify(trackingCodeInput, {
        maxTags: 20,
        duplicates: false,
    });

    function setLastStatusHeightCssVar() {
        const lastStatusHeight =
            $(".status-list .status:last").outerHeight() - 16;
        $(":root").css("--last-status-height", lastStatusHeight + "px");
    }
    setLastStatusHeightCssVar();

    $(window).on("resize", function () {
        setLastStatusHeightCssVar();
    });
})(jQuery);
