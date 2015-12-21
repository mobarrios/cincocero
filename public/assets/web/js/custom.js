"use strict";


jQuery(document).ready(function () {
  
  /* =========================================================
  Main Menu
  ============================================================ */

  Modernizr.load([
    {
      load: 'js/superfish.js',
      complete: function () {

          //Main menu
          jQuery('#main-menu').superfish({
            cssArrows: false
          });

      }
    }
  ]);

  /* =========================================================
  Mobile Menu
  ============================================================ */
  Modernizr.load([
    {
      load: 'js/jquery.navgoco.js',
      complete: function () {

          jQuery('#mobile-menu').navgoco({accordion: true});
          jQuery( "#main-nav > i" ).click(function(){
              jQuery( "#mobile-menu" ).slideToggle( "slow" );
          });
      }
    }
  ]);


  /* =========================================================
  Top Mobile Menu
  ============================================================ */
  Modernizr.load([
    {
      load: 'js/jquery.navgoco.js',
      complete: function () {

          jQuery('#top-mobile-menu').navgoco({accordion: true});
          jQuery( "#top-nav > .menu-icon" ).click(function(){
              jQuery( "#top-mobile-menu" ).slideToggle( "slow" );
          });
      }
    }
  ]);


  /* =========================================================
  Footer Mobile Menu
  ============================================================ */
  Modernizr.load([
    {
      load: 'js/jquery.navgoco.js',
      complete: function () {

          jQuery('#bottom-mobile-menu').navgoco({accordion: true});
          jQuery( "#bottom-nav > .menu-icon" ).click(function(){
              jQuery( "#bottom-mobile-menu" ).slideToggle( "slow" );
          });
      }
    }
  ]);


  /* =========================================================
  Flex slider
  ============================================================ */
  Modernizr.load([
    {
      load: 'js/jquery.flexslider-min.js',
      complete: function () {
        jQuery('.punica-home-slider').flexslider({
          animation: "slide",
          controlNav: false,
          slideshow: false,
          smoothHeight: true,
          prevText: "",
          nextText: "",
          start: function(slider){
            jQuery('body').removeClass('loading');
          }
        });
      }
    }
  ]);

  Modernizr.load([
    {
      load: 'js/jquery.flexslider-min.js',
      complete: function () {
        jQuery('.punica-featured-news-slider').flexslider({
          animation: "slide",
          controlNav: false,
          slideshow: false,
          smoothHeight: true,
          prevText: "",
          nextText: "",
          start: function(slider){
            jQuery('body').removeClass('loading');
          }
        });
      }
    }
  ]);


  Modernizr.load([
    {
      load: 'js/jquery.flexslider-min.js',
      complete: function () {
        jQuery('.punica-entry-slider').flexslider({
          animation: "slide",
          controlNav: false,
          slideshow: false,
          smoothHeight: true,
          prevText: "",
          nextText: "",
          start: function(slider){
            jQuery('body').removeClass('loading');
          }
        });
      }
    }
  ]);


  Modernizr.load([
    {
      load: 'js/jquery.flexslider-min.js',
      complete: function () {
        jQuery('.punica-flex-footer').flexslider({
          animation: "slide",
          controlNav: true,
          directionNav: false,
          slideshow: false,
          smoothHeight: true,
          prevText: "",
          nextText: "",
          start: function(slider){
            jQuery('body').removeClass('loading');
          }
        });
      }
    }
  ]);


  Modernizr.load([
    {
      load: 'js/jquery.flexslider-min.js',
      complete: function () {
        jQuery('.punica-flex-shop-slider').flexslider({
          animation: "slide",
          controlNav: false,
          directionNav: true,
          slideshow: false,
          smoothHeight: true,
          prevText: "",
          nextText: "",
          start: function(slider){
            jQuery('body').removeClass('loading');
          }
        });
      }
    }
  ]);


  Modernizr.load([
    {
      load: 'js/jquery.flexslider-min.js',
      complete: function () {
        jQuery('.punica-entry-box-slider').flexslider({
          animation: "slide",
          controlNav: false,
          directionNav: true,
          slideshow: false,
          smoothHeight: true,
          prevText: "",
          nextText: "",
          start: function(slider){
            jQuery('body').removeClass('loading');
          }
        });
      }
    }
  ]);


  /* =========================================================
  Twitter
  ============================================================ */
  if (jQuery('#tweets').length > 0) {
    Modernizr.load([
      {
        load: ['js/jquery.timeago.js','js/jquery.tweetable.js'],
        complete: function () {
            jQuery('#tweets').tweetable({
                username: 'PunicaTheme',
                time: true,
                rotate: false,
                speed: 4000,
                limit: 3,
                replies: false,
                position: 'append',
                failed: "Sorry, twitter is currently unavailable for this user.",
                loading: "Loading tweets...",
                html5: true,
                onComplete: function ($ul) {
                    jQuery('time').timeago();
                }
            });
        }
      }
    ]);
  }


  /* =========================================================
  Accordion
  ========================================================= */
  jQuery(document).ready(function() {
      var acc_wrapper=jQuery('.acc-wrapper');
      if (acc_wrapper.length >0) 
      {
          
          jQuery('.acc-wrapper .accordion-container').hide();
          jQuery.each(acc_wrapper, function(index, item){
              jQuery(this).find(jQuery('.accordion-title')).first().addClass('active').next().show();
              
          });
          
          jQuery('.accordion-title').on('click', function(e) {
              kopa_accordion_click(jQuery(this));
              e.preventDefault();
          });
          
          var titles = jQuery('.accordion-title');
          
          jQuery.each(titles,function(){
              kopa_accordion_click(jQuery(this));
          });
      }        
  });

  function kopa_accordion_click (obj) {
      if( obj.next().is(':hidden') ) {
          obj.parent().find(jQuery('.active')).removeClass('active').next().slideUp(300);
          obj.toggleClass('active').next().slideDown(300);
                              
      }
  jQuery('.accordion-title span').html('+');
      if (obj.hasClass('active')) {
          obj.find('span').first().html('-');              
      } 
  }


  /* =========================================================
  Owl Carousel
  ============================================================ */
  if (jQuery('.punica-shop-owl-carousel').length > 0) {

    Modernizr.load([
      {
        load: 'js/owl.carousel.js',
        complete: function () {
            jQuery('.punica-shop-owl-carousel').owlCarousel({
                items : 3,
                itemsDesktop: [1120,3],
                lazyLoad : true,
                navigation : true,
                pagination: false,
                navigationText : false
            });
        }
      }
    ]);
  };


  // Slider style 3

  if (jQuery('.punica-slider-carousel').length > 0) {
    Modernizr.load([
      {
        load: 'js/owl.carousel.js',
        complete: function () {
            jQuery('.punica-slider-carousel').owlCarousel({
                items : 3,
                lazyLoad : true,
                navigation : true,
                pagination: false,
                navigationText : false
            });
        }
      }
    ]);
  };


  // Related Post

  if (jQuery('.related-post-carousel').length > 0) {
    Modernizr.load([
      {
        load: 'js/owl.carousel.js',
        complete: function () {
            jQuery('.related-post-carousel').owlCarousel({
                items : 3,
                itemsDesktop: [1120,2],
                lazyLoad : true,
                navigation : true,
                pagination: false,
                navigationText : false
            });
        }
      }
    ]);
  };


  // Carousel Images

  if (jQuery('.punica-carousel-imgs').length > 0) {
    Modernizr.load([
      {
        load: 'js/owl.carousel.js',
        complete: function () {
            jQuery('.punica-carousel-imgs').owlCarousel({
                items : 4,
                itemsDesktop: [1120,2],
                lazyLoad : true,
                navigation : true,
                pagination: false,
                navigationText : false
            });
        }
      }
    ]);
  };


  // Punica list carousel

  if (jQuery('.punica-list-carousel').length > 0) {
    Modernizr.load([
      {
        load: 'js/owl.carousel.js',
        complete: function () {
            jQuery('.punica-list-carousel').owlCarousel({
                items : 4,
                itemsDesktop: [1120,2],
                lazyLoad : true,
                navigation : true,
                pagination: false,
                navigationText : false
            });
        }
      }
    ]);
  };


  // Punica gallery

  if (jQuery('.punica-gallery-carousel').length > 0) {
    Modernizr.load([
      {
        load: 'js/owl.carousel.js',
        complete: function () {
            jQuery('.punica-gallery-carousel').owlCarousel({
                items : 1,
                itemsDesktop: [1120,1],
                itemsTablet: [800,2],
                lazyLoad : true,
                navigation : true,
                pagination: false,
                navigationText : false
            });
        }
      }
    ]);
  };


  /* =========================================================
  Color Box
  ============================================================ */
  Modernizr.load([
    {
      load: 'js/jquery.colorbox.js',
      complete: function () {
        jQuery(".group1").colorbox({rel:'group1'});
      }
    }
  ]);

  
  /* =========================================================
  Masonry
  ============================================================ */

  if (jQuery('.punica-entry-list-2').length > 0) {
    Modernizr.load([
      {
        load: ['js/masonry.pkgd.js','js/imagesloaded.js'],
        complete: function () {
          var $container = jQuery('.punica-entry-list-2');
          // initialize
          
          imagesLoaded($container,function(){
            $container.masonry({
              itemSelector: '.element'
            });
            $container.masonry('bindResize')
          });
        }
      }
    ]);
  };




  /* =========================================================
  Comment Form
  ============================================================ */
  if(jQuery("#comments-form").length > 0){

    Modernizr.load([
      {
        load: ['js/jquery.form.js','js/jquery.validate.js'],
        complete: function () {

          jQuery('#comments-form').validate({

            // Add requirements to each of the fields
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 10
                }
            },
            
            // Specify what error messages to display
            // when the user does something horrid
            messages: {
                name: {
                    required: "Please enter your name.",
                    minlength: jQuery.format("At least {0} characters required.")
                },
                email: {
                    required: "Please enter your email.",
                    email: "Please enter a valid email."
                },
                url: {
                    required: "Please enter your url.",
                    url: "Please enter a valid url."
                },
                message: {
                    required: "Please enter a message.",
                    minlength: jQuery.format("At least {0} characters required.")
                }
            },
            
            // Use Ajax to send everything to processForm.php
            submitHandler: function(form) {
                jQuery("#submit-comment").attr("value", "Sending...");
                jQuery(form).ajaxSubmit({
                    success: function(responseText, statusText, xhr, $form) {
                        jQuery("#response").html(responseText).hide().slideDown("fast");
                        jQuery("#submit-comment").attr("value", "Comment");
                    }
                });
                return false;
            }
          });

        }
      }
    ]);
  }


  /* =========================================================
  Contact Form
  ============================================================ */
  if(jQuery("#contact-form").length > 0){

    Modernizr.load([
      {
        load: ['js/jquery.form.js','js/jquery.validate.js'],
        complete: function () {

          jQuery('#contact-form').validate({

            // Add requirements to each of the fields
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 10
                }
            },
            
            // Specify what error messages to display
            // when the user does something horrid
            messages: {
                name: {
                    required: "Please enter your name.",
                    minlength: jQuery.format("At least {0} characters required.")
                },
                email: {
                    required: "Please enter your email.",
                    email: "Please enter a valid email."
                },
                url: {
                    required: "Please enter your url.",
                    url: "Please enter a valid url."
                },
                message: {
                    required: "Please enter a message.",
                    minlength: jQuery.format("At least {0} characters required.")
                }
            },
            
            // Use Ajax to send everything to processForm.php
            submitHandler: function(form) {
                jQuery("#submit-contact").attr("value", "Sending...");
                jQuery(form).ajaxSubmit({
                    success: function(responseText, statusText, xhr, $form) {
                        jQuery("#response").html(responseText).hide().slideDown("fast");
                        jQuery("#submit-contact").attr("value", "Submit");
                    }
                });
                return false;
            }
          });

        }
      }
    ]);
  }

});



/* =========================================================
Tabs
============================================================ */
jQuery(document).ready(function() { 
    
  if( jQuery(".tab-content-1").length > 0){   
      //Default Action Product Tab
      jQuery(".tab-content-1").hide(); //Hide all content
      jQuery("ul.tabs-1 li:first").addClass("active").show(); //Activate first tab
      jQuery(".tab-content-1:first").show(); //Show first tab content
      //On Click Event Product Tab
      jQuery("ul.tabs-1 li").click(function() {
          jQuery("ul.tabs-1 li").removeClass("active"); //Remove any "active" class
          jQuery(this).addClass("active"); //Add "active" class to selected tab
          jQuery(".tab-content-1").hide(); //Hide all tab content
          var activeTab = jQuery(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
          jQuery(activeTab).fadeIn(); //Fade in the active content
          return false;
      
      });
  }

  if( jQuery(".tab-content-2").length > 0){   
      //Default Action Product Tab
      jQuery(".tab-content-2").hide(); //Hide all content
      jQuery("ul.tabs-2 li:first").addClass("active").show(); //Activate first tab
      jQuery(".tab-content-2:first").show(); //Show first tab content
      //On Click Event Product Tab
      jQuery("ul.tabs-2 li").click(function() {
          jQuery("ul.tabs-2 li").removeClass("active"); //Remove any "active" class
          jQuery(this).addClass("active"); //Add "active" class to selected tab
          jQuery(".tab-content-2").hide(); //Hide all tab content
          var activeTab = jQuery(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
          jQuery(activeTab).fadeIn(); //Fade in the active content
          return false;
      
      });
  }
    
});


/* =========================================================
Toggle Boxes
============================================================ */
jQuery(document).ready(function () {
     
  jQuery('#toggle-view li').click(function (event) {
      
      var text = jQuery(this).children('div.panel');

      if (text.is(':hidden')) {
          jQuery(this).addClass('active');
          text.slideDown('300');
          jQuery(this).children('span').html('-');                 
      } else {
          jQuery(this).removeClass('active');
          text.slideUp('300');
          jQuery(this).children('span').html('+');               
      }
       
  });
 
});


/* =========================================================
Dynamic Progress Bar
============================================================ */
jQuery(window).load(function(){    
    jQuery('.progress-bar').css('width',  function(){ return ($(this).attr('data-percentage')+'%')});
  });


/* =========================================================
Google Map
============================================================ */
var map;

if (jQuery('.punica-map').length > 0) {
      var id_map = jQuery('.punica-map').attr('id');
      var lat = parseFloat(jQuery('.punica-map').attr('data-latitude'));
      var lng = parseFloat(jQuery('.punica-map').attr('data-longitude'));
      var place = jQuery('.punica-map').attr('data-place');

  map = new GMaps({
      el: '#'+id_map,
      lat: lat,
      lng: lng,
      zoomControl : true,
      zoomControlOpt: {
          style : 'SMALL',
          position: 'TOP_LEFT'
      },
      panControl : false,
      streetViewControl : false,
      mapTypeControl: false,
      overviewMapControl: false
    });
    map.addMarker({
      lat: lat,
        lng: lng,
      title: place
    });
};