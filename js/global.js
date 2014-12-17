(function($){
    var $nav;

    function toggleNav(e){
        var isMobile = $('.fa-bars').is(':visible');
        var $nav     = e.data.sel;
        //debugger;

        console.log('isMobile: ', isMobile);
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
    });
})(jQuery)

