// jCarousel functionality
$(document).ready(function() {
	$('.jcarousel').jcarousel();
	
	$('.jcarousel-next').jcarouselControl({		//jcarouselControl allows use of multiple carousels on same page
        target: '+=5'
    });
	
	$('.jcarousel-prev').jcarouselControl({
		target: '-=5'
	});
});