// jQuery external file
function expendCollapse() {
	$('.show-hide').hide();
	$(".accordion h2").click(function(){
	$trigger = $(this);
	$div = $trigger.next('div.show-hide');
	$div.slideToggle(400);
	$trigger.toggleClass('collapsed');

	$("div.show-hide").not($div).hide();
	$(".accordion h2").not($trigger).removeClass('collapsed');
    });// end click event
	$('.accordion h2:first').click();
}