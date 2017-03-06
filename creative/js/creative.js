/*function include(fileName){
document.write("<script type='text/javascript' src='"+fileName+"'></script>" );
}

include('jquery.parallax.js');
*/
jQuery(document).ready(function($) {
	
	$(document).on('click','.open-search a', function(e){
		e.preventDefault();
		//console.log('CLICKED ON THE OPEN SEARCH');
		$('.search-form-container').slideToggle(300);
		
	});


		/*$('.bxslider').bxSlider({
		  mode: 'fade',
		  captions: true
		});
		
		$(document).ready(function(){
	        $('#slide1').parallax("center", 1, 0.1, true);
	        $('#slide2').parallax("center", 0, 0.1, true);

	    });
*/
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
		//$(".menu").animate({height: '332px'}, "slow");
		//$(".responsive").animate({height: '40px'});
		$(document.getElementById("menu-primary-menu-editor")).toggleClass('responsive');
	 	
    });

});

$(document).ready(function(){
	
});