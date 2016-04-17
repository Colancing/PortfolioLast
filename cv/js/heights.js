(function ($) {
    var topMenu = $("#navlinks"),
        links = topMenu.find('a'),
        topMenuHeight = topMenu.outerHeight() + 5,
        scrolledid = false,
        href = links.map(function () {
            var table = $($(this).attr('href'));
            if (table.length) {
                return table;
            }
        }),
        newheight = $(window).height() - topMenuHeight;
    $("#contact").css('min-height', newheight + "px");
    //header.css('padding-top', heightHeader + "px" );


    //Smooth scroll jsuqu'à l'ancre quand on clique sur un lien de la barre de navigation
    links.click(function (e) {
        var href = $(this).attr('href'),
            hrefy = href === "#home" ? 0 : $(href).offset().top - topMenuHeight + 1;
        $('html, body').stop().animate({
            scrollTop: hrefy
        }, 300);
        e.preventDefault();
        //if (href === "#contact") {
        //    links.filter("[href=#contact]").addClass("active");
        //}
        //if (href === "#home") {
        //    links.filter("[href=#home]").addClass("active");
        //}
    });

    //La classe active suit le scroll
    $(window).scroll(function () {
        var scrollTop = $(this).scrollTop() + ($(window).height() / 4);

        var cur = href.map(function () {
            if ($(this).offset().top < scrollTop)
                return this;
        });

        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";
        if (scrolledid != id) {
            scrolledid = id;
            links
                .removeClass("active")
                .filter("[href=#" + id + "]").addClass("active");
        }


    });


})(jQuery);