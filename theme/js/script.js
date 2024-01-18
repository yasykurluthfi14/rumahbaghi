/*==============================================================================================================
Project:	Socase - One page HTML5 Template 
Version:	1.0
Theme Available on - Theme Forest 
Author:	abmathasuriya
Design By - VibrantTheme.com
===============================================================================================================*/
(function($) { 
	"use strict";
	
	/* --------------------------------------------
     Platform detect
     --------------------------------------------- */
    var mobileTest;
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        mobileTest = true;
        $("html").addClass("mobile");
    }
    else {
        mobileTest = false;
        $("html").addClass("no-mobile");
    }
    
    var mozillaTest;
    if (/mozilla/.test(navigator.userAgent)) {
        mozillaTest = true;
    }
    else {
        mozillaTest = false;
    }
    var safariTest;
    if (/safari/.test(navigator.userAgent)) {
        safariTest = true;
    }
    else {
        safariTest = false;
    }
     // Detect touch devices    
    if (!("ontouchstart" in document.documentElement)) {
        document.documentElement.className += " no-touch";
    }

    // Set cursor focus to search form{
    $('.btn-search').on('click',function(){
    	$('#ModalSearch').modal('show');
    	$('#ModalSearch').on('shown.bs.modal', function () {
		    $('.input-search').focus();
		})  
    });
	
	/*==================WINDOW ONLOAD METHID==================*/
	$(window).load(function(){
        
        // Page loader        
        $("body").imagesLoaded(function(){
            $(".page-loader div").fadeOut();
			$(".page-loader").delay(500).fadeOut("slow");
        });
        
		//On scroll navigation
        init_scroll_navigate();
        	
		//Trigger resize and scroll
        $(window).trigger("scroll");
        $(window).trigger("resize");
        
        // Hash menu forwarding
        if ((window.location.hash) && ($(window.location.hash).length)){
            var hash_offset = $(window.location.hash).offset().top;
            $("html, body").animate({
                scrollTop: hash_offset
            });
        }
        
    });
	/*==================END WINDOW ONLOAD METHID==================*/
	
	/*==================DOCUMENT READY METHID==================*/
	$(document).ready(function(){
        
        $(window).trigger("resize");            
        
		//Initialize Menu
		init_menu();  
		
		//Initialize Parallax
		init_parallax();	
		
		//Initialize Portfolio Filter	
		init_ProjectFilter();		
		
		//Initialize Masonry layoutMode
		init_masonry();		
		
		//Initialize Lightbox
        init_lightbox();
		
		//Initialize scroll top
        init_scrolltop(); 		
		
		//Initialize WOW animation
        init_wow();		
		
		//Initialize Number Counter
		init_counter();
		
		//Initialize Tab 
		tab_init();
		
		//Initialize Process Block Hover Content
		init_processGrid();
		
		//Initialize Slick Slider
		init_allSlider();
		
		//Initialize Pricing Price
		init_pricingPrice();
		
		//Initialize Rotate Text 
		init_rotateText();
		
		//Initialize COntact Form
		init_contactSection();
		
		//Initialize Subscribe Form
		//init_subscribe();
		
		// Responsive video
        $(".video, .blog-media").fitVids();
        $(".work-full-media").fitVids(); 
		
		//Right sidebar Sub Menu Trigger
        $('.sn-main-menu li a.sub-menu-trigger').on('mouseenter', function(){
            $(this).next('.sub-menu').stop().slideDown(800);
        });
        $('.sn-main-menu li').on('mouseleave', function(){
            $('.sub-menu').stop().slideUp(800);
        });
		
		//Set progress bar width		
		$(".progress-bar").each(function(){
			 var val = $(this).attr("aria-valuenow");
			 $(this).css('width', val + "%");			 
		 });
		
		//close popup
		$(document).on('click', '.popup-modal-dismiss', function (e) {
			e.preventDefault();
			$.magnificPopup.close();
		});
    });
	/*==================END DOCUMENT READY METHID==================*/
	
    /*==================WINDOW RESIZE METHID==================*/
    $(window).resize(function(){
        
		//Initialize Menu on resize
        init_menu_resize();
		
		//Initialize Fullscreen on resize
        js_hight_fullscreen();
        
    });
	/*==================END WINDOW RESIZE METHID==================*/
	
	//Set Sections background image
	var pageSection = $(".page-section, .idea-item.bg-img,.article_author .portrait,.article-thumbnail, .macbook-fade .slick-item");
	pageSection.each(function(indx){			
		if ($(this).attr("data-background")){
			$(this).css("background-image", "url(" + $(this).data("background") + ")");
		}
	});
	
	//Initialize Menu variable
	var mobile_nav = $(".mobile-nav");
	var desktop_nav = $(".large-nav");
	
	// Initialize Projects filtering variable and portfolio grid
	var selector = 0;
	var project_grid = $("#project_grid, #isotope");
	
	// Function equal height
    !function(a){
        a.fn.equalHeights = function(){
            var b = 0, c = a(this);
            return c.each(function(){
                var c = a(this).innerHeight();
                c > b && (b = c)
            }), c.css("height", b)
        }, a("[data-equal]").each(function(){
            var b = a(this), c = b.data("equal");
            b.find(c).equalHeights()
        })
    }(jQuery);
	
	/* ==============================================
	Navigation resize
	=============================================== */	
    function init_menu_resize(){

		// Mobile menu max height
        $(".small-device-menu .large-nav > ul").css("max-height", $(window).height() - $(".main-nav").height() - 20 + "px");
        
        // Mobile menu style toggle
        if ($(window).width() <= 1024) {
            $(".main-nav").addClass("small-device-menu");			
			$(".main-nav-mobile").removeClass("dt-mobile-nav");
			$(".cd-right-content").removeClass("sidebar-section");
			$(".dt-sidebar").hide();			
        }else if ($(window).width() > 1024) {
			$(".main-nav").removeClass("small-device-menu");						
			$(".main-nav-mobile").addClass("dt-mobile-nav"); 			
			$(".cd-right-content").addClass("sidebar-section");
			$(".dt-sidebar").show();				
			desktop_nav.show();
		}
    }
		
	/* ==============================================
	Nav line height
	=============================================== */		
    function menu_line_height(height_initial, height_after){
        height_initial.height(height_after.height());
        height_initial.css({
            "line-height": height_after.height() + "px"
        });
    }
	    
	/* ==============================================
	Nav initialization
	=============================================== */		
	function init_menu(){
    
		// Navbar sticky
        $(".sticky").sticky({
            topSpacing: 0
        });
		
		//menu height
		menu_line_height($(".nav-wrapper > ul > li > a"), $(".main-nav"));
        menu_line_height(mobile_nav, $(".main-nav"));
        mobile_nav.css({
            "width": $(".main-nav").height() + "px"
        });

        // Transpaner menu        
        if ($(".main-nav").hasClass("transparent")){
           $(".main-nav").addClass("nav-transparent"); 
        }
		
		// On scroll nav height change
        $(window).on("scroll",function(){        
			if ($(window).scrollTop() > 10) {
				$(".nav-transparent").removeClass("transparent");
				$(".main-nav, .header-logo-wrap .logo, .mobile-nav, .header-nav-section .section-nav").addClass("small-height");
				$(".nav-wrapper ul li .cart-label").css('top','7px');
			}
			else {
				$(".nav-transparent").addClass("transparent");
				$(".main-nav, .header-logo-wrap .logo, .mobile-nav, .header-nav-section .section-nav").removeClass("small-height");
				$(".nav-wrapper ul li .cart-label").css('top','17px');
			}                        
        });

        // Mobile menu toggle        
		mobile_nav.on("click",function(){
            if (desktop_nav.hasClass("menu-opened")) {
                desktop_nav.slideUp("slow", "easeOutExpo").removeClass("menu-opened");
                $(this).removeClass("active");
            } else {
                desktop_nav.slideDown("slow", "easeOutQuart").addClass("menu-opened");
                $(this).addClass("active");
            }            
        });
		
		//set active menu link
		desktop_nav.find("a:not(.menu-down)").on("click",function(){
            if (mobile_nav.hasClass("active")) {
                desktop_nav.slideUp("slow", "easeOutExpo").removeClass("menu-opened");
                mobile_nav.removeClass("active");
            }            
        });
        
        /* ==============================================
		Sub menu
		=============================================== */		
       
        var menuSub = $(".menu-down");
        var menulist;
        
        $(".small-device-menu .menu-down").find(".fa:first").removeClass("fa-angle-right").addClass("fa-angle-down");		
				
		menuSub.on("click",function(){
            if ($(".main-nav").hasClass("small-device-menu")) {
                menulist = $(this).parent("li:first");
                if (menulist.hasClass("menu-opened")) {
                    menulist.find(".nav-sub:first").slideUp(function(){
                        menulist.removeClass("menu-opened");
                        menulist.find(".menu-down").find(".fa:first").removeClass("fa-angle-up").addClass("fa-angle-down");
                    });
                }
                else {
                    $(this).find(".fa:first").removeClass("fa-angle-down").addClass("fa-angle-up");
                    menulist.addClass("menu-opened");
                    menulist.find(".nav-sub:first").slideDown();
                }
                
                return false;
            }
            else {				
               
            }
            
        });
        
        menulist = menuSub.parent("li");
        menulist.hover(function(){        
            if (!($(".main-nav").hasClass("small-device-menu"))) {            
                /*$(this).find(".nav-sub:first").stop(true, true).slideToggle(0,"linear");*/
				$(this).find(".nav-sub:first").stop(true, true).fadeIn(600);
            }            
        }, function(){        
            if (!($(".main-nav").hasClass("small-device-menu"))) {            
                /*$(this).find(".nav-sub:first").stop(true, true).slideToggle(0,"linear");*/
				$(this).find(".nav-sub:first").stop(true, true).delay(100).fadeOut("fast");
			}            
        });       
			
    }

	/* ==============================================
	Scroll to homepage 
	=============================================== */
	function init_scrolltop(){		
		var offset = 450;
		var duration = 500;		
		jQuery('.top-button').on("click",function(event){
			event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
			return false;
		})
	}	
	
	/* ==============================================
	Number Counter
	=============================================== */
	function init_counter(){
		$(".fact-wrapper").filter(":in-viewport:first").each(function(){
			$('.counter').counterUp({
				delay: 10,
				time: 2000
			});	
		});		
	}
	
	/* ==============================================
	Parallax 
	=============================================== */
	function init_parallax(){
        if (($(window).width() >= 1024) && (mobileTest == false)) {
            $(".parallax-1").parallax("50%", 0.1);
            $(".parallax-2").parallax("50%", 0.2);			
            $(".parallax-3").parallax("50%", 0.3);
            $(".parallax-4").parallax("50%", 0.4);
            $(".parallax-5").parallax("50%", 0.5);
            $(".parallax-6").parallax("50%", 0.6);
            $(".parallax-7").parallax("50%", 0.7);
            $(".parallax-8").parallax("50%", 0.9);
            $(".parallax-9").parallax("50%", 0.9);
            $(".parallax-10").parallax("50%", 0.5);
            $(".parallax-11").parallax("50%", 0.05);
        }        
    }
	
	/* ==============================================
	Lightbox
	=============================================== */
	function init_lightbox(){
		// Works Item Lightbox				
        $(".work-lightbox").magnificPopup({
            gallery: {
                enabled: true
            },
            mainClass: "mfp-fade",
			image: {
				verticalFit: true,
				titleSrc: function(item) {
					return item.el.attr('title');
				}
			 }
        });
		
		// gallery Item Lightbox				
        $(".gallery-lightbox").magnificPopup({
            gallery: {
                enabled: true
            },
            mainClass: "mfp-fade"
        });
		
		//lightbox
		$(".lightbox").magnificPopup();
		
		// lightbox with zoom gallery effect
		$('.zoom-gallery').magnificPopup({
		  type: 'image',
		  mainClass: 'mfp-with-zoom mfp-img-mobile',
		  gallery: {
                enabled: true
          },
		  image: {
			verticalFit: true,
			titleSrc: function(item) {
				return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
			}
		 },
		  zoom: {
			enabled: true,
			duration: 300,
			easing: 'ease-in-out',
			// The "opener" function should return the element from which popup will be zoomed in
			// and to which popup will be scaled down
			// By defailt it looks for an image tag:
			opener: function(openerElement) {
			  // openerElement is the element on which popup was initialized, in this case its <a> tag
			  // you don't need to add "opener" option if this code matches your needs, it's defailt one.
			  return openerElement.is('img') ? openerElement : openerElement.find('img');
			}
		  }

		});
		
		//Lightbox with popup gallery
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
				titleSrc: function(item) {
					return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
				}
			}
		});
		
		//Lightbox with popup with vertical-fit
		$('.image-popup-vertical-fit').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			mainClass: 'mfp-img-mobile',
			image: {
				verticalFit: true
			}			
		});

		//Lightbox popup with fit-width
		$('.image-popup-fit-width').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			image: {
				verticalFit: false
			}
		});

		$('.image-popup-no-margins').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			closeBtnInside: false,
			fixedContentPos: true,
			mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
			image: {
				verticalFit: true
			},
			zoom: {
				enabled: true,
				duration: 300 // don't foget to change the duration also in CSS
			}
		});
		
		//lightbox for popup map, Video
		$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
          disableOn: 700,
          type: 'iframe',
          mainClass: 'mfp-fade',
          removalDelay: 160,
          preloader: false,

          fixedContentPos: false
        });
		
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,			
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,			
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
		
		$('.popup-with-form').magnificPopup({
			type: 'inline',
			preloader: false,
			focus: '#Email',
			// When elemened is focused, some mobile browsers in some cases zoom in
			// It looks not nice, so we disable it:
			callbacks: {
				beforeOpen: function() {
					if($(window).width() < 700) {
						this.st.focus = false;
					} else {
						this.st.focus = '#Email';
					}
				}
			}
		});
		
		$('.popup-modal').magnificPopup({
			type: 'inline',
			preloader: false,
			focus: '#username',
			modal: true
		});
		
	}

	/* ==============================================
	Smooth scroll
	=============================================== */
	function init_smoothScroll(){		
		smoothScroll.init({
			speed: 400,
			easing: 'easeInOutCubic',
			offset: 40,
			updateURL: false,
			callbackBefore: function ( toggle, anchor ) {},
			callbackAfter: function ( toggle, anchor ) {}
		});
	}
	
	/* ==============================================
	Set fullscreen height
	=============================================== */
	function js_hight_fullscreen(){				
		$(".home").height($(window).height());        
		$(".fullscreen").height($(window).height());	
		$(".height-parent").each(function(){
			$(this).height($(this).parent().first().height());
		});		
	}

	/* ==============================================
	Project filter 
	=============================================== */
	function init_ProjectFilter(){
		 var isotope_mode;
		 if (project_grid.hasClass("masonry")){
			 isotope_mode = "masonry";
		 } else{
			 isotope_mode = "fitRows"
		 }
					
		$(".filter").on("click",function(){
            $(".filter").removeClass("current");
			 $(this).addClass("current");
			 selector = $(this).attr('data-filter');			 
			 project_grid.isotope({
				 itemSelector: '.work-item',
				 layoutMode: isotope_mode,
				 filter: selector
			 });
			 return false;
        });
		
		 if (window.location.hash) {
			 $(".filter").each(function(){
				 if ($(this).attr("data-filter") == "." + window.location.hash.replace("#", "")) {
					 $(this).trigger('click');
					 
					 $("html, body").animate({
						 scrollTop: $("#portfolio").offset().top
					 });
					 
				 }
			 });
		 }
		
		if (project_grid.hasClass("projects-wrapper")){	
			 project_grid.imagesLoaded(function(){
				 project_grid.isotope({
					 itemSelector: '.work-item',
					 layoutMode: isotope_mode,
					 filter: selector
				 });
			 });
		}
	}
  
	/* ==============================================
	Masonry Layouts
	=============================================== */
	function init_masonry(){
		$(".masonry").imagesLoaded(function(){
			$(".masonry").masonry();
		});
	}
	
	/* ==============================================
	Individual section scroll
	=============================================== */
	function init_scroll_navigate(){        
        $(".local-scroll").localScroll({
            target: "body",
            duration: 1500,
            offset: 0,
            easing: "easeInOutExpo"
        });
        var sections = $(".page-section");
        var menu_links = $(".scroll-nav li a");
        var nav_arrow = $(".section-navigation");
		$(window).on("scroll",function(){           
            sections.filter(":in-viewport:first").each(function(){
                var active_section = $(this);
                var active_link = $('.scroll-nav li a[href="#' + active_section.attr("id") + '"]');
				var last_active_id = "#"+active_section.closest(".page-section").nextAll("section[id]").filter(':last').attr("id");
				var active_id = "#"+active_section.closest(".page-section").nextAll("section[id]").filter(':first').attr("id");
				if(last_active_id==active_id){					
					nav_arrow.find('span').removeClass("lnr-arrow-down").addClass("lnr-arrow-up");
					nav_arrow.find('a').attr("href", "#top");
				}else{
					nav_arrow.find('a').attr("href", active_id);
					if (nav_arrow.find('span').hasClass("lnr-arrow-up"))
						nav_arrow.find('span').removeClass("lnr-arrow-up").addClass("lnr-arrow-down");
				}
                menu_links.removeClass("active");
                active_link.addClass("active");
            });
            
        });
        
    }
	
	/* ==============================================
	Tab initialization
	=============================================== */
	function tab_init(){
		$('.tabbed-content').each(function() {
			$(this).append('<ul class="content"></ul>');
		});

		$('.tabs li').each(function() {
			var originalTab = $(this),
				activeClass = "";
			if (originalTab.is('.tabs>li:first-child')) {
				activeClass = ' class="active"';
			}
			var tabContent = originalTab.find('.tab-content').detach().wrap('<li' + activeClass + '></li>').parent();
			originalTab.closest('.tabbed-content').find('.content').append(tabContent);
		});

		$('.tabs li').on("click",function(){
            $(this).closest('.tabs').find('li').removeClass('active');
			$(this).addClass('active');
			var liIndex = $(this).index() + 1;
			$(this).closest('.tabbed-content').find('.content>li').removeClass('active');
			$(this).closest('.tabbed-content').find('.content>li:nth-of-type(' + liIndex + ')').addClass('active');
			return false;
        });
		
	}
	
	/* ==============================================
	WOW animate
	=============================================== */
	function init_wow(){
		var wow = new WOW({
			boxClass: 'wow',
			animateClass: 'animated',
			offset: 90,
			mobile: false, 
			live: true 
		});		
		if ($("body").hasClass("content-animate")){
		   wow.init(); 
		}
	}
	
	/* ==============================================
	Process section on click visible content
	=============================================== */
	function init_processGrid(){
		jQuery('.alt-block-item').find(".process-detail").on("click",function(event){
			event.preventDefault();
			$(".alt-block-item").find(".alt-block-description").removeClass("alt-block-visible");
			$(this).parent(".alt-block-item").find(".alt-block-description").addClass("alt-block-visible");
			return false;
		})
		$(document).on("click",function(e){
			$(".alt-block-description").removeClass("alt-block-visible");			
		});
	}
	
	/* ==============================================
	Pricing price
	=============================================== */
	function init_pricingPrice(){
		var el = $('.price--free');
		var e2 = $('.price--standard');
		var e3 = $('.price--enterprise');
		var m1 = $(el).attr("data-month-dollar");
		var m2 = $(e2).attr("data-month-dollar");
		var m3 = $(e3).attr("data-month-dollar");
		var y1 = $(el).attr("data-anual-dollar");
		var y2 = $(e2).attr("data-anual-dollar");
		var y3 = $(e3).attr("data-anual-dollar");

		var mm1 = String(m1).split(".");
		var mm2 = String(m2).split(".");
		var mm3 = String(m3).split(".");
		var yy1 = String(y1).split(".");
		var yy2 = String(y2).split(".");
		var yy3 = String(y3).split(".");
				
		$(".monthPrice").on("click",function(e){
			e.preventDefault();
			$(el).html(mm1[0]+"<sub class='sub'>."+mm1[1]).counterUp({delay: 10,time: 500});
			$(e2).html(mm2[0]+"<sub class='sub'>."+mm2[1]).counterUp({delay: 10,time: 500});
			$(e3).html(mm3[0]+"<sub class='sub'>."+mm3[1]).counterUp({delay: 10,time: 500});
			$(".yearPrice").removeClass("active-price");
			$(this).addClass("active-price");
			return false;		
		});
		$(".yearPrice").on("click",function(e){
			e.preventDefault();
			$(el).html(yy1[0]+"<sub class='sub'>."+yy1[1]).counterUp({delay: 10,time: 500});
			$(e2).html(yy2[0]+"<sub class='sub'>."+yy2[1]).counterUp({delay: 10,time: 500});
			$(e3).html(yy3[0]+"<sub class='sub'>."+yy3[1]).counterUp({delay: 10,time: 500});
			$(this).addClass("active-price");
			$(".monthPrice").removeClass("active-price");
			return false;				
		});
		
	}
	
	/* ==============================================
	Slick slider initialization
	=============================================== */
	function init_allSlider(){
		
		$('.home-bgfade').slick({
		  dots: false,
		  infinite: true,
		  autoplay:true,
		  speed: 800,
		  autoplaySpeed:3000,
		  fade: true,
		  cssEase: 'linear'
		});		
				
		$('.product-gallery').slick({
		  dots: true,
		  infinite: true,		  
		  cssEase: 'linear',		  
		  speed: 300,
		  nextArrow: $('.nav-right'),
		  prevArrow: $('.nav-left')
		});
		
		$('.home-fullscreen-slider').slick({
		  dots: false,
		  infinite: true,		  
		  cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
		  useTransform: true,
		  touchThreshold: 100,
		  nextArrow: $('.nav-right'),
		  prevArrow: $('.nav-left'),
		  speed: 800,
		});
		
		$('.testimonial-slider').slick({
			speed: 400,
			vertical:true,
			verticalSwiping:true,	
			adaptiveHeight:true,	
			cssEase: 'linear',
			nextArrow: $('.testimonial-right'),
			prevArrow: $('.testimonial-left')
		});
		
		$('.clients-slider').slick({
			centerMode: true,
			speed: 800,
		    centerPadding: '0px',
		    slidesToShow: 5,		
			nextArrow: $('.client-right'),
			prevArrow: $(".client-left"),
			responsive: [
				{
				  breakpoint: 992,
				  settings: {
					centerMode: true,
					slidesToShow: 3
				  }
				},
				{
				  breakpoint: 768,
				  settings: {
					centerMode: true,
					slidesToShow: 3
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
					centerMode: true,
					slidesToShow: 1
				  }
				}
			  ]
		});
		
		$('.features-slider').slick({
			speed: 800,
		    slidesToShow: 5,		
			adaptiveHeight:true,
			autoplay:true,
			autoplaySpeed:1500,
			pauseOnHover:true,
			nextArrow: $('.feature-right'),
			prevArrow: $(".feature-left"),
			responsive: [
				{
				  breakpoint: 1200,
				  settings: {
					slidesToShow: 4
				  }
				},
				{
				  breakpoint: 992,
				  settings: {
					slidesToShow: 3
				  }
				},
				{
				  breakpoint: 768,
				  settings: {
					slidesToShow: 2
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
					slidesToShow: 1
				  }
				}
			  ]
		});
		
		$('.macbook-fade').slick({
		  dots: false,
		  infinite: true,
		  autoplay:true,
		  speed: 400,
		  autoplaySpeed:400,
		  fade: true,
		  cssEase: 'linear'
		});
		
	}
	
	/* ==============================================
	Rotate text
	=============================================== */	
	function init_rotateText(e){
		var phrasesNum=1,
		phrases=["unstoppable!",
			  "branding agency",
			  "cuter in person.",
			  "Vibrant Themes",			  
			  "born to co-create reality!",
			  "what we do."];
		setInterval(function(){$(".footer-text-animated").html(phraseHtml(phrases[phrasesNum])),phrasesNum=phrasesNum<phrases.length-1?phrasesNum+1:0},3e3);
	}
	
	function phraseHtml(e){
		var t='<div class="flip-animated flip-x">';
		return t+=e
	}
	
	/* ==============================================
	Contact form submit via php and ajax
	=============================================== */
	function init_contactSection(){
		$('.openContact_Form,.closeContact_Form').on('click', function(event){
			event.preventDefault();
			$("#result").slideUp();
			if( $('.contact-form-overlay').hasClass('is-visible') ) {			
				$('.contact-form-overlay').removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
					$('body').removeClass('overflow-hidden');
				});
			} else {
				$('.contact-form-overlay').addClass('is-visible');
			}
			return false;
		});
		
		/* Form Submit*/
		
		$("#submit_btn").on('click', function(event){
			event.preventDefault();
			var user_name = $('input[name=name]').val();
			var user_email = $('input[name=email]').val();
			var user_message = $('textarea[name=message]').val();
			var emailReg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/igm;
			 				
			//Valiadation
			var proceed = true;
			if (user_name == "") {
				$('input[name=name]').css('border-bottom-color', '#e41919');
				proceed = false;
			}
			if (user_email == "") {
				$('input[name=email]').css('border-bottom-color', '#e41919');
				proceed = false;
			}
			if (!emailReg.test(user_email)) {
				$('input[name=email]').css('border-bottom-color', '#e41919');
				proceed = false;
			}
			if (user_message == "") {
				$('textarea[name=message]').css('border-bottom-color', '#e41919');
				proceed = false;
			}
					
			if (proceed) {
				
				var data_string = $('#c_form').serialize();
				$('#submit_btn').fadeOut();			
				 $.ajax({
					type: "POST",
					url: "contact-form.php",
					data: data_string,				
					success: function (data) {				
						$('#result').html('<div class="alert alert-green"><i class="fa fa-check contact-success"></i><span> Your message has been sent.</span></div>').slideDown();
						
						$('#c_form input').val('');
						$('#c_form textarea').val('');					
						
					},
					error: function (data) {
						$('#result').html('<div class="alert alert-yelow"><i class="fa fa-exclamation contact-error"></i><span> Something went wrong, please try again later.</span></div>').slideDown();										
						$('#submit_btn').fadeIn();	
					}
				})
			}        
			return false;
		});
		
		$("#c_form input, #c_form textarea").on('keyup', function(event){
			$("#c_form input, #c_form textarea").css('border-color', 'transparent');
			$("#result").slideUp();
		});
	}
  
  })(jQuery); 
