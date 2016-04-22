$(document).ready(function() {
	// jCarousel functionality
	$('.jcarousel').jcarousel();
	
	$('.jcarousel-next').jcarouselControl({		//jcarouselControl allows use of multiple carousels on same page
        target: '+=5'
		// method: function() {
			
		// }
    });
	
	$('.jcarousel-prev').jcarouselControl({
		target: '-=5'
	});
});