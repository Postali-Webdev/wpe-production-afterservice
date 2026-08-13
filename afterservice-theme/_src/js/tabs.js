/*
    tabs
*/
(function($){

	$('.active').each( function(){
	    $($(this).attr('data-id')).show();
	});

	$('.c-tab__link').click(function(){ //When any link is clicked
	    var current_tab = $(this).closest('.c-tab__nav').find('.active');
	    $($(current_tab).attr('data-id')).hide();
	    current_tab.removeClass('active');
	    $(this).addClass('active'); //Set clicked link class to active
	    $($(this).attr('data-id')).fadeIn();
	    return false;
	});

})( jQuery, this); //-- end jQuery/AUI
