//jquery-ui tooltip
$('.tooltips').tooltip();

// Show or hide the sticky footer button
$(window).scroll(function() {
	if ($(this).scrollTop() > 200) 
		{
			$('.go-top').fadeIn(200);
		} else {
			$('.go-top').fadeOut(200);
	}
});
// Animate the scroll to top when the stick footer button is clicked
$('.go-top').click(function(event) {
	event.preventDefault();
	$('html, body').animate({scrollTop: 0}, 600);
})
// Animate the scroll bar to contacts section
$('a[href^="#contacts"]').on('click', function(event){
	var target = $($(this).attr('href'));
	if(target.length) {
	event.preventDefault();
	$('html, body').animate({
	scrollTop: target.offset().top - 75}, 1000, function(){});
  }
}) // end on

// Animate the scroll bar to home section
$('a[href^="#home"]').on('click', function(event){
	var target = $($(this).attr('href'));
	if(target.length) {
	event.preventDefault();
	$('html, body').animate({
	scrollTop: target.offset().top}, 1000);
  }
}) // end on
// Animate the scroll bar to A propos de nous section
$('a[href^="#about"]').on('click', function(event){
	var target = $($(this).attr('href'));
	if(target.length) {
	event.preventDefault();
	$('html, body').animate({
	scrollTop: target.offset().top - 75}, 1000, function(){});
  }
}) // end on
// Animate the scroll bar to services section
$('a[href^="#services"]').on('click', function(event){
	var target = $($(this).attr('href'));
	if(target.length) {
	event.preventDefault();
	$('html, body').animate({
	scrollTop: target.offset().top - 75}, 1000, function(){});
  }
}) // end on

// Animate the scroll bar to services section
$('a[href^="#portfolio"]').on('click', function(event){
	var target = $($(this).attr('href'));
	if(target.length) {
	event.preventDefault();
	$('html, body').animate({
	scrollTop: target.offset().top - 75}, 1000, function(){});
  }
}) // end on
	
	
	