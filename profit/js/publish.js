$(document).ready(function(){
    AOS.init({
      duration: 1000
    });

    function headScroll(){
      var sct = $(window).scrollTop();
      if(sct > 0){
          $('header').addClass('fixed');
      }else{
          $('header').removeClass('fixed');
      }
    }
    $(window).on('scroll',function(){
        headScroll();
    });

    $('.pop a.close,#act-ok .btn-area a,#deposit-infor .btn-area a,#withdraw-ok .btn-area a').click(function(){
        $('.dim').removeClass('active');
        $(this).parents('.pop').removeClass('active');
        $('html,body').removeAttr('style');
        return false;
      });

    $(".scroll-area").mCustomScrollbar({
          axis:"x" // horizontal scrollbar
      });

    
});

window.onload = function(){
  $('header ul.list').mouseover(function(){
      $('header').addClass('on');
    });

    $('header ul.list').mouseleave(function(){
      $('header').removeClass('on');
    });

    $('.gnb-mb a.menu').click(function(){
      $(this).toggleClass('on');
      $('.gnb-mb .in').toggleClass('active');
      return false;
    });

    $('header .gnb-mb ul.list>li.click>a').click(function(){
      var t = $(this);
      if(!t.parent().hasClass('on')){
        t.parent().addClass('on').siblings().removeClass('on').find('.depth').stop().slideUp();
        t.next().stop().slideDown();
      }else{
        t.parent().removeClass('on');
        t.next().stop().slideUp();
      }
      return false;
    });
};