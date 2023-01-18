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


  // Close search input
  // $(document).on('click', '.field-search .btn-close', function() {
  //   $(this).closest('.field-search').removeClass('value');
  //   $(this).closest('.field-search').find('input[type="search"]').val('');
  // });





});