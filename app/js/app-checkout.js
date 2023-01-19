//*===========
//* Cart     =
//*===========
//* Checkout =
//*===========

jQuery(function($) {
  "use strict";

  //*===========
  //* Cart     =
  //*===========

  // Cart open
  $(document).on('click', '.h-cart', function() {
    $(this).closest('html').find('.cart').toggleClass('is-active');
  });

  // Cart Close
  $(document).on('click', function(e) {
    if (!$(e.target).closest('.h-cart').length) {
      $('.h-cart').removeClass('is-active');
    }
  });




  _functions.fff = function() {

  }



  /*---- product -----*/

  //decrement
  $(document).on('click', '.decr', function() {
    let $this = $(this),
      $input = $this.parent().find('input'),
      hasMin = $input[0].hasAttribute('data-min'),
      value = parseInt($input.val(), 10),
      min = hasMin ? +$input.attr('data-min') : 1;

    if (value != min) {
      value = value - 1;
    } else {
      value = min;
    }

    $input.val(value);
  });

  //increment
  $(document).on('click', '.incr', function() {
    let $this = $(this),
      $input = $this.parent().find('input'),
      value = parseInt($input.val(), 10);
    $input.val(value + 1);
  });

  // order btn animation example
  $('.js-product .order-btn, #ing-add-to-cart').on('click', function() {
    const $this = $(this);

    if (!$this.hasClass('loading')) {
      $this.addClass('loading');

      $('.js-product').not($(this).closest('.js-product')).each(function() {
        $(this).find('.order-btn').addClass('disabled');
      });

      let loader = '<span class="btn-loader"><span class="btn-loader-inner"><span></span><span></span><span></span></span></span>',
        success = '<span class="btn-loader-complete"></span>';

      $this.append(loader).find('.btn-loader').fadeIn(500, function() {
        // FOR WP DEV !!!! instead of setTimeout here MUST be succes ajax callback
        setTimeout(function() {
          $this.append(success).fadeIn(500, function() {
            $this.find('.btn-loader').remove();
            setTimeout(function() {
              $this.find('.btn-loader-complete').fadeOut(500, function() {
                $(this).remove();
                $this.removeClass('loading');
                $('.js-product').each(function() {
                  $(this).find('.order-btn').removeClass('disabled');
                });
              });
            }, 1000);
          });
        }, 1000);
      });

      //informer
      let nameProduct = $(this).parents('.product').find('.product_title a').html();
      setTimeout(function() {
        $('.cart-informer').addClass('active');
        $('.cart-informer').find('.text span').html(nameProduct);
      }, 300);
      setTimeout(function() {
        $('.cart-informer').removeClass('active');
      }, 2000);


    }
  });

  /*---- end of product -----*/


  // calc total sum in cart
  _functions.calculateCartTotalPrice = function() {
    let total = 0;
    $('.cart .js-product').each(function() {
      total += +$(this).data('price') * +$(this).find('.thumb-input-number input').val();
    });
    $('#card-total-price').html(total);

    if (total === 0) {
      $('#cart-submit').addClass('disabled');
    }
  }

  $(document).on('click', '.cart .js-product .thumb-input-number button', function() {
    _functions.calculateCartTotalPrice();
  });

  //remove product from card
  $(document).on('click', '.cart .js-product .btn-close', function() {
    $(this).closest('.js-product').slideUp(0, function() {
      $(this).remove();
      _functions.calculateCartTotalPrice();
    })
  });

  //remove all products from card
  $(document).on('click', '.cart .clear-cart', function() {
    $(this).closest('.cart').find('.js-product').slideUp(0, function() {
      $(this).remove();
      _functions.calculateCartTotalPrice();
    })
  });

  // open - close cart
  $('.open-cart').on('click', function() {
    $('.cart').addClass('active');
    _functions.removeScroll();
  });
  $('.cart-close, .cart_bg-layer').on('click', function() {
    $('.cart').removeClass('active');
    _functions.addScroll();
  });

  //remove product from card
  $(document).on('click', '.cart-top .js-product .btn-close', function() {
    $(this).closest('.js-product').slideUp(0, function() {
      $(this).remove();
      _functions.calculateCartTotalPrice();
    })
  });

  // open - close cart top
  $('.open-top-cart').on('click', function() {
    $('.cart-top').toggleClass('active');
    _functions.removeScroll();
  });
  $('.cart_bg-layer').on('click', function() {
    $('.cart-top').removeClass('active');
    _functions.addScroll();
  });


  // checkout calculate
  _functions.calculateTotalCheckoutPrice = function() {
    let allSummProduct = 0;
    $('.checkout-products .js-checkout-product').each(function() {
      allSummProduct += +$(this).data('price') * +$(this).find('.thumb-input-number input').val();
    });
    $('.all-product-price-el').text(allSummProduct);

    //show empty cart message
    if (allSummProduct === 0) {
      $('.cart-empty-section').show();
      $('.checkout-section').hide();
    }

    //dynamic cost lines
    let minDelivery = +$('.min-delivery b').html(),
      currentLineWidth = 100 / minDelivery * allSummProduct;
    if (allSummProduct >= minDelivery) {
      $('.remains-cost-wrap').slideUp();
      $('.current-line').addClass('green');
    } else {
      $('.remains-cost-wrap').slideDown();
      $('.remains-cost').html(minDelivery - allSummProduct);
      $('.current-line').removeClass('green');
    }

    $('.current-line').css('width', currentLineWidth + '%');
    $('.current-line').find('.current-cost').html(allSummProduct);
    $('.total-line').find('.total-cost').html(minDelivery);

  }
  _functions.calculateTotalCheckoutPrice();



  $(document).on('click', '.js-checkout-product .thumb-input-number button', function() {
    _functions.calculateTotalCheckoutPrice();

    let prod = $(this).closest('.js-checkout-product'),
      productSum = +prod.data('price') * +prod.find('input').val();
    prod.find('.price').text(productSum);
  });

  //remove product from card
  $(document).on('click', '.js-checkout-product .btn-close', function() {
    $(this).closest('.js-checkout-product').slideUp(0, function() {
      $(this).remove();
      _functions.calculateTotalCheckoutPrice();
    });
  });




  //single product price
  _functions.calculateSinglePrice = function($parentEl) {
    let prod = $parentEl,
      productSum = +prod.attr('data-price') * +prod.find('input').val(),
      checkedModify = $('.js-product .modify-product input'),
      modifySum = +prod.find('.modify-product .checkbox-entry').attr('data-price') * +prod.find('input').val();
    prod.find('.price').text(productSum);

    if (checkedModify.is(":checked")) {
      checkedModify.prop("checked", true);
      prod.find('.price').text(productSum + modifySum);
    } else {
      checkedModify.prop("checked", false);
      prod.find('.price').text(productSum);
    }
  }

  $(document).on('click', '.js-product .thumb-input-number button', function() {
    _functions.calculateSinglePrice($(this).closest('.js-product'));
  });



});