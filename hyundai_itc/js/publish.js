$(document).ready(function(){

    AOS.init({
      duration: 1000
    });

     //[s]:header scroll
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

        var wd = $(window).width();

       $("header .gnb li").mouseenter(function(){
            var wd = $(window).width();
            if(1024 < wd){
            $(this).addClass('on').siblings().removeClass('on');
            }
        });
       $("header .gnb li").mouseleave(function(){
           if(1024 < wd){
           $(this).removeClass('on')
       }
        });

       $('.menu-open').click(function(){
            var t = $(this);
            if(!t.hasClass('on')){
                t.addClass('on');
                t.parents('header').addClass('all');
                $('html,body').css('overflow','hidden');
            }else{
                t.removeClass('on');
                t.parents('header').removeClass('all');
                $('html,body').removeAttr('style');
            }
            return false;
       });
       

    $(window).resize(function(){
        var wd = $(window).width();
        if(wd < 781){
            $('header').addClass('mobile');
            $('.depth').css('display','none');
            $('header.all.mobile .gnb>li.on .depth').css('display','block');
        } 
        else{
           $('header').removeClass('mobile');
          $('.depth').css('display','block'); 
        }
    }); 

    $(window).on("load", function(){
         if(wd < 781){
            $('header').addClass('mobile');
        }else{
           $('header').removeClass('mobile');
        }
    });

    $(document).on('click','header.mobile>.gnb>li>a',function(){
            var t = $(this);
            if(!t.parent().hasClass('on')){
                t.parent().addClass('on').siblings().removeClass('on').find('.depth').hide();
                t.next().stop().show(300);
            }else{
                t.parent().removeClass('on');
                t.next().hide(100);
            }
            return false;
         });
   
    
});