
(function ($) {
  "use strict";

  $(document).ready(function () {

    /*==== header Section Start here =====*/
    document.querySelector(".bar i").addEventListener("click", function () {
      let bar = document.querySelector(".bar i");
      bar.classList.toggle("fa-times");
      let target = document.querySelector(".target");
      target.classList.toggle("open");
    });

    // Menu Nav
    function smoothSctollTop() {
      $('.mainactive ul li > a,.mean-nav ul li > a').on('click', function (event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
          event.preventDefault();
          $('html, body').stop().animate({
            scrollTop: target.offset().top - 100
          }, 1000);
        }
      });
    }
    smoothSctollTop();
    // menu active class
    $('.mainactive ul li:first-child > a').addClass('active');



    //for menu active class

    $('.mainactive ul li > a').on('click', function () {
      $('.basic-menu li a').removeClass("active");
      $(this).addClass("active");
    });


    //Header     
    var fixed_top = $(".header__top");
    $(window).on('scroll', function () {
      if ($(this).scrollTop() > 100) {
        fixed_top.addClass("header-fixed animated fadeInDown");
      } else {
        fixed_top.removeClass("header-fixed animated fadeInDown");
      }
    });

    // side-bar
    $('.bar').on("click", function () {
      $('.btn-menu-main').addClass('btn-menu-main-right');
    });

    $('.crose').on("click", function () {
      $('.btn-menu-main').removeClass('btn-menu-main-right');
    });

    // food menu filter
    var $grid = $(".projectfilter__filter").isotope({
      transitionDuration: "0.9s",
    });
    // sort items on button click
    $(".item").on("click", function () {
      var filterValue = $(this).attr("data-sort-by");
      $grid.isotope({ filter: filterValue });
    });

    $(".item").click(function () {
      $(this).addClass("active").siblings().removeClass("active");
    });

    // lightcase
    $('a[data-rel^=lightcase]').lightcase({
      transition: 'fade',
      showCaption: false,
      closeButton: true,      // Display close button
      arrow: true,            // Display navigation arrows
      maxWidth: 1200,         // Set the maximum width of the lightbox

      // Custom icons (using Font Awesome)
      closeIcon: '<i class="fas fa-times"></i>',
      leftArrow: '<i class="fas fa-chevron-left"></i>',
      rightArrow: '<i class="fas fa-chevron-right"></i>'
    });


    // scroll up start here
    $(function () {
      //Check to see if the window is top if not then display button
      $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
          $(".scrollToTop").css({
            bottom: "2%",
            opacity: "1",
            transition: "all .5s ease",
          });
        } else {
          $(".scrollToTop").css({
            bottom: "-30%",
            opacity: "0",
            transition: "all .5s ease",
          });
        }
      });
      //Click event to scroll to top
      $(".scrollToTop").on("click", function () {
        $("html, body").animate(
          {
            scrollTop: 0,
          },
          500
        );
        return false;
      });
    });


    // text aniamtion
    var words = ['Md Bakul', 'Front end developer', 'Wordpress Developer'],
      part,
      i = 0,
      offset = 0,
      len = words.length,
      forwards = true,
      skip_count = 0,
      skip_delay = 35,
      speed = 70;
    var wordflick = function () {
      setInterval(function () {
        if (forwards) {
          if (offset >= words[i].length) {
            ++skip_count;
            if (skip_count == skip_delay) {
              forwards = false;
              skip_count = 0;
            }
          }
        }
        else {
          if (offset == 0) {
            forwards = true;
            i++;
            offset = 0;
            if (i >= len) {
              i = 0;
            }
          }
        }
        part = words[i].substr(0, offset);
        if (skip_count == 0) {
          if (forwards) {
            offset++;
          }
          else {
            offset--;
          }
        }
        $('.word').text(part);
      }, speed);
    };

    $(document).ready(function () {
      wordflick();
    });

  });
  $(window).scroll(function () {
    var hT = $('.skill-bar-wrapper').offset().top,
      hH = $('.skill-bar-wrapper').outerHeight(),
      wH = $(window).height(),
      wS = $(this).scrollTop();
    if (wS > (hT + hH - 1.4 * wH)) {
      jQuery(document).ready(function () {
        jQuery('.skillbar-container').each(function () {
          jQuery(this).find('.skills').animate({
            width: jQuery(this).attr('data-percent')
          }, 5000); // 5 seconds
        });
      });
    }
  });

}(jQuery));

