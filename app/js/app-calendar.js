jQuery(function($) {
  'use strict';

  var $calendar = $('.calendar-block');

  /* datepicker */
  if ($calendar.length) {



    $calendar.huicalendar({
      enabledDay: [1, 16, 30],
      viewDay: new Date()
      // viewDay: new Date('2016/08/01')
    }).on('changeMonth', function(e) {
      // console.log(e.year)
      // console.log(e.month)
      $(this).huicalendar({
        enabledDay: [1, 16, 30],
        viewDay: new Date(e.year + '/' + e.month + '/01')
      }, 'update')
    }).on('changeDate', function(e) {
      // console.log(e.year)
      // console.log(e.month)
      // console.log(e.date)
    })
  }


});