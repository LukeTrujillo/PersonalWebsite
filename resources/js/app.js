require('./bootstrap');

$.fn.extend({
  linearScaleOfViewportLocation: function() {

    let viewableOffset = $(this).offset().top - $(window).scrollTop();

    let percent =  ($(window).height() - viewableOffset) / $(window).height();

    if(percent < 0) percent = 0;

    if(percent > 1) percent = 1;

    return percent;
  }
});

function normalize(min, max, value) {
  return (value - min) / (max - min);
}

$(document).ready(function() {

  $(".line-header").each(function() {
    $(this).children(".left-hr").css("width", "0%");
    $(this).data("startingPercent", $(this).linearScaleOfViewportLocation());
  });



  $(".view-fade").each(function() {
    $(this).hide();
  });

    $(window).scroll(function() {

      $(".view-fade").each(function() {
        let percent = $(this).linearScaleOfViewportLocation();
        console.log(percent);
        if($(this).is(":hidden") && percent > 0.80) {
          $(this).finish().fadeOut();
          $(this).fadeIn(2000);
        }

      })






      $(".line-header").each(function() {

        let percent = $(this).linearScaleOfViewportLocation();

        let upper_limit = 0.75;
        let lower_limit = $(this).data("startingPercent") + 0.1;

        let hr_length = normalize(lower_limit, upper_limit, percent);

        if(hr_length > 0.85) {
            $(this).children("hr").addClass("done-moving");
        } else {
            $(this).children("hr").removeClass("done-moving");
        }

        if(hr_length > 1) {
          hr_length = 1;
        }

        $(this).children(".left-hr").css("width", (100 * hr_length) + "%");
      });


    });
});
