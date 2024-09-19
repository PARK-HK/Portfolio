$(document).ready(function(){

    AOS.init({
      duration: 1000
    });

    $('header .gnb > li > a').mouseenter(function(){
      $('.pc-show').addClass('on');
      $(this).parent().find('.depth').addClass('on');
      $(this).parent().siblings().find('.depth').removeClass('on');
    });

    $('header .gnb > li').mouseleave(function(){
      $('.pc-show').removeClass('on');
      $(this).find('.depth').removeClass('on');
      $(this).siblings().find('.depth').removeClass('on');
    });

    $('header .gnb .depth').mouseleave(function(){
      $('header').removeClass('on');
      $('.depth').removeClass('on');
    });

    $('header .gnb .product').mouseenter(function(){
        $('.depth-wide').addClass('on');
        $('.depth').removeClass('on');
    });

    $('header .gnb .product').mouseleave(function(){
      $('.depth-wide').removeClass('on');
      //$('.depth').removeClass('on');
    });

    $('header .multi > a').click(function(){
      $(this).toggleClass('on').next('ul').slideToggle();
      return false;
    });

    $('header .menu-grp .search,header .mobile-show .search').click(function(){
      $('header .search-pop').addClass('on');
      return false;
    });

    $('header .search-pop .close').click(function(){
      $('header .search-pop').removeClass('on');
      return false;
    });

    $('header .depth-wide .depth1 li.depth-link a').click(function(){
      var idx = $(this).parent().index();
      $(this).parent().addClass('on').siblings().removeClass('on');
      $('header .depth-wide .depth-wrap').find('>div').eq(idx-1).show().siblings().hide();
      return false;
    });

    $('header .depth-wide .depth-wrap > div.depth3 .tab li a').click(function(){
      var idx = $(this).parent().index();
      $(this).parent().addClass('on').siblings().removeClass('on');
      $('header .depth-wide .depth-wrap > div.depth3 .con-wrap').find('.content').eq(idx).show().siblings().hide();
      return false;
    });

    $('header .mobile-show .brand > ul > li > a').click(function(){
      $(this).parent().toggleClass('on');
      $(this).next('.m-depth').slideToggle();
      $(this).parent().siblings().removeClass('on').find('.m-depth').slideUp();
      return false;
    });

    $('header .mobile-show .big-tab li a').click(function(){
      var idx = $(this).parent().index();
      $(this).parent().addClass('on').siblings().removeClass('on');
      $('header .mobile-show .con-wrap > div').eq(idx).show().siblings().hide();
      return false;
    });

    $('header .mobile-show .type li.no-link a').click(function(){
      var idx = $(this).parent().index();
      $(this).parent().addClass('on').siblings().removeClass('on');
      $('header .type-conwrap > div').eq(idx).show().siblings().hide();
      return false;
    });

    $('header .mobile-show .type-con1 ul li a').click(function(){
      var idx = $(this).parent().index();
      $('header .mobile-show .type-con1 .type-depth > div').eq(idx).show().siblings().hide();
      return false;
    });

    $('header .mobile-show .type-con2 .cateline-btn li a').click(function(){
      var idx = $(this).parent().index();
      $(this).parent().addClass('on').siblings().removeClass('on');
      $('header .mobile-show .type-con2 .type-depth > div').eq(idx).show().siblings().hide();
      return false;
    });

    $('header .mobile-show .menu-btn').click(function(){
      $('header,header .mobile-show,header .mobile-show .in,header .mobile-show .menu-btn').toggleClass('on');
      return false;
    });

    //footer 로고 클릭
    $('footer .logo a').click(function(){
      $(this).toggleClass('on').next('.hide').slideToggle();
        return false;
    });

}); 