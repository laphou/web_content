jQuery(document).ready(function($) {

    $(".fancybox").fancybox({
		'transitionIn' : 'elastic',
		'transitionOut'	: 'fade',
		'easingIn' : 'swing',
		'easingOut' : 'swing',
		'speedIn' : 2000,
		'speedOut' : 1000,
		'titlePosition' 	: 'over',
		'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
		return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
	    }
	});

	$('a[href$=jpg], a[href$=JPG], a[href$=jpeg], a[href$=JPEG], a[href$=png], a[href$=gif], a[href$=bmp]:has(img)').addClass('fancybox').attr('rel','gallery');
  
}); 