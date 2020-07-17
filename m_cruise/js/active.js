$(document).ready(function(){

	//마우스 animation
	function swing(){
	 $('.move').animate({'bottom':'11%'},600).animate({'bottom':'10%'},600,swing);
	}
	swing();

	//[s]:header scroll
	var sectionH = $('.main_section').offset().top - 122;
	function headScroll(){
		var sct = $(window).scrollTop();
		if(sct > sectionH){
			$('header').addClass('on');
		}else{
			$('header').removeClass('on');
		}
	}
	$(window).on('scroll',function(){
		headScroll();
	});
	//[e]:header

	//header toggle
	$('.menu_in ul > li.arrow_down > a').on('click',function(){
		var t = $(this);
		if(!t.parent().hasClass('on')){
			t.parent().addClass('on').find('.in').slideToggle().parent().siblings().removeClass('on').find('.in').css('display','none');
		}else{
			t.parent().removeClass('on').find('.in').slideToggle();
		}
		return false;
	});

	//서브쪽 메뉴 toggle
	$('.sub_fix > a').on('click',function(){
		var t = $(this);
		if(!t.hasClass('on')){
			t.addClass('on').next().slideToggle();
		}else{
			t.removeClass('on').next().slideToggle();
		}
		return false;
	});

	//메인 판매선사 toggle
	$('.txt_list .cruise_list h2 a').on('click',function(){
		var t = $(this);
		if(!t.hasClass('on')){
			t.addClass('on').parent().next().slideToggle();
		}else{
			t.removeClass('on').parent().next().slideToggle();
		}
		return false;
	});

	//테마크루즈 toggle
	$('.recommend_list ul.list > li > a').on('click',function(){
		var t = $(this);
		if(!t.hasClass('on')){
			t.addClass('on').next().slideToggle().parent().siblings().find('a').removeClass('on').next('div').css('display','none');
			 $("body,html").animate({scrollTop: $(this).offset().top - 60}, 700);
		}else{
			t.removeClass('on').next().slideToggle();
		}
		return false;
	});

	//header 메뉴 클릭시 나옴
	$('header a.menu').on('click',function(){
		var t = $(this);
		var sct = $(window).scrollTop();
			if(!t.hasClass('on')){
				t.addClass('on').parent().next().stop().animate({'left':0});
				$('.menu_out').css('background','#000');
				$('header h1').css('background-position','-95px -96px');
				$("html,body").css({overflow:'hidden'});
				$("html,body").scrollTop(sct);

			}else{
				t.removeClass('on').parent().next().stop().animate({'left':'100%'});
				$('.menu_out,header h1,body').removeAttr('style');
				$("html,body").removeAttr('style');
			}
		return false;
	});	

    //클릭시 이동
	$('.move').on('click',function(e){
		e.preventDefault();
		var target = this.hash;
		var $target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top -60
		}, 600);
		return false;
	});
	//서브페이지 메뉴단 클릭시 이동
	$('.sub_fix ul li a').on('click',function(e){
		e.preventDefault();
		var target = this.hash;
		var $target = $(target);
		var t = $(this);
		var Text = t.text();

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top -122
		}, 600);
		$('.sub_fix>a').removeClass('on').next().css('display','none');
		$('.sub_fix>a').text(Text);

		return false;
	});

	//tab
	$('.con_wrap').each(function(){
		var t = $(this);
		t.find('div.content:first').css('display','block');
	});

	$('.company_history .tab li a').on('click',function(){
		var t = $(this);
		if(!t.parent().hasClass('on')){
			t.parent().addClass('on').siblings().removeClass('on');
			$(t.attr('href')).css('display','block').siblings().css('display','none');
		}
		return false;
	});	

	//kakao팝업
	$('.btn_kakao').on('click',function(){
		var t = $(this);
		$(t.attr('href')).addClass('is-active');
		$('.dim').addClass('is-active');
		$("body").css({overflow:'hidden'}).bind('touchmove', function(e){e.preventDefault()});
		return false;
	});

	$('.btn_popclose').on('click',function(){
		var t = $(this);
		$(t.attr('href')).removeClass('is-active');
		$('.dim').removeClass('is-active');
		$('body').removeAttr('style').unbind('touchmove');
		return false;
	});

	//지역 선택 팝업
	$('.choice a').on('click',function(){
		var t = $(this);
		$('#choice_pop').stop().animate({'top':0});
		$(t.attr('href')).addClass('is-active');
		$("html,body").css({overflow:'hidden'});
		return false;
	});

	$('#choice_pop .btn_close').on('click',function(){
		var t = $(this);		
		$(t.attr('href')).removeClass('is-active');
		$(t.attr('href')).removeAttr('style');
		$("html,body").removeAttr('style');
	});
});