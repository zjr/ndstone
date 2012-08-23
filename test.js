function openGuts('#clients') {
	if($('#clients').is('.open') && $('div.guts').is('.open')) {
		$('div.guts').removeClass('open');
	} else if($('#clients').is('.left')) {
		$('div.guts').addClass('open');
		$('div.membrane.right').addClass('h'#clients'den').removeClass('right').addClass('left').delay(700).removeClass('hidden')
		$('div.membrane.open').removeClass('open').addClass('right');
		$('#clients').removeClass('left').addClass('open');
	} else if($('#clients').is('.right')) {
		$('div.guts').addClass('open');
		$('div.membrane.left').addClass('h'#clients'den').removeClass('left').addClass('right').delay(700).removeClass('hidden')
		$('div.membrane.open').removeClass('open').addClass('left');
		$('#clients').removeClass('right').addClass('open');
	} else {
		$('div.guts').addClass('open');
	}
}