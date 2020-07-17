$(document).ready(function(){

    //input focus 시 버튼 fixed 풀기
    function focusIn(){
        var t = $(this);
        $('button').css('bottom','-999px');
    }
    $('input[type="text"]').focus(focusIn);

    function focusOut(){
        $('button').removeAttr('style');
    }
    $('input[type="text"]').blur(focusOut);

    function formValue(){
        var t = $(this);
        if(!t.val()){
            t.next().removeAttr('style');
        }else{
            t.next().css({'top':'-18px','opacity':'1'});
        }
    }
   $('.form input').keyup(formValue);

   var burger = $('.btn_side');
    burger.each(function(){
        var $this = $(this);
        
        $this.on('click', function(){
            $(this).toggleClass('active');
            if($this.hasClass('active')){
                $('.screen').addClass('on').fadeIn();
                $('.gnb').stop().animate({'right':'0%'});
                $('html,body').addClass('not_scroll');
            }else{
                $('.screen').removeClass('on').fadeOut();
                $('.gnb').stop().animate({'right':'-85%'});
                $('html,body').removeClass('not_scroll');
            }
            return false;
        })
    });

    //출장규정 확인 팝업
    function tripRule(){
        var t = $(this);
        if(!t.prev('input').is(':checked')){
            t.prev('input').prop('checked',true);
        }
        $('#trip_rule').addClass('on');
        $('html,body').addClass('not_scroll');
        return false;
    }
    $('.register .check label').click(tripRule);

    //팝업 열음
    function popUP(){
        var t = $(this);
        var select = $(t.attr('href'));
        var sct = $(window).scrollTop();
        $('.screen').addClass('on').fadeIn();
        select.addClass('on');
        $('html,body').addClass('not_scroll');
        return false;
    }

    $('.main .quick_menu li.menu06 a').click(popUP);
    $('.register .date_choice a').click(popUP); 
    $('.register .person_choice a').click(popUP); 
    $('.register .airseat_choice a.btn_air').click(popUP);
    $('.register  a.btn_seat').click(popUP); 
    $('.register .time_choice a').click(popUP); 
    $('.register .city_choice a').click(popUP);
    $('.register .checkin_choice a').click(popUP);
    $('.register .room_choice a').click(popUP);
    $('.class_choice a').click(popUP);
    $('.find_post a').click(popUP);
    $('.show_voucher').click(popUP);

    //도시팝업
    function citypopUP(){
        var select = $('.city_search');
        var sct = $(window).scrollTop();
        $('.screen').addClass('on').fadeIn();
        select.addClass('on');
        $('html,body').addClass('not_scroll');
        return false;
    }
    $('.register .search_box .route a').click(citypopUP); 


    //팝업닫음
    function popHide(){
        $('.pop_layer').removeClass('on');
        $('.screen').removeClass('on').hide(); 
        $('html,body').removeClass('not_scroll');
       return false;
    }
    $('.btn_cancel').click(popHide);
    $('.screen').click(popHide);

    //탭
    function dpBlock(){
        var t = $(this);
        t.find('div.content:first').css('display','block');
    }
    $('div.con_wrap').each(dpBlock);
    
    function Tabs(){
        var t = $(this);
        if(!t.parent().hasClass('on')){
            t.parent().addClass('on').siblings().removeClass('on');
            $(t.attr('href')).css('display','block').siblings().css('display','none');
        }
        return false;
    }
    $('.register .fly_tab li a').click(Tabs);
    $('.city_select li a').click(Tabs);
    $('.mypage_detail ul.tab_list li a').click(Tabs);
    

});