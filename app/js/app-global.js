//*========================================
//* 01 FUNCTIONS ON DOCUMENT READY        =
//*========================================
//* 02 FUNCTIONS CALC & RESIZE, SCROLL    =
//*========================================
//* 03 HEADER                             =
//*========================================
//* 05 POPUPS                             =
//*========================================
//* 06 KEY FOCUS                          =
//*========================================
//* 07 TABS, ACCORDION, MORE-TEXT, TABLE  =
//*========================================
//* 11 OTHER JS                           =
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
  //* 04 HEADER =
  //*============
  /* Open menu */
  $(document).on('click', '.h-burger', function() {
    _functions.scrollWidth();

    $('html').addClass('overflow-menu');
    $(this).closest('header').addClass('open-menu');
    // $(this).closest('header').removeClass('open-search');
    // $(this).closest('header').find('.h-second').removeClass('active')
  });

  /* Open search */
  $(document).on('click', '.h-search', function() {
    _functions.scrollWidth();
    $('html').addClass('overflow-menu');
    $(this).closest('header').addClass('open-search');
  });

  /* Close menu & search */
  $(document).on('click', '.h-menu-close, .h-menu-overlay, .h-search-close', function() {
    _functions.scrollWidth();

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
  //* 05 POPUPS =
  //*============
  // Function check scroll width
  _functions.scrollWidth = function() {
    let scrWidth = window.innerWidth - $('body').offsetWidth + 'px';
    $('body').css({
      "paddingRight": scrWidth
    });
  }


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
    _functions.scrollWidth();
    _functions.removeScroll();
  };
  _functions.closePopup = function() {
    $('.popup-wrapper, .popup-content').removeClass('active');
    $('.video-popup iframe').remove();
    _functions.addScroll();
  };

  // Close Zoom popup
  $(document).on('click', '.popup-content .close-popup, .popup-content .layer-close', function(e) {
    _functions.scrollWidth()
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
  //* 06  KEY FOCUS =
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
  //* 07 TABS, ACCORDION =
  //*=====================







  //*==============
  //* 11 OTHER JS =
  //*==============



});