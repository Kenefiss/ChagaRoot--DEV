//*========================================
//* 01 FUNCTIONS ON DOCUMENT READY        =
//*========================================
//* 02 FUNCTIONS CALC & RESIZE, SCROLL    =
//*========================================
//* 03 HEADER                             =
//*========================================
//* 04 POPUPS                             =
//*========================================
//* 05 KEY FOCUS                          =
//*========================================
//* 06 TABS, ACCORDION, MORE-TEXT, TABLE  =
//*========================================
//* OTHER JS                           =
//*========================================


let _functions = {},
  winW, winH, winScr, isTouchScreen, isAndroid, isIPhone, is_Mac, is_IE, is_Chrome;

jQuery(function($) {
  "use strict";

  //*=================================
  //* 01 FUNCTIONS ON DOCUMENT READY =
  //*=================================
  isTouchScreen = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i),
    isAndroid = navigator.userAgent.match(/Android/i),
    isIPhone = navigator.userAgent.match(/iPhone/i),
    is_Mac = navigator.platform.toUpperCase().indexOf('MAC') >= 0,
    is_IE = /MSIE 9/i.test(navigator.userAgent) || /rv:11.0/i.test(navigator.userAgent) || /MSIE 10/i.test(navigator.userAgent) || /Edge\/\d+/.test(navigator.userAgent),
    is_Chrome = navigator.userAgent.indexOf('Chrome') >= 0 && navigator.userAgent.indexOf('Edge') < 0;


  const $body = $('body');
  setTimeout(function() {
    $body.addClass('loaded');
  }, 500);


  if (isTouchScreen) {
    $('html').addClass('touch-screen');
  }
  if (isAndroid) {
    $('html').addClass('android');
  }
  if (isIPhone) {
    $('html').addClass('ios');
  }
  if (is_Mac) {
    $('html').addClass('mac');
  }
  if (is_IE) {
    $('html').addClass('ie');
  }
  if (is_Chrome) {
    $('html').addClass('chrome');
  }



  //*=====================================
  //* 02 FUNCTIONS CALC & SCROLL, RESIZE =
  //*=====================================
  // Function Calculations on page
  _functions.pageCalculations = function() {
    winW = $(window).width();
    winH = $(window).height();
  }
  _functions.pageCalculations();


  /* Function on page scroll */
  $(window).on('scroll', function() {
    _functions.scrollCall();
  });

  var prev_scroll = 0;
  _functions.scrollCall = function() {
    winScr = $(window).scrollTop();
    if (winScr > prev_scroll) {
      $('header').addClass('scrolled');
    } else if (winScr <= 10) {
      $('header').removeClass('scrolled');
      prev_scroll = 0;
    };
  }
  _functions.scrollCall();


  /* Function on page resize */
  _functions.resizeCall = function() {
    setTimeout(function() {
      _functions.pageCalculations();
    }, 100);
  };

  if (!isTouchScreen) {
    $(window).resize(function() {
      _functions.resizeCall();
    });
  } else {
    window.addEventListener("orientationchange", function() {
      _functions.resizeCall();
    }, false);
  }



  //*============
  //* 03 HEADER =
  //*============
  /* Open menu */
  $(document).on('click', '.h-burger', function() {
    $('html').addClass('overflow-menu');
    $(this).closest('header').addClass('open-menu');
  });

  /* Open search */
  $(document).on('click', '.h-search', function() {
    $('html').addClass('overflow-menu');
    $(this).closest('header').addClass('open-search');
    $(this).closest('header').find('.h-search-inner input').focus();
  });

  /* Close menu & search */
  $(document).on('click', '.h-menu-close, .h-menu-overlay, .h-search-close', function() {
    $('html').removeClass('overflow-menu');
    $(this).closest('header').removeClass('open-menu');
    $(this).closest('header').removeClass('open-search');
  });


  // Cabinet dropdown
  $(document).on('click', '.h-cabinet', function() {
    $(this).toggleClass('is-active');
  });

  // Close cabinet dropdown
  $(document).on('click', function(e) {
    if (!$(e.target).closest('.h-cabinet').length) {
      $('.h-cabinet').removeClass('is-active');
    }
  });


  // Header Search 
  $(document).on('click', '.h-search-button', function() {
    $(this).closest('header').addClass('open-search');
  });

  $(document).on('click', '.h-search-close', function() {
    $(this).closest('header').removeClass('open-search');
  });



  //*============
  //* 04 POPUPS =
  //*============
  // Popups Functions
  let popupTop = 0;
  _functions.removeScroll = function() {
    popupTop = $(window).scrollTop();
    $('html').css({
      "top": -$(window).scrollTop(),
      "width": "100%"
    }).addClass("overflow-hidden");
  }
  _functions.addScroll = function() {
    $('html').removeClass("overflow-hidden");
    window.scroll(0, popupTop);
  }
  _functions.openPopup = function(popup) {
    $('.popup-content').removeClass('active');
    $(popup + ', .popup-wrapper').addClass('active');
    _functions.removeScroll();
  };
  _functions.closePopup = function() {
    $('.popup-wrapper, .popup-content').removeClass('active');
    $('.video-popup iframe').remove();
    _functions.addScroll();
  };

  // Close  popup
  $(document).on('click', '.popup-content .close-popup, .popup-content .layer-close', function(e) {
    e.preventDefault();
    _functions.closePopup();
  });

  // Ajax popup
  $(document).on('click', '.open-popup', function(e) {
    const popupWrapper = document.getElementById("popups");

    if (e.target.closest('.open-popup')) {
      let dataRel = e.target.closest('.open-popup').getAttribute('data-rel');
      e.preventDefault();

      if (popupWrapper.hasChildNodes()) {
        _functions.openPopup('.popup-content[data-rel="' + dataRel + '"]');

      } else {
        const ajaxPopup = new XMLHttpRequest();

        ajaxPopup.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            popupWrapper.innerHTML = this.responseText;

            setTimeout(function() {
              _functions.openPopup('.popup-content[data-rel="' + dataRel + '"]');
            }, 50);
          }
        };
        ajaxPopup.open("GET", "inc/_popups.php", true);
        ajaxPopup.send();
      }
    }
  });




  //*================
  //* 05  KEY FOCUS =
  //*================
  // Detect if user is using keyboard tab-button to navigate
  // with 'keyboard-focus' class we add default css outlines
  function keyboardFocus(e) {
    if (e.keyCode !== 9) {
      return;
    }

    switch (e.target.nodeName.toLowerCase()) {
      case 'input':
      case 'select':
      case 'textarea':
        break;
      default:
        document.documentElement.classList.add('keyboard-focus');
        document.removeEventListener('keydown', keyboardFocus, false);
    }
  }
  document.addEventListener('keydown', keyboardFocus, false);




  //*=====================
  //* 06 TABS, ACCORDION =
  //*=====================
  // tabs
  $(document).on('click', '.tab-title', function() {
    $(this).closest('.tab-nav').toggleClass('active');
  });
  $(document).on('click', '.tab-toggle>div', function(e) {
    let tab = $(this).closest('.tabs').find('.tab');
    let i = $(this).index();

    $(this).addClass('active').siblings().removeClass('active');
    tab.eq(i).siblings('.tab:visible').stop().finish().fadeOut(function() {
      tab.eq(i).fadeIn(200);
    });
    $(this).closest('.tab-nav').removeClass('active').find('.tab-title').text($(this).text());
    e.preventDefault();
  });


  // accordion
  $(document).on('click', '.accordion .accordion-item .accordion-title', function() {
    if ($(this).hasClass('active')) {
      $(this).removeClass('active').next().slideUp();
    } else {
      $(this).closest('.accordion').find('.accordion-title').not(this).removeClass('active').next().slideUp();
      $(this).addClass('active').next().slideDown();
    }
  });


  // Archetype tabs
  $(document).on('click', '.prev-tab', function() {
    let activeItem = $('.st-nav').find('.st-item.active');
    let tab = $('.st-tabs').find('.st-tab');
    let i = activeItem.index();

    tab.eq(i - 1).siblings('.st-tab:visible').stop().finish().fadeOut(function() {
      tab.eq(i - 1).fadeIn(200);
    });

    if (!activeItem.is(':first-child')) {
      activeItem.removeClass('active').prev().addClass('active');
    }

    $('html, body').animate({
      scrollTop: $('.st-nav').offset().top - $('header').height() - 15
    }, 1500);

  });

  $(document).on('click', '.next-tab', function() {
    let activeItem = $('.st-nav').find('.st-item.active');
    let tab = $('.st-tabs').find('.st-tab');
    let i = activeItem.index();

    tab.eq(i + 1).siblings('.st-tab:visible').stop().finish().fadeOut(function() {
      tab.eq(i + 1).fadeIn(200);
    });

    if (!activeItem.is(':last-child')) {
      activeItem.removeClass('active').next().addClass('active');
    }

    $('html, body').animate({
      scrollTop: $('.st-nav').offset().top - $('header').height() - 15
    }, 1500);
  });


  // Program tabs
  $(document).on('click', '.prg-tabs-nav>div', function(e) {
    let tab = $(this).closest('.prg-tabs').find('.prg-tab');
    let i = $(this).index();

    $(this).addClass('is-active').siblings().removeClass('is-active');
    tab.eq(i).siblings('.prg-tab:visible').stop().finish().fadeOut(function() {
      tab.eq(i).fadeIn(200);
    });
    e.preventDefault();
  });


  //*==============
  //* OTHER JS    =
  //*==============
  $(document).on('click', '.phase-wrap:not(.type2) .phase-title', function() {
    $(this).toggleClass('is-active').siblings('.phase-content').slideToggle();
    $(this).closest('.phase-item').siblings().find('.phase-title').removeClass('is-active').siblings('.phase-content').slideUp();
  })


  $(document).on('click', '.cs-list-img', function() {
    var tab = $('.cs-info-list').find('.text');
    var i = $(this).closest('.cs-list-item').index();

    $(this).closest('.cs-list-item').addClass('active').siblings().removeClass('active')

    tab.eq(i).siblings('.text:visible').stop().finish().fadeOut(function() {
      tab.eq(i).fadeIn();
    });

    changeImageQuote()
  })

  function changeImageQuote() {
    let imgUrl = $('.cs-list-item.active').attr('data-img-quote');
    $('.cs-inner-img img').attr('src', imgUrl)
  }
  changeImageQuote()


  // Rate Stars
  $('.rate-stars').each(function(index) {
    $(this).find('input').attr('name', 'star-' + index);

    $($(this).find('input').get().reverse()).each(function(i) {
      $(this).attr('id', 'star-' + index + '-' + i);

      if (i == 0) {
        $(this).addClass('star-clear')
      }
    });

    $($(this).find('label').get().reverse()).each(function(i) {
      $(this).attr('for', 'star-' + index + '-' + i);
    });
  });

  $('.review-item .review-rating').each(function() {
    let th = $(this);
    let starRating = th.data("rate-star");

    for (let i = 1; i <= 5; i++) {
      th.append("<i></i>");
    }

    if (!starRating == '') {
      th.addClass('selected')

      $(th.find('i')).each(function() {
        if ($(this).index() + 1 == starRating) {
          $(this).addClass('checked-star')
        }
      });
    }
  });

  $(document).on('click', '.review-item .review-btn', function() {
    let slideForm = $(this).parents('.review-item').find('.review-bottom-form');
    slideForm.slideToggle();
  });


  //*=====================
  //* 09 DYNAMIC LOAD JS =
  //*=====================
  _functions.loadFileAsync = (url) => {
    return new Promise((resolve, reject) => {
      if (url) {
        let script = document.createElement("script");
        script.src = url;
        document.body.appendChild(script);
        resolve(true);
      } else {
        reject(false);
      }
    });
  };

  if (winW > 1200) {
    window.addEventListener("load", async () => {
      try {
        await _functions.loadFileAsync("js/vendors/SmoothScroll.min.js");
      } catch (err) {} finally {}
    });
  }



});