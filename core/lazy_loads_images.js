jQuery( document ).ready( function( $ ) {
/*================= Image Add  Attributes =================*/
		 $('img').load(function() { 
			var wid = $(this).width();
			var hei = $(this).height();	
			$(this).attr("width",wid);
			$(this).attr("height",hei);
        
		 });
} );