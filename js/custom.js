flag = false;
$(window).scroll(function() {
    var val = $(this).scrollTop();
    $(".greet").css({
        'transform': 'translate(0px,' + val / 4 + '%)',
        '-webkit-filter': 'drop-shadow(5px 5px 5px hsl(0, 100%, ' + val / 10 + '%))',
        'filter': 'drop-shadow(5px 5px 5px hsl(0, 100%, ' + val / 10 + '%))'
    });
    $("#soundcloudFrame").one('animationend', function() {
        var widget = SC.Widget("soundcloudFrame");
        widget.play();
    });
});
