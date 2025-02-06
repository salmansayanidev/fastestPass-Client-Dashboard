// sharing folder tabs js

const improveYourSecurityTabs = document.querySelectorAll("[data-view]");

improveYourSecurityTabs.forEach((tab) => {
    tab.addEventListener("click", () => {
        improveYourSecurityTabs.forEach((tab) => {
            tab.classList.remove("active");
        });
        $("[data-content]").removeClass("active");
        $(`[data-content="${tab.dataset.view}"]`).addClass("active");
        tab.classList.add("active");
    });
});