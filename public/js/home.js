$(window).on('load', function() {

    //	$(".parking-btn").on("click",function()
    //						{
    //		$(this).css("transform","scale(1.5)");
    //		$(".parking-btns").css("display","flex");
    //
    //	});
    //
    //	$(".sub-menu-buttons .close").on("click",function()
    //									{
    //		$(".sub-menu-buttons-container").css("display","none");
    //		$(".revenue-container").css("transform","scale(1)");
    //	})
    //
    //	$(".revenue-container").on("click", function(){
    //		$(this).css("transform","scale(1.5)");
    //	})
    //
    //	$(".owl-carousel").owlCarousel({
    //		items:4,
    //		loop:false
    //	});
    setTimeout(function() {

        $(".loader-container").removeClass("zoomInUp");
        $(".loader-container").addClass("bounceOutDown");

    }, 9900);
    setTimeout(function() {
        $("main").removeClass("display-none");
        $(".loader-container").addClass("display-none");
        $("main").addClass("bounceInUp");
    }, 10200);

    setTimeout(function() {
        $(".revenue-container").addClass("tada");
        $(".county_img").addClass("bounce");
        $(".landing-footer").removeClass("display-none");
        $(".landing-footer").addClass("bounceInDown");
    }, 10400);



})(jQuery);
