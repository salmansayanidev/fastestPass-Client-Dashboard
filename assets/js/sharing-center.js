// sharing folder tabs js

const sharingTabs = document.querySelectorAll("[data-view]");

sharingTabs.forEach((tab) => {
    tab.addEventListener("click", () => {
        sharingTabs.forEach((tab) => {
            tab.classList.remove("active");
        });
        $("[data-content]").removeClass("active");
        $(`[data-content="${tab.dataset.view}"]`).addClass("active");
        tab.classList.add("active");
    });
});