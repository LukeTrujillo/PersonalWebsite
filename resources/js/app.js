require('./bootstrap');

$.fn.extend({
  linearScaleOfViewportLocation: function() {

    var viewableOffset = $(this).offset().top - $(window).scrollTop();

    var percent =  ($(window).height() - viewableOffset) / $(window).height();

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

  $(".fadeInContent").each(function() {
      $(this).hide();
  });

    $(window).scroll(function() {

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


        if(hr_length == 1 ) {
          console.log("here");

          console.log(  $(this).closest(".fadeInContent").html());
          $(this).closest(".fadeInContent").fadeIn("slow", 3000);
        }
      });


    });
});
