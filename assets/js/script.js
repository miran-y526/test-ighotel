(function ($) {

  var pcWindow = true;
  var spWindow = false;
  if ($(window).width() < 768) {
    pcWindow = false;
    spWindow = true;
  }

  //ヘッダー

  var $btnNav = $('.btn-nav');
  var $headerForm = $('.header-form-main-area');

  $btnNav.on('click', function () {

    var result = $btnNav.hasClass('opened');

    if (result) {
      $headerForm.removeClass("show");
      $btnNav.removeClass('opened');
    } else {
      $headerForm.addClass("show");
      $btnNav.addClass('opened');
    }
  });

  $headerForm.on("click", function () {
    $headerForm.removeClass("show");
    $btnNav.removeClass('opened');
  });

  $(".form-container").on("click", function (e) {
    e.stopPropagation();
  });



  /*
    * Easing Function
    */
  jQuery.extend(jQuery.easing, {
    easeOutCubic: function (x, t, b, c, d) {
      return c * ((t = t / d - 1) * t * t + 1) + b;
    },
  });


}(jQuery));

