jQuery(function($) {
 
	$('#cat-muestra').find('div').click(function(){
		window.location = $(this).attr('url');
	});

	var page_name = $('.pag-title').text();
	$('.menu-item:contains("'+page_name+'")').addClass('current');

});