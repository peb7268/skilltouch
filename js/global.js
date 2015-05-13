(function($){
    var $nav;

    function toggleNav(e){
        var isMobile = $('.fa-bars').is(':visible');
        var $nav     = e.data.sel;
        //debugger;

        if(isMobile && e.currentTarget.nodeName == 'A') {
            window.setTimeout(function () {
                console.log('there');
                $nav.slideToggle(300);
            }, 700);

            return;
        }

        if(isMobile && e.currentTarget.nodeName == 'I') {
            $nav.slideToggle(300);
            return;
        }
    }

    $('document').ready(function($){
        $nav = $('#nav');
        $('.fa-bars').on('click', {sel: $nav}, toggleNav);
        $nav.find('> li > span > a').on('click', { sel: $nav }, toggleNav);

        $('#details li a').on('click', function(e){
            e.preventDefault();
            var selector = '#' + (e.target.href).split('#')[1];
            var $main_nav = $('#details');

            $main_nav.fadeOut(100, function(){
                $(selector).fadeIn(100, function(){
                    $(this).addClass('active');
                });
            });
        });

        $('#services a.back').on('click', function(e){
            e.preventDefault();
            var $main_nav = $('#details');
            $('.active').fadeOut(100, function(){
                $main_nav.fadeIn(100, function(){
                    var center = $(window).height() / 2;
                    window.scrollTo(0, center);
                });
            });
        });

    });
})(jQuery)

