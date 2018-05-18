$(document).scroll(function() {
	var mainNav = $('#nav-main');
	var homeNav = $('#nav-home');
	var y = $(this).scrollTop();

	if (y < 100) {
		// $('#nav-main').fadeIn();
		// $('#nav-home').css('visibility', 'visible');
		mainNav.css({
	        "opacity" : "0", 
	        "visibility" : "hidden",
	        "-webkit-transition" : "visibility 0.2s linear, opacity 0.2s linear",
	        "-moz-transition" : "visibility 0.2s linear, opacity 0.2s linear",
	        "-o-transition" : "visibility 0.2s linear, opacity 0.2s linear"
	    });

	    homeNav.css({
            "opacity" : "1", 
            "visibility" : "visible"
        });
	} else {
		// $('#nav-main').fadeOut();
		// $('#nav-home').css('visibility', 'hidden');
		mainNav.css({
            "opacity" : "1", 
            "visibility" : "visible"
        });

        homeNav.css({
	        "opacity" : "0", 
	        "visibility" : "hidden",
	        "-webkit-transition" : "visibility 0.2s linear, opacity 0.2s linear",
	        "-moz-transition" : "visibility 0.2s linear, opacity 0.2s linear",
	        "-o-transition" : "visibility 0.2s linear, opacity 0.2s linear"
	    });
	}
});