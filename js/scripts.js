$(document).ready(function(){
	$("#nav-mobile").html($("#nav-main").html());
	$("#nav-trigger span").click(function(){
		if ($("nav#nav-mobile ul").hasClass("expanded")) {
			$("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
			$(this).removeClass("open");
		} else {
			$("nav#nav-mobile ul").addClass("expanded").slideDown(250);
			$(this).addClass("open");
		}
	});
});

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 30) {
        $("#content-top").addClass("move-up");
    } else {
        $("#content-top").removeClass("move-up");
    }
});

$(window).load(function() {
	$('.blueberry').blueberry();
});

jQuery(document).ready(function(){
jQuery(function() {
	jQuery('ul.da-thumbs > li').hoverdir();
});
});

jQuery(document).ready(function() {
	jQuery('#homepage-title, .da-thumbs, .blueberry, .footer-widgets').addClass("hidden").viewportChecker({
	    classToAdd: 'visible animated fadeInDown',
	    offset: 100    
	   });   
}); 