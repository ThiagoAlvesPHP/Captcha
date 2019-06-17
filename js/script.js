$(function(){
	$('#click').click(function(event){
		event.preventDefault();

		var captcha = $('#c').val();
		var cap = $('#cap').val();

		var html = '<hr>';

		if (captcha == cap) {
			html += '<h3>Captcha Correto<h3>';
		} else {
			html += '<h3>Captcha Incorreto<h3>';
		}

		$('#resposta').html(html);
	});
});