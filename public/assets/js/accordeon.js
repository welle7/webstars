
(function($) { 
    var seite = $('.accordion > dd').hide();    
    $('.accordion > dt > a').click(function() {
      seite.slideUp();
      $(this).parent().next().slideDown();
      return false;
    });
  })
  (jQuery);
  