

// Scroll to Top
jQuery('.toTop').click(function(){
    jQuery('html').animate({scrollTop:0}, 'slow');//IE, FF
    jQuery('body').animate({scrollTop:0}, 'slow');//chrome, don't know if Safari works
});




// Sticky Header
jQuery(document).ready(function() { jQuery('.headerWrap').waypoint('sticky'); });



// When the Document Object Model is ready
jQuery(document).ready(function(){
	// 'catTopPosition' is the amount of pixels #cat
	// is from the top of the document
	var catTopPosition = jQuery('#Get').offset().top;
	
	// When #scroll is clicked
	jQuery('.hero p a').click(function(){
		// Scroll down to 'catTopPosition'
		jQuery('html, body').animate({scrollTop:catTopPosition}, 2000);
		// Stop the link from acting like a normal anchor link
		return false;
	});
});





