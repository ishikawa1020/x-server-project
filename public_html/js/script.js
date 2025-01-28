$(function() {
  $(".example-slick").slick({
    slidesToShow: 1,
    arrows: true,
    responsive: [{
      breakpoint: 769,
      settings: {
        slidesToShow: 1,
      }
    }]
  });

  $(".header .trigger").on('click', function() {
    $("nav").slideToggle();
  });

  $("form").submit(function(event) {
    event.preventDefault();
    var $form = $(this);
    var $button = $('#submit');
    $.ajax({
      url: "sendmail.php",
      type: 'POST',
      data: $form.serialize(),
      timeout: 10000,
      beforeSend: function(xhr, settings) {
        $button.attr('disabled', true);
      },
      complete: function(xhr, textStatus) {
        $button.attr('disabled', false);
      }
    }).done(function(data, textStatus, jqXHR) {
      $form[0].reset();
      alert(data);
    });
  });
});