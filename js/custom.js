// Loading Screen
$(window).load(function() {
    $("#loader").fadeOut(3000, function() {
        $("#content").fadeIn("slow",function(){
            new CBPGridGallery(document.getElementById('grid-gallery'));
            $("#soundcloud").html('<iframe class="embed-responsive-item" width="100%" height="20" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/31383641&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=true"></iframe>');
        });
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

// Scroll Animations
$(window).scroll(function() {
    var val = $(this).scrollTop();

    // Navbar Fade
    if ($(window).scrollTop() > 0.4 * $(window).height()) {
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
    if ( (val >= ($("#social").offset().top - $(window).height() / 3) ) && (val <= ($("#social").offset().top + $("#social").height()) ) ) {
        $("#social img").each(function(i) {
            setTimeout(function() {
                $("#social img").eq(i).addClass("showing");
            }, 150 * (i + 1));
        });
    } else {
        $("#social img").removeClass("showing");
    }
});
