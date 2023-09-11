(function ($) {
	"use strict";

// Preloader
	$(window).on('load', function () {
		$('.lds-ellipsis').fadeOut(); // will first fade out the loading animation
		$('.preloader').delay(333).fadeOut('slow'); // will fade out the white DIV that covers the website.
		$('body').delay(333);
	});


// Header Sticky
	$(window).on('scroll',function() {
		var stickytop = $('#header.sticky-top .bg-transparent');
		var stickytopslide = $('#header.sticky-top-slide');

		if ($(this).scrollTop() > 1){
			stickytop.addClass("sticky-on-top");
			stickytop.find(".logo img").attr('src',stickytop.find('.logo img').data('sticky-logo'));
		}
		else {
			stickytop.removeClass("sticky-on-top");
			stickytop.find(".logo img").attr('src',stickytop.find('.logo img').data('default-logo'));
		}

		if ($(this).scrollTop() > 180){
			stickytopslide.find(".primary-menu").addClass("sticky-on");
			stickytopslide.find(".logo img").attr('src',stickytopslide.find('.logo img').data('sticky-logo'));
		}
		else{
			stickytopslide.find(".primary-menu").removeClass("sticky-on");
			stickytopslide.find(".logo img").attr('src',stickytopslide.find('.logo img').data('default-logo'));
		}
	});

// Sections Scroll
	if($("body").hasClass("side-header")){
		$('.smooth-scroll').on('click', function() {
			event.preventDefault();
			var sectionTo = $(this).attr('href');
			$('html, body').stop().animate({
				scrollTop: $(sectionTo).offset().top}, 1500, 'easeInOutExpo');
		});
	}else {
		$('.smooth-scroll').on('click', function() {
			event.preventDefault();
			var sectionTo = $(this).attr('href');
			$('html, body').stop().animate({
				scrollTop: $(sectionTo).offset().top - 50}, 1500, 'easeInOutExpo');
		});
	}

// Mobile Menu
	$('.navbar-toggler').on('click', function() {
		$(this).toggleClass('show');
	});
	$(".navbar-nav a").on('click', function() {
		$(".navbar-collapse, .navbar-toggler").removeClass("show");
	});

// Overlay Menu & Side Open Menu
	$('.navbar-side-open .collapse, .navbar-overlay .collapse').on('show.bs.collapse hide.bs.collapse', function(e) {
		e.preventDefault();
	}),
		$('.navbar-side-open [data-bs-toggle="collapse"], .navbar-overlay [data-bs-toggle="collapse"]').on('click', function(e) {
			e.preventDefault();
			$($(this).data('bs-target')).toggleClass('show');
		})

	/*****************************************************************************
	 FANCYBOX
	 *****************************************************************************/
	/* FANCYBOX */
	$("a.iframe").fancybox({
		'type'			:	'iframe',
		//'parent'		:	'#wrapper',
		'openSpeed'		:	400,
		'closeSpeed'	:	200,
		'width'			:	'90%',
		'height'		:	'90%',
		'minWidth'		:	1100,
		'maxHeight'		:	'90%',
		'preload'  		:	'false',
		'padding'		:	0
	});

	$("a.fancybox").fancybox({
		'type'			:	'image',
		'openEffect'	:	'elastic',
		'openSpeed'		:	400,
		'closeSpeed'	:	200,
		'width'			:	'90%',
		'height'		:	'90%',
		'padding'		:	0
	});

        /*---------------------------------
           Carousel (Owl Carousel)
        ----------------------------------- */
	$(".owl-carousel").each(function (index) {
		var a = $(this);
		if ($("html").attr("dir") == 'rtl') {
			var rtlVal = true
		}else{
			var rtlVal = false
		}
		$(this).owlCarousel({
			rtl: rtlVal,
			autoplay: a.data('autoplay'),
			center: a.data('center'),
			autoplayTimeout: a.data('autoplaytimeout'),
			autoplayHoverPause: a.data('autoplayhoverpause'),
			loop: a.data('loop'),
			speed: a.data('speed'),
			nav: a.data('nav'),
			dots: a.data('dots'),
			autoHeight: a.data('autoheight'),
			autoWidth: a.data('autowidth'),
			margin: a.data('margin'),
			stagePadding: a.data('stagepadding'),
			slideBy: a.data('slideby'),
			lazyLoad: a.data('lazyload'),
			navText:['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
			animateOut: a.data('animateout'),
			animateIn: a.data('animatein'),
			video: a.data('video'),
			items: a.data('items'),
			responsive:{
			0:{items: a.data('items-xs'),},
			576:{items: a.data('items-sm'),},
			768:{items: a.data('items-md'),},
			992:{items: a.data('items-lg'),}
			}
		});
	});

	/*------------------------------------
		Magnific Popup
	-------------------------------------- */
	// Image on Modal
	$('.popup-img-gallery').each(function() {
		$(this).magnificPopup({
			delegate: '.popup-img:visible',
			type: "image",
			tLoading: '<div class="preloader"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>',
			closeOnContentClick: !0,
			mainClass: "mfp-fade",
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0, 1]
			},
		});
	});

	// Ajax On Modal
	$('.popup-ajax-gallery').each(function() {
		$(this).magnificPopup({
			delegate: '.popup-ajax:visible',
			type: "ajax",
			tLoading: '<div class="preloader"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>',
			mainClass: "mfp-fade",
			closeBtnInside: true,
			midClick: true,
			gallery: {
			  enabled: true,
			},
			callbacks: {
				ajaxContentAdded: function() {
					$(".owl-carousel").each(function (index) {
					  var a = $(this);
					  if ($("html").attr("dir") == 'rtl') {
				var rtlVal = true
			}else{
				var rtlVal = false
			}
			$(this).owlCarousel({
				rtl: rtlVal,
						autoplay: a.data('autoplay'),
						center: a.data('center'),
						autoplayTimeout: a.data('autoplaytimeout'),
						autoplayHoverPause: a.data('autoplayhoverpause'),
						loop: a.data('loop'),
						speed: a.data('speed'),
						nav: a.data('nav'),
						dots: a.data('dots'),
						autoHeight: a.data('autoheight'),
						autoWidth: a.data('autowidth'),
						margin: a.data('margin'),
						stagePadding: a.data('stagepadding'),
						slideBy: a.data('slideby'),
						lazyLoad: a.data('lazyload'),
						navText:['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
						animateOut: a.data('animateOut'),
						animateIn: a.data('animateIn'),
						video: a.data('video'),
						items: a.data('items'),
						responsive:{
							0:{items: a.data('items-xs'),},
							576:{items: a.data('items-sm'),},
							768:{items: a.data('items-md'),},
							992:{items: a.data('items-lg'),}
						}
						});
					});
				 }
			}
		});
	});

	// YouTube/Viemo Video & Gmaps
	$('.popup-youtube, .popup-vimeo, .popup-gmaps').each(function() {
		$(this).magnificPopup({
				type: 'iframe',
				mainClass: 'mfp-fade',
		});
	});

	/*------------------------------------
		Isotope Portfolio Filter
	-------------------------------------- */
	$(window).on('load', function () {
		$(".portfolio-filter").each(function() {
			var e = $(this);
			e.imagesLoaded(function () {
				if ($("html").attr("dir") == 'rtl') {
					var rtlVal = false
				}else{
					var rtlVal = true;
				}
				var $grid = e.isotope({
						layoutMode: "masonry",
						originLeft: rtlVal
				});
				$(".portfolio-menu").find("a").on("click", function() {
					var filterValue = $(this).attr("data-filter");
					return $(".portfolio-menu").find("a").removeClass("active"), $(this).addClass("active"),
					$grid.isotope({
					  filter: filterValue
					}), !1
				});
			});
		});
	});

	/*------------------------------------
		Parallax Background
	-------------------------------------- */
	$(".parallax").each(function () {
		$(this).parallaxie({
			speed: 0.5,
		});
	});

	/*------------------------------------
		Counter
	-------------------------------------- */
	$(".counter").each(function () {
		$(this).appear(function () {
			$(this).countTo({
				speed: 1800,
			});
		});
	});

	/*------------------------------------
		Typed
	-------------------------------------- */
	$(".typed").each(function() {
		var typed = new Typed('.typed', {
			stringsElement: '.typed-strings',
			loop: true,
			typeSpeed: 100,
			backSpeed: 50,
			backDelay: 1500,
		});
	});

	/*------------------------------------
            Progress Bars
    -------------------------------------- */
	$('#bars').appear(function() {
		$('.progress-bar').each(function(index) {
			var slidewidth = $(this).delay(200).attr('data-width');
			$(this).delay(index*100).animate({width:slidewidth}, 300);
		});
	}, {offset: '100%'});

	/*------------------------------------
		YTPlayer YouTube Background
	-------------------------------------- */
	$(".player").each(function () {
		$(this).mb_YTPlayer();
	});

	/*------------------------
	   tooltips
	-------------------------- */
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	  return new bootstrap.Tooltip(tooltipTriggerEl)
	})

	/*------------------------
	   Scroll to top
	-------------------------- */
	$(function () {
		$(window).on('scroll', function(){
			if ($(this).scrollTop() > 400) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		$('#back-to-top').on("click", function() {
			$('html, body').animate({scrollTop:0}, 'slow');
			return false;
		});
	});

	/*****************************************************************************
	 EMAIL
	 *****************************************************************************/
	var prefix = 'm&#97;&#105;lt&#111;:';//mailto:
	var pstfix = '&#46;' + '&#99;&#111;' + '&#46;' + '&#117;&#107;';//.co.uk
	var ssubject = '?subject=General Enquiry';
	var attribs = 'style=""';
	var path = 'hr' + 'ef' + '=';
	var addy6264 = '&#99;h&#97;t' + '&#64;';//chat@
	var addrepst = '&#100;a&#114;&#114;e&#110;' + 'g&#108;a&#115;e&#114;';//darrenglaser
	addy6264 = addy6264 + addrepst + pstfix;

	//PRIVACY POLICY EMAIL
	var x = document.getElementsByClassName("privacyemail");
	var i;
	for (i = 0; i < x.length; i++) {
		x[i].innerHTML = '<a class="bold email color" title="Email Darren Glaser"' + path + '\'' + prefix + addy6264 + ssubject + '\'' + attribs + '>' + addy6264 + '<\/a>';
	}


	/*****************************************************************************
	 FORM VALIDATION
	 *****************************************************************************/
	(function() {
		'use strict';
		window.addEventListener('load', function() {
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
				form.addEventListener('submit', function(event) {
					if (form.checkValidity() === false) {
						event.preventDefault();
						event.stopPropagation();
					}
					//form.classList.add('was-validated');
				}, false);
			});
		}, false);
	})();

	function clearForm($form) {
		$form.find(':input').not(':button, :submit, :reset, :hidden, :checkbox, :radio').val('');
		$form.find(':checkbox, :radio').prop('checked', false);
	}

	/*****************************************************************************
	 CONTACT FORM
	 *****************************************************************************/
	$("#form1_contact-form").on("submit", function(event){
		event.preventDefault();

		$('#form1_contact-form input[type=submit]').attr('value', 'Processing...');

		if ( $('#form1_name').val() == '' ) {
			$('#form2_name').addClass('error').attr('placeholder', 'Please enter your first and last name');
			setTimeout(showFunc, 3000);
		}
		if ( $('#form1_email').val() == '' ) {
			$('#form2_email').addClass('error').attr('placeholder', 'Please enter your email address');
			setTimeout(showFunc, 3000);
		}
		if ( $('#form1_enquiry').val() == '' ) {
			$('#form1_enquiry').addClass('error').attr('placeholder', 'Please enter your message/enquiry');
			setTimeout(showFunc, 3000);
		}

		function showFunc() {
			$('#form1_contact-form').find( "[type=submit]" ).attr('value', 'Submit');
			$('#form1_name, #form1_email, #form1_enquiry').removeClass('error');
		}

		if ( $('#form1_name').val() !== '' && $('#form1_email').val() !== '' && $('#form1_enquiry').val() !== '' && $('.middlename').val() === '' ) {

			var formValues = $(this).serialize();


			$.post('/', formValues, function (data) {
				setTimeout(function(){
					$('#form1_contact-form').css('display', 'none');
					$('#contact .notification_ok').css('display', 'block');
				}, 2000);
			}).done(function() {
				// Reset all whether the form submitted successfully or not
				setTimeout(function(){
					$('#contact .notification_ok').css('display', 'none');
					$('#form1_contact-form').fadeIn(2000);
					$('#form1_contact-form').find( "[type=submit]" ).attr('value', 'Submit');
					clearForm($('#form1_contact-form'));
				}, 4000);
			}).fail(function() {
				// Show error modal if there was any kind of error
				$('#contact .notification_error').css('display', 'block');
				$('#form1_contact-form').trigger('reset');
				$('#form1_contact-form').find( "[type=submit]" ).attr('value', 'Submit');
			});


		} else {
			return false;
		}
	});


})(jQuery)

$(document).ready(function(){
	"use strict";

	/* MOBILE DETECT */
	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
		},
		any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};

	if ( isMobile.any() ) {
		$('.desktop-only').css('display', 'none!important');
		$('.mobile-only').css('display', 'block!important');
	} else {
		$('.mobile-only').css('display', 'none!important');
	}

});