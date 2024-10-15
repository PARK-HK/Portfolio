$(document).ready(function () {
  // [s] : header
  $(".headerinnerwrap .gnb > ul > li > a").on("mouseenter focus", function () {
    $(".gnb").addClass("active");
  });

  $(".headerinnerwrap .gnb").on("mouseleave", function () {
    $(".gnb").removeClass("active");
  });

  TweenMax.staggerFromTo(
    ".blob",
    20,
    {
      cycle: {
        attr: function (i) {
          var r = i * 90;
          return {
            transform: "rotate(" + r + ") translate( 200 ,0.1) rotate(-" + r + ") ",
          };
        },
      },
    },
    {
      cycle: {
        attr: function (i) {
          var r = i * 90 + 360;
          return {
            transform: "rotate(" + r + ") translate( 200 ,0.1) rotate(-" + r + ")",
          };
        },
      },
      ease: Linear.easeNone,
      repeat: -1,
    }
  );

  $(".headerinnerwrap .header_inner .btn_search").click(function () {
    $("nav.search").toggleClass("active");
    $(".headerinnerwrap .header_inner .btn_search").toggleClass("active");
    return false;
  });

  $("header .m_gnb .gnb-1dep > li > a").click(function () {
    $(this).parent().addClass("active").siblings().removeClass("active");
    $(this).next().show();
    $(this).parent().siblings().find(".gnb-2dep").hide();
    return false;
  });

  $("header .m_gnb .gnb-2dep a.more_menu").click(function () {
    if (!$(this).hasClass("active")) {
      $(this).addClass("active").next(".hide").slideDown();
      $(this).parents("li").siblings().find("a.more_menu").removeClass("active").next(".hide").slideUp();
    } else {
      $(this).removeClass("active").next(".hide").slideUp();
    }
    return false;
  });

  $("header .m_menu").click(function () {
    $(".m_gnb").toggleClass("active");
    $(".m_menu a").toggleClass("on");
    return false;
  });

  // [e] : header
});
