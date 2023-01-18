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
    _functions.submenuScroll();
  });

  var prev_scroll = 0;
  _functions.scrollCall = function() {
    winScr = $(window).scrollTop();
    if (winScr > prev_scroll) {
      $('.un__btn-up').addClass('scrolled');
    } else if (winScr <= 10) {
      $('.un__btn-up').removeClass('scrolled');
      prev_scroll = 0;
    };
  }
  _functions.scrollCall();


  /* Function on scroll sticky sub menu */
  _functions.submenuScroll = function() {
    winScr = $(window).scrollTop();

    if ($('.scroll-nav').length > 0) {
      let wrapNav = $('.scroll-nav');

      if (winScr + $('header').height() >= $('.scroll-nav-wrap').offset().top) {
        wrapNav.addClass('fixed');
      } else {
        wrapNav.removeClass('fixed');
      }

      $('.scroll-nav a').each(function(i) {
        let $t = $(this),
          scrollPath = $($t.attr('href'));


        // console.log($t)
        // console.log(scrollPath)
        // console.log(scrollPath.offset().top + 'path top' )
        // console.log(scrollPath.offset().top - $('header').outerHeight() + 'path top - header')
        // console.log(winScr)
        // console.log(winH)
        // console.log(winH / 2.5)
        // console.log(winScr + winH)
        // console.log(scrollPath.offset().top + scrollPath.outerHeight() / 2.5 - $('header').outerHeight())
        // console.log(winScr)

        if (scrollPath.offset().top - $('header').outerHeight() <= winScr + winH / 2.5 && scrollPath.offset().top + scrollPath.outerHeight() / 2.5 - $('header').outerHeight() > winScr) {
          $t.closest('li').addClass('active').siblings().removeClass('active');
        } else {
          $t.closest('li').removeClass('active');
        }
      });
    }
  };


  // Anchor scroll
  $(document).on('click', 'a[href*="#"]:not([href="#"])', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

      if ($('.scroll-nav').length) {
        $('html, body').animate({
          scrollTop: target.offset().top - $('header').height() - $('.scroll-nav').innerHeight()
        }, 1500);
        return false;

      } else if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - $('header').height()
        }, 1500);
        return false;
      }
    }
  });


  // Btn scroll up
  function getDuration(target) {
    var currentTop = $(window).scrollTop(),
      rate = 0.7, // 1000px/700ms
      distance;
    distance = Math.abs(currentTop - target);
    return distance * rate;
  }
  $(document).on('click', '.un__btn-up', function() {
    let pageTop = $("#content-block").offset().top;
    let duration = getDuration(pageTop);
    $(this).addClass('anim-arrow');

    $("html,body").animate({
      scrollTop: pageTop,
      easing: "cubic-bezier(0.61, 1, 0.88, 1)"
    }, duration, function() {
      $('.un__btn-up').removeClass('anim-arrow');
    });
  });


  /* Function on page resize */
  _functions.resizeCall = function() {
    setTimeout(function() {
      _functions.pageCalculations();
      _functions.headerVisitWidth();
      _functions.headerInfo()
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
  // Header top info
  _functions.headerInfo = function() {
    let $this = $('.h-info-inner');
    let infoH = Math.round($this.innerHeight());
    $this.parents('body').css({
      "--h-info-height": `${infoH}px`
    });
  }
  setTimeout(function() {
    if ($('.h-info-wrap').length > 0) {
      _functions.headerInfo()
      $('header').addClass('show-info');
    }
  }, 100);
  $(document).on('click', '.h-info-close', function() {
    $(this).closest('header').removeClass('show-info');
  });


  /* Open menu */
  $(document).on('click', '.hamburger', function() {
    _functions.scrollWidth();
    $(this).toggleClass('is-active');
    $('html').toggleClass('overflow-menu');
    $(this).parents('header').toggleClass('open-menu');
    $(this).closest('header').removeClass('open-search');
    $(this).closest('header').find('.h-second').removeClass('active')
    $('html').removeClass('open-second-menu');
    _functions.headerVisitWidth();
  });


  /* Open header link */
  $(document).on('click', '.h-second>b', function() {
    _functions.scrollWidth();
    $(this).closest('.h-second').toggleClass('active').siblings().removeClass('active')
    $('html').toggleClass('open-second-menu');
    _functions.headerVisitWidth();
  });

  $(document).on('click', '.h-second-close', function() {
    _functions.scrollWidth();
    $(this).closest('.h-second').removeClass('active')
    $('html').removeClass('open-second-menu');
    _functions.headerVisitWidth();
  });


  /* Open header link on mobile */
  $(document).on('click', '.h-dropdown-name', function() {
    $(this).parent().addClass('active');
  });

  $(document).on('click', '.h-dropdown-back', function() {
    $(this).closest('.h-dropdown-item').removeClass('active');
  });


  // Check visit width
  _functions.headerVisitWidth = function() {
    let $this = $('.h-inner');
    let visitW = Math.round($this.find('.h-visit-caption').innerWidth());
    $this.css({
      "--h-visit-width": `${visitW}px`
    });
  }
  _functions.headerVisitWidth();


  // Header Visit dropdown
  $(document).on('click', '.h-visit-caption', function() {
    $(this).parent().toggleClass('active');
  });

  $(document).on('click', function(e) {
    if (!$(e.target).closest('.h-visit').length) {
      $('.h-visit').removeClass('active');
    }
  });


  // Header Lang 
  $(document).on('click', '.current-lang', function() {
    $(this).parent().toggleClass('active');
  });

  $(document).on('click', '.other-lang a', function() {
    $(this).closest('.h-lang').removeClass('active');
  });

  $(document).on('click', function(e) {
    if (!$(e.target).closest('.h-lang').length) {
      $('.h-lang').removeClass('active');
    }
  });


  // Header Search 
  $(document).on('click', '.h-search-button', function() {
    $(this).closest('header').addClass('open-search');
  });

  $(document).on('click', '.h-search-close', function() {
    $(this).closest('header').removeClass('open-search');
  });

  $(document).on('click', function(e) {
    if (!$(e.target).closest('.h-visit').length) {
      $('.h-visit').removeClass('active');;
    }
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