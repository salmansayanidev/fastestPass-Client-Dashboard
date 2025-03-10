// payment accordion js

$(".payment-inner-area").hide();
$(".payment-accordion-main.active").find(".payment-inner-area").show();

$(".payment-top").click(function () {
    var $currentFaqBox = $(this).closest(".payment-accordion-main");

    if (!$currentFaqBox.hasClass("active")) {
        $(".payment-inner-area").slideUp();
        $(".payment-accordion-main").removeClass("active");
        $currentFaqBox.addClass("active");
        $currentFaqBox.find(".payment-inner-area").slideDown();
    } else {
        $currentFaqBox.removeClass("active");
        $currentFaqBox.find(".payment-inner-area").slideUp();
    }
});