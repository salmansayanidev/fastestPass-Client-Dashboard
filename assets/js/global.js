const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))



// profile btn js 
$(".profile-dropdown-list").hide();

$(".profile-btn").click(function() {
    $(".profile-dropdown-list").slideToggle();
});