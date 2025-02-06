$(".progress").each(function () {

    var $bar = $(this).find(".bar");
    var $val = $(this).find(".bar-per");
    var perc = parseInt($val.text(), 10);

    $({
        p: 0
    }).animate({
        p: perc
    }, {
        duration: 2000,
        easing: "swing",
        step: function (p) {
            $bar.css({
                transform: "rotate(" + (45 + (p * 1.8)) + "deg)",
            });
            $val.text(p | 0);
        }
    });
});