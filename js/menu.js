jQuery( document ).ready( function( $ ) {
	$('#site-nav li.menu-item-has-children').append('<span class="down-triangle"></span>');
	
	if (window.innerWidth < 768 ) {
		$("#site-nav").addClass("js").before('<div id="menu">&#9776;</div>');
		$("#menu").click(function(){
			$("#site-nav").toggle();
		});
	}
		$(window).resize(function(){
			if(window.innerWidth > 768) {
				$("#site-nav").removeAttr("style");
			}
		});	
} );