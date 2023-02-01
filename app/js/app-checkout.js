//*===========
//* Cart     =
//*===========
//* Checkout =
//*===========

jQuery(function($) {
  "use strict";


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


  //*===========
  //* Cart     =
  //*===========
  // Cart open
  $(document).on('click', '.h-cart', function() {
    $('.cart').toggleClass('is-active');
  });
  // Cart Close
  $(document).on('click', '.cart-close', function() {
    $(this).closest('html').find('.cart').removeClass('is-active');
  });


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


  //remove product from card
  $(document).on('click', '.cart .js-product .btn-delete', function() {
    $(this).closest('.js-product').slideUp(0, function() {
      $(this).remove();
      _functions.calcCartTotalPrice();
    })
  });


  // calc total sum in cart
  _functions.calcCartTotalPrice = function() {
    let total = 0;
    let product = $('.cart .js-product');

    product.each(function() {
      total += +$(this).data('price') * +$(this).find('.thumb-input-number input').val();
    });

    $('#cart-total-price b').html(total);
    $('.h-cart>b').html(product.length);


    if (total === 0) {
      $('#cart-submit').addClass('disabled');
      $('.cart-empty-message').removeClass('d-none')
    } else {
      $('#cart-submit').removeClass('disabled');
      $('.cart-empty-message').addClass('d-none');
    }
  }

  // Please remove this func when page is loaded
  _functions.calcCartTotalPrice();

  $(document).on('click', '.cart .js-product .thumb-input-number button', function() {
    let qv = $(this).siblings('input').val();
    $(this).closest('.js-product').find('.cart_prd-q').html(qv);

    _functions.calcCartTotalPrice();
  });


  //*===========
  //* Checkout =
  //*===========
  $(document).on('click', '.toggle-btn', function() {
    $(this).toggleClass('is-active');
    $(this).closest('.toggle-block').find('.toggle-inner').slideToggle();
  });



  $(document).on('click', '.checkout-wrap .js-checkout-product .thumb-input-number button', function() {
    let qv = $(this).siblings('input').val();
    $(this).closest('.js-checkout-product').find('.cart_prd-q').html(qv);

    _functions.calcTotalCheckoutPrice();
  });

  //remove product from checkout
  $(document).on('click', '.checkout-wrap  .js-checkout-product .btn-delete', function() {
    $(this).closest('.js-checkout-product').slideUp(0, function() {
      $(this).remove();
      _functions.calcTotalCheckoutPrice();
    })
  });


  // checkout calculate
  _functions.calcTotalCheckoutPrice = function() {
    let allSummProduct = 0;
    let discountProduct = !$('.order-discount').hasClass('d-none') ? +$('#discount-price').text() : 0;


    $('.checkout_items .js-checkout-product').each(function() {
      allSummProduct += +$(this).data('price') * +$(this).find('.thumb-input-number input').val();
    });

    // Subtotal
    $('#all-product-price').text(allSummProduct.toFixed(2));


    let totalPrice = allSummProduct - discountProduct;

    $('#total-price').text(totalPrice.toFixed(2));


    //show empty cart message
    if (allSummProduct === 0) {
      // do something
    }

  }
  _functions.calcTotalCheckoutPrice();



});