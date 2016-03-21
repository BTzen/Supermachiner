$(document).ready(function() {
	$('.jcarousel').jcarousel();
	
	$('.jcarousel-next').click(function() {
		$('.jcarousel').jcarousel('scroll', '+=5');
	});
	
	$('.jcarousel-prev').click(function() {
		$('.jcarousel').jcarousel('scroll', '-=5');
	});
});

// $(function() {
	// $('.jcarousel').jcarousel({
		
	// });
// });

// $('.jcarousel-next').click(function() {
	// $('.jcarousel').jcarousel('scroll', '+=1');
// });