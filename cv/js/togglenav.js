$(document).ready(function () {

    var menuTextAT = 500,
        $lis = $("#navlinks li");

    $(document).on("click", ".navtoggle", function () {
        $(".blocnav").addClass("menu-active");
    });

    $lis.click(function () {
        var $li = $(this),
            $a = $(this).find('a'),
            $item = $a.attr('href');
        $li.addClass("clicked");
        $(".blocnav").removeClass("menu-active");
        $("section.active-section").removeClass("active-section");
        $($item).addClass("active-section");

        setTimeout(function () {
            $li.removeClass("clicked");
        }, menuTextAT);
    })

});

$(document).ready(function () {

    var $lis = $("#navlinks li");

    $lis.click(function () {
        var $li = $('this'),
            $a = $(this).find('a'),
            $item = $a.attr('href'),
            $section= $('section')+  $item;
        $li.addClass("clicked");
        $(".blocnav").removeClass("menu-active");
        //$("section.active-section").removeClass("active-section");
        $section.addClass("active-section");
    })
});