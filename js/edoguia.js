jQuery(function($) {
 
	$('#cat-muestra').find('div').click(function(){
		window.location = $(this).attr('url');
	});

});