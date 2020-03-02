$(function () {
    $("#sliderClick").on("click", function () {
      "none" == $(".outer_slider").css("display") ? ($(".deepDarkFantasy3").fadeIn("fast"),
        $("#sliderClick").addClass("sliderClose"),
        $(".outer_slider").slideDown("fast")) : ($("#sliderClick").removeClass("sliderClose"),
          $(".outer_slider").slideUp("fast"),
          $(".deepDarkFantasy3").fadeOut("fast"))
    })
    $(".sideSecondBox").on("click", ".sideSecondTitle", function () {
      var e = $(this);
      e.siblings("dl").slideToggle(300),
        e.children(".narraw").toggleClass("active")
    })
    $(".closeSide").click(function () {
      $("#outerSlider").slideUp()
    })
    $(".sliderBtn").click(function () {
      $("#outerSlider").slideDown()
    })
    
   })