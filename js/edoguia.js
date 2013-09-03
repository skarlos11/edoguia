jQuery(function($) {
 
	$('#cat-muestra').find('div').click(function(){
		window.location = $(this).attr('url');
	});

	var page_name = $('.pag-title').text();
	$('.menu-item:contains("'+page_name+'")').addClass('current');

	jQuery('.single-post:nth-child(4n+2)').css({ marginLeft: '0px' });
	jQuery('.single-post2:nth-child(3n+2)').css({ marginLeft: '0px' });

	
	var count = 0;
	var color = [ 	"#35b7e9",
					"#ffb300",
					"#ec677a",
					"#d04055",
					"#86c069",
					"#036084" ];	

	$('.single-post2').each(function(){	
		if( count != 6){	
			
			$(this).find('h4').css('background', color[count]);

			count = count +1;
		}
		else{ count = 0; }
	});
});