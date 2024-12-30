import domReady from '@roots/sage/client/dom-ready';
import { gsap } from 'gsap';
import 'jquery';
import lozad from 'lozad';
import Swiper from 'swiper/bundle';

/**
 * Application entrypoint
 */
domReady(async () => {
  // document.addEventListener('DOMContentLoaded', () => {
  jQuery(document).ready(function ($) {
    const observer = lozad();
    observer.observe();
    // Sticky Header
    if ($('header').length) {
      $(window).scroll(function () {
        if ($(window).scrollTop() >= 300) {
          $('.header').addClass('is-sticky');
          $('.announcement').addClass('up');
          $('body').addClass('is-sticky'); // Added proper selector for body
        } else {
          $('.header').removeClass('is-sticky');
          $('.announcement').removeClass('up');
          $('body').removeClass('is-sticky'); // Added proper selector for body
        }
      });
    }    
    $('.toggle-submenu').on('click', function () {
      $(this).find('.sub-menu').toggleClass('active');
      $(this).toggleClass('active'); // Toggle active class
    });

      // upload file
    (function ($) {
      $('#uploadtextfield').click(function () {
        $('#fileuploadfield').click();
      });
      $('#uploadbrowsebutton').click(function () {
        $('#fileuploadfield').click();
      });
      $('#fileuploadfield').change(function () {
        $('#uploadtextfield').val($(this).val());
      });
    })(jQuery);



    // announcement Slider
    if ($('.announcement').length) {
      var announcement_bar = new Swiper(".announcement-bar", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        speed: 500,
        autoplay: {
          delay: 1500,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

      $(".announcement button").click(function () {
        $(".announcement").slideUp();
      });
    }

    // banner Slider
    if ($('.banner-wrapper').length) {
      var bannerslider = new Swiper(".banner-slider", {
        loop: true,
        speed: 1000,
        autoplay: {
          delay: 3000,
        },
        effect: 'fade',
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    }


    if ($('.service-wrapper').length) {
      const $slides = $('.service-mobile-slider .swiper-slide');
      
      if ($slides.length <= 3) {
        // Clone slides to ensure looping functionality works correctly
        $slides.each(function () {
          $(this).parent().append($(this).clone());
        });
      }
    
      if ($('.service-wrapper').length) {
        const $slides = $('.service-mobile-slider .swiper-slide');
        
        if ($slides.length <= 3) {
          // Clone slides to ensure looping functionality works correctly
          $slides.each(function () {
            $(this).parent().append($(this).clone());
          });
        }
      
        var bannerslider = new Swiper(".service-mobile-slider", {
          slidesPerView: 1.5,
          spaceBetween: 28,
          centeredSlides: true,
          loop: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          speed: 3000,
          autoplay: {
            delay: 3000,
          },
          breakpoints: {
            575: {
              centeredSlides: true,
              loop: true,
              slidesPerView: 1.3,
              spaceBetween: 20,
            },
            768: {
              centeredSlides: true,
              loop: true,
              slidesPerView: 1.5,
              spaceBetween: 20,
            },
            1024: {
              centeredSlides: true,
              loop: true,
              slidesPerView: 2.5,
              spaceBetween: 20,
            },
            1366: {
              centeredSlides: false,
              slidesPerView: 3,
              spaceBetween: 28,
            },
          },
        });
      }
      
    }
    

    // Dynamic Swiper Sliders
    function initSwiper({
      wrapper = '',
      sliderClass = '',
      nextBtn = null,
      prevBtn = null,
      breakpoints = {},
      effect = '',
      pagination = '',
      spaceBetween = '',
      centeredSlides = false,
      loop = false,
    }) {
      if ($(wrapper).length) {
        // Dynamically create the breakpoints if a function is passed
        if (typeof breakpoints === 'function') {
          breakpoints = breakpoints();
        }

        new Swiper(sliderClass, {
          slidesPerView: 1,
          centeredSlides: centeredSlides,
          spaceBetween: spaceBetween,
          loop: loop,
          speed: 1000,
          navigation: {
            nextEl: nextBtn,
            prevEl: prevBtn,
          },
          breakpoints: breakpoints,
          effect: effect,
          pagination: pagination,
        });
      }
    }
    // Initialize sliders

    // indutsries slider
    // initSwiper({
    //   wrapper: ".service-wrapper",
    //   sliderClass: ".service-mobile-slider",
    //   slidesPerView: 1,
    //   spaceBetween: 0,
    //   centeredSlides: true,
    //   loop: true,
    //   pagination: {
    //     el: ".swiper-pagination",
    //     clickable: true,
    //   },
    //   autoplay: {
    //     delay: 2000,
    //   },
    //   breakpoints: {
    //     575: {
    //       centeredSlides: true,
    //       loop: true,
    //       slidesPerView: 1.3,
    //       spaceBetween: 0,
    //     },
    //     768: {
    //       centeredSlides: true,
    //       loop: true,
    //       slidesPerView: 1.5,
    //       spaceBetween: 0,
    //     },
    //     1024: {
    //       centeredSlides: true,
    //       loop: true,
    //       slidesPerView: 2.5,
    //       spaceBetween: 0,
    //     },
    //     1366: {
    //       centeredSlides: false,
    //       slidesPerView: 3,
    //       spaceBetween: 28,
    //     },
    //   },
    // });


    // indutsries slider
    initSwiper({
      wrapper: ".our-industries-wrapper",
      sliderClass: ".industries-slider",
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        1440: {
          slidesPerView: 3,
          spaceBetween: 55,
        },
      },
    });

    // Testimonials slider
    initSwiper({
      wrapper: ".testimonials-wrapper",
      sliderClass: ".testimonials",
      slidesPerView: 1.3,
      spaceBetween: 20,
      loop: true,
      centeredSlides: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 1.5,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 1.8,
          spaceBetween: 20,
        },
        1366: {
          slidesPerView: 2.19,
          spaceBetween: 40,
        },
      },
    });


    // load more functionality
    var postsPerPage = 6;
    var incrementBy = 3;
    var totalPosts = $('.opportunities-grid .grid-box').length;

    $('.opportunities-grid .grid-box').slice(postsPerPage).hide();
    $('#view-less-career').hide();

    if (totalPosts <= postsPerPage) {
      $('#load-more-career').hide();
    }

    $('#load-more-career').on('click', function (e) {
      e.preventDefault();
      $('.opportunities-grid .grid-box:hidden').slice(0, incrementBy).slideDown();
      if ($('.opportunities-grid .grid-box:hidden').length == 0) {
        $('#load-more-career').hide();
      }
      $('#view-less-career').fadeIn();
    });

    $('#view-less-career').on('click', function (e) {
      e.preventDefault();
      $('.opportunities-grid .grid-box').slice(postsPerPage).slideUp();
      $('#load-more-career').fadeIn();
      $('#view-less-career').hide();
    });

    //animation js
    const anim_text = gsap.utils.toArray('.fadeText');
    gsap.registerPlugin(ScrollTrigger);

    anim_text.forEach((leng, i) => {
      const anim = gsap.fromTo(
        leng.children,
        { y: 50, autoAlpha: 0 },
        { y: 0, duration: 0.4, autoAlpha: 1, stagger: 0.4, delay: 0.4 }
      );
      ScrollTrigger.create({
        trigger: leng,
        ease: 'power2.in',
        animation: anim,
        toggleActions: 'play none none none',
      });
    });

    $.fn.menumaker = function (options) {
      var cssmenu = $(this),
        settings = $.extend({
          format: "dropdown",
          sticky: false
        }, options);

      return this.each(function () {
        $(this).find(".navbar-toggler").on('click', function () {
          $(this).toggleClass('menu-opened');
          var mainmenu = $(this).next('#menu-main-menu');
          if (mainmenu.hasClass('open')) {
            mainmenu.slideToggle().removeClass('open');
          } else {
            mainmenu.slideToggle().addClass('open');
            if (settings.format === "dropdown") {
              mainmenu.find('#menu-main-menu').show();
            }
          }
        });

        // Add 'has-sub' class to list items that have submenus
        cssmenu.find('li ul.sub-menu').parent().addClass('has-sub');

        function multiTg() {
          cssmenu.find(".has-sub").prepend('<span class="submenu-button"><svg width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 5L5 -4.37114e-07L0 5L10 5Z" fill="white"/></svg></span>');

          // Add click event on submenu button
          cssmenu.find('.submenu-button').on('click', function () {
            var parentLi = $(this).parent(); // The parent `.has-sub`
            var submenu = $(this).siblings('ul'); // The submenu
            var parentAnchor = parentLi.find('a'); // The `<a>` tag inside `.has-sub`

            // Toggle submenu
            if (submenu.hasClass('open')) {
              submenu.removeClass('open');
              parentAnchor.removeClass('submenu-open'); // Remove class from `<a>` when submenu is closed
            } else {
              submenu.addClass('open');
              parentAnchor.addClass('submenu-open'); // Add class to `<a>` when submenu is opened
            }

            // Close other submenus
            cssmenu.find('.submenu-button').not(this).each(function () {
              $(this).siblings('ul').removeClass('open');
              $(this).parent().find('a').removeClass('submenu-open');
            });
          });

          // Optional: If you need to toggle submenu with <a> click as well
          cssmenu.find('a').on('click', function () {
            if ($(this).attr('href') == '#') {
              $(this).siblings('span').toggleClass('submenu-opened');
              var submenu = $(this).siblings('ul');
              if (submenu.hasClass('open')) {
                submenu.removeClass('open');
              } else {
                submenu.addClass('open');
              }
            }
          });
        };
        // Initialize the menu based on the format
        if (settings.format === 'multitoggle') multiTg();
        else cssmenu.addClass('dropdown');

        // Make menu sticky if required
        if (settings.sticky === true) cssmenu.css('position', 'fixed');

        // Fix menu on window resize
        function resizeFix() {
          var mediasize = 1023;
          if ($(window).width() > mediasize) {
            cssmenu.find('ul').addClass('open');
          }
          if ($(window).width() <= mediasize) {
            cssmenu.find('ul').removeClass('open');
          }
        };

        // Apply resizeFix on load and resize
        resizeFix();
        return $(window).on('resize', resizeFix);
      });
    };

    $(".navbar-toggler").click(function () {
      $('.navbar').toggleClass('active');
      $('html').toggleClass('menu-open');
    });
    $(".navbar").menumaker({
      title: "Menu",
      format: "multitoggle"
    });

  });
  // });
});
/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
