$(document).ready(function(){
	// $('.owl-carousel').owlCarousel({
	// 	loop:true,
	// 	margin:10,
	// 	nav:true,
	// 	responsive:{
	// 		0:{
	// 			items:1
	// 		},
	// 		600:{
	// 			items:3
	// 		},
	// 		1000:{
	// 			items:5
	// 		}
	// 	}
	// })
	const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });

  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });

	jQuery('.bloc-realisation').hover(function(){
		jQuery(this).children('.titre-realisation').css('visibility', 'visible');
	},function(){
		jQuery(this).children('.titre-realisation').css('visibility', 'hidden');
	});

	jQuery('.btn-rea').click(function(){
		btn = jQuery(this).data('category');
		jQuery('.btn-rea').removeClass('btn-primary');
		jQuery(this).addClass('btn-primary');
		console.log(btn);
		if (btn == "tout") {
			// console.log("test");
			jQuery('.bloc-realisation').hide();
			jQuery('.bloc-realisation').toggle();
		}
		else if (btn=="") {

		}
		else {
			jQuery('.bloc-realisation').hide();
			jQuery('.bloc-realisation[data-cat="'+btn+'"]').toggle();
		}
	});

//// Bouton de recherche en mobile
	$('.navbar ul li:nth-child(8)').attr('data-target', '#search');
	$('.navbar ul li:nth-child(8)').attr('data-toggle', 'modal');

//// Page réalisation fluidité de la galerie
	// $(".btn-anima").click(function(){
  // 	$(".bloc-realisation").fadeIn("10");
	// });

});
