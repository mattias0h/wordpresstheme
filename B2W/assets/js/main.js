/**
 * Created by Mattias on 19.01.2016.
 */

$(document).ready(function () {
    var $window = $(window);

    $('section[data-type="background"]').each(function () {
        var $bgobj = $(this);
        $(window).scroll(function () {
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));
            var coords = '50% ' + yPos + 'px';
            $bgobj.css({backgroundPosition: coords});
        });
    });
});