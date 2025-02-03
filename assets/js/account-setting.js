// Show/Hide advanced settings
$(".advance-setting-area").hide();

$(".show-advan-sett-btn").click(function () {
    $(".account-setting-section").toggleClass("active");
    $(".advance-setting-area").slideToggle();

    if ($(".account-setting-section").hasClass("active")) {
        $(".show-advan-sett-btn").text("Hide Advanced Settings ");
    } else {
        $(".show-advan-sett-btn").text("Show Advanced Settings ");
    }
});


// account settings tabs js

const accountsTabs = document.querySelectorAll("[data-view]");

accountsTabs.forEach((tab) => {
    tab.addEventListener("click", () => {
        accountsTabs.forEach((tab) => {
            tab.classList.remove("active");
        });
        $("[data-content]").removeClass("active");
        $(`[data-content="${tab.dataset.view}"]`).addClass("active");
        tab.classList.add("active");
    });
});