// sharing folder tabs js

const manageVaultTabs = document.querySelectorAll("[data-view]");

manageVaultTabs.forEach((tab) => {
    tab.addEventListener("click", () => {
        manageVaultTabs.forEach((tab) => {
            tab.classList.remove("active");
        });
        $("[data-content]").removeClass("active");
        $(`[data-content="${tab.dataset.view}"]`).addClass("active");
        tab.classList.add("active");
    });
});