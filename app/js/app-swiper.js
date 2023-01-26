//*==========
//*  SWIPER =
//*==========

jQuery(function($) {
  "use strict";
  // Options set Swiper
  _functions.getSwOptions = function(swiper) {
    let options = swiper.data('options');
    options = (!options || typeof options !== 'object') ? {} : options;
    const $p = swiper.closest('.swiper-entry'),
      slidesLength = swiper.closest('.section').find('.swiper-wrapper>.swiper-slide').length;

    if (!options.pagination) options.pagination = {
      el: $p.find('.swiper-pagination')[0],
      clickable: false,
      dynamicBullets: (slidesLength > 5) ? true : false,
    };
    if (!options.navigation) options.navigation = {
      nextEl: $p.find('.swiper-button-next')[0],
      prevEl: $p.find('.swiper-button-prev')[0]
    };
    if (options.arrowsOut) options.navigation = {
      nextEl: $p.closest('.section').find('.swiper-button-next')[0],
      prevEl: $p.closest('.section').find('.swiper-button-prev')[0]
    };
    options.preloadImages = false;
    options.lazy = {
      loadPrevNext: true
    };
    if (options.lazy) {
      $p.find('.swiper-slide').find('img').addClass('swiper-lazy').after('<div class="swiper-lazy-preloader"></div>');
    }

    options.observer = true;
    options.observeParents = true;
    options.watchOverflow = true;
    options.centerInsufficientSlides = true;
    if (options.speed) options.speed = 1000;
    options.roundLengths = true;
    if (isTouchScreen) options.direction = "horizontal";
    if (slidesLength <= 1) {
      options.loop = false;
    }
    if (options.customFraction) {
      $p.addClass('custom-fraction');
      if (slidesLength > 1 && slidesLength < 100) {
        $p.closest('.section').find('.c-fraction-current').text('1');
        $p.closest('.section').find('.c-fraction-total').text(slidesLength);
      }
    }
    return options;
  };


  // Init each Swiper
  _functions.initSwiper = function(el) {
    const swiper = new Swiper(el[0], _functions.getSwOptions(el));
  };
  $('.swiper-entry .swiper-container').each(function() {
    _functions.initSwiper($(this));

    let $thisSwiper = $(this)[0].swiper;

    if ($thisSwiper.isLocked) {
      $thisSwiper.$wrapperEl.closest('.section').addClass('swiper-controls-hide')
    } else {
      $thisSwiper.$wrapperEl.closest('.section').removeClass('swiper-controls-hide');
    }

    $thisSwiper.on('resize', function() {
      if ($thisSwiper.isLocked) {
        $thisSwiper.$wrapperEl.closest('.section').addClass('swiper-controls-hide')
      } else {
        $thisSwiper.$wrapperEl.closest('.section').removeClass('swiper-controls-hide');
      }
    });
  });




  // Custom fraction
  $('.custom-fraction').each(function() {
    var $this = $(this),
      $thisSwiper = $this.find('.swiper-container')[0].swiper;

    $thisSwiper.on('slideChange', function() {
      $this.closest('.section').find('.c-fraction-current').text(
        function() {
          if ($thisSwiper.realIndex < 100) {
            return ($thisSwiper.realIndex + 1)
          } else {
            return $thisSwiper.realIndex + 1
          }
        }
      )
    });
  });

});