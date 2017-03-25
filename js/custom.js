$(window).load(function() {
    $("#loader").fadeOut(100, function() {
        $("#content").fadeIn("slow");
    });
});

// Navbar Link Clik Smooth Scroll
function setup() {
    $("nav a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {
                window.location.hash = hash;
            });
        }
    });
}

$(window).scroll(function() {
    var val = $(this).scrollTop();

    // Navbar Fade
    if ($(window).scrollTop() > 0.5 * $(window).height()) {
        $("nav").fadeIn("slow");
    } else {
        $("nav").fadeOut("slow");
    }

    // MitchMula Logo Parallax
    $(".greet").css({
        'transform': 'translate(0px,' + val / 4 + '%)',
        '-webkit-filter': 'drop-shadow(5px 5px 5px hsl(0, 100%, ' + val / 5 + '%))',
        'filter': 'drop-shadow(5px 5px 5px hsl(0, 100%, ' + val / 5 + '%))'
    });

    // Story Section Fading
    $("#story div").css("opacity", Math.round((parseFloat(val) / (0.8 * $("#story").offset().top)) * 100) / 100);

    // Social Media Icon Dance
    if ( ( $(window).scrollTop() >= ( 0.75 * $("#social").offset().top ) ) &&
    ( $(window).scrollTop() <= ( $("#social").offset().top + $("#social").height() ) ) ) {
        $("#social img").each(function(i) {
            setTimeout(function() {
                $("#social img").eq(i).addClass("showing");
            }, 150 * (i + 1));
        });
    } else {
        $("#social img").removeClass("showing");
    }
});
