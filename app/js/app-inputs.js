//*==========
//*  Inputs =
//*==========

jQuery(function($) {
  "use strict";

  // Inputs 
  $(document).on('focus', '.input-field-wrapper .input, .input-button-wrap .input', function() {
    $(this).closest('.input-field-wrapper').addClass('focus');
  });
  $(document).on('blur', '.input-field-wrapper .input, .input-button-wrap .input', function() {
    $(this).closest('.input-field-wrapper').removeClass('focus');
  });
  $(document).on('keyup', '.input-field-wrapper .input', function() {
    if ($(this).val()) $(this).closest('.input-field-wrapper').addClass('value');
    else $(this).closest('.input-field-wrapper').removeClass('value');
  });


  // Invalid Input
  $(document).on('blur', '.input-field-wrapper .input[required]', function() {
    if ($(this).val().trim()) {
      $(this).closest('.input-field-wrapper').removeClass('invalid');
    } else {
      $(this).closest('.input-field-wrapper').addClass('invalid');
    }
  });


  // Check if input has value or autofill
  $(document).ready(function() {
    $('.input-field-wrapper .input').each(function() {
      let $this = $('.input-field-wrapper .input')
      if ($this.val()) {
        $this.closest('.input-field-wrapper').addClass('value');
      }
    });

    $('.input-field-wrapper .input:-webkit-autofill').each(function() {
      let $this = $('.input-field-wrapper .input')

      $this.closest('.input-field-wrapper').addClass('value');
    });
  });




  // Validate email
  _functions.validateEmail = function(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }


  $(document).on('keyup', 'input[type="email"]', function() {
    const email = $(this);

    if (!_functions.validateEmail(email.val())) {
      email.closest('.input-field-wrapper').addClass('invalid-email');
    } else {
      email.closest('.input-field-wrapper').removeClass('invalid-email');
    }

    if (email.val() == '') {
      email.closest('.input-field-wrapper').removeClass('invalid-email');
    }
  });


  // mask on mobile number
  if ($('.input[type="tel"]').length) {
    $('.input[type="tel"]').inputmask({
      "mask": "+1 999-999-9999",
      showMaskOnHover: false,
      definitions: {
        'x': {
          validator: "[1-9]"
        },
        '9': {
          validator: "[0-9]"
        }
      }
    });
  }




  // // if ($('.input.calendar').length) {
  // //   $('.input.calendar').inputmask('datetime', {
  // //     inputFormat: "dd.mm.yyyy",
  // //     min: currentDay(),
  // //     max: maxDay(50),
  // //     showMaskOnHover: false,
  // //     // "clearIncomplete": true,
  // //     // outputFormat: "ddmmyyyy"
  // //     "onincomplete": function() {
  // //       $(this).closest('.input-field-wrapper').removeClass('value');
  // //       $(this).val('');
  // //     }
  // //   });

  // //   function currentDay() {
  // //     let today = new Date();
  // //     let dd = String(today.getDate()).padStart(2, '0');
  // //     let mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
  // //     let yyyy = today.getFullYear();

  // //     today = dd + '.' + mm + '.' + yyyy;
  // //     // console.log(today);
  // //     return today
  // //   }

  // //   function maxDay(days) {
  // //     let today = new Date();
  // //     let dd = String(today.getDate()).padStart(2, '0');
  // //     let mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
  // //     let yyyy = today.getFullYear() + days;

  // //     today = dd + '.' + mm + '.' + yyyy;
  // //     // console.log(yyyy + 50);
  // //     return today
  // //   }
  // // }



  //sumoselect
  if ($('.SelectBox').length) {
    $(".SelectBox").each(function() {
      // to show placeholder
      $(this)[0].selectedIndex = -1;

      if ($(".SelectBox[multiple]")) {
        $(this).SumoSelect({
          floatWidth: 0,
          nativeOnDevice: [],
          okCancelInMulti: true,
          csvDispCount: 1,
          captionFormat: '{0} Selected',
          locale: ['Ok', 'Cancel', 'All'],
        });
      } else {
        $(this).SumoSelect({
          floatWidth: 0,
          nativeOnDevice: [],
        });
      }
    });
  }


  $(document).ready(function() {
    if ($('select').val()) {
      $(this).closest('.input-field-wrapper').addClass('value');
    } else {
      $(this).closest('.input-field-wrapper').removeClass('value');
    }
  });

  $(document).on('change', 'select', function() {
    if ($(this).val()) {
      $(this).closest('.input-field-wrapper').addClass('value');
    } else {
      $(this).closest('.input-field-wrapper').removeClass('value');
    }
  });



});