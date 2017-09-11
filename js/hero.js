jQuery(document).ready(function (jQuery) {
	
ResizeImage();
	
	jQuery(window).resize(function() {
	
	ResizeImage();
	});
	
});

function ResizeImage(){

	
	if (jQuery('.bg').height() <= jQuery(window).height()){
		
	if (jQuery('.bg').height() == 0 || jQuery('.bg').height() == undefined){
		jQuery('.banner').css('height', jQuery(window).height() - jQuery(".banner").offset().top);	
	}else
	{	
	jQuery('.banner').css('height', jQuery('.bg').height() - jQuery(".banner").offset().top);
	}
	}
	else
	{
	jQuery('.banner').css('height', jQuery(window).height() - jQuery(".banner").offset().top);
	}
	

}
