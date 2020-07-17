$(document).ready(function(){
			
	$('.go').on('mouseenter',function(){
		var t = $(this);
		t.find('span.bg').stop().animate({'width':'100%'});
	}).on('mouseleave',function(){
		var t = $(this);
		t.find('span.bg').stop().animate({'width':'0%'});
	});

	$('.submain .box_wrap div a').on('mouseenter',function(){
		var t = $(this);
		t.find('span.bg').stop().animate({'opacity':'1'});
		t.find('span.bg')
	}).on('mouseleave',function(){
		var t = $(this);
		t.find('span.bg').stop().animate({'opacity':'0'});
	});

	//메인 메뉴
	$('header .btn_menu').on('click',function(){
		var t = $(this);
		$('header').css('z-index','9999');
		$('.menu_wrap').fadeIn().addClass('active')
		$('header .menu_in').stop().animate({'right':0});
		$('body').css('overflow','hidden');
		return false;
	});

	$('header .close,header .menu_wrap').on('click',function(){
		var t = $(this);
		$('header').css('z-index','999');
		$('header .menu_in').css({'right':'-390px'});
		$('.menu_wrap').fadeOut().removeClass('active');
		$('body').removeAttr('style');
		return false;
	});

	//마우스 animation
	function swing(){
	 $('.move').animate({'bottom':'60px'},600).animate({'bottom':'40px'},600,swing);
	}
	swing();

	//스크롤 이동
	function Move(e){
		e.preventDefault();

		var target = this.hash;
		var $target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 600);
	}
	$('.move').click(Move);
	$('.quick_menu li a').click(Move);
	$('.topa').click(Move)
	$('.map li.on a').click(Move);

	function Move2(e){
		e.preventDefault();

		var target = this.hash;
		var $target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top -150
		}, 500);
	}
	$('.company_history .tab li a').click(Move2);

	$('.btn_top').on('click',function(){
		$('html,body').stop().animate({scrollTop:0},500);
		return false;
	});

	//toggle 메뉴
	$('.toggle_menu>li>a').on('click',function(){
		var t = $(this);
		if(!t.hasClass('on')){
			t.addClass('on').next('div').slideToggle().parent().siblings().find('a').removeClass('on').next('div').css('display','none');
			 $("body,html").animate({scrollTop: $(this).offset().top}, 500);
		}else{
			t.removeClass('on').next('div').slideToggle();
		}
		return false;
	});

	//탭
	function dpBlock(){
		var t = $(this);
		t.find('div.content:first').css('display','block');
	}
	$('.con_wrap').each(dpBlock);

	$('.promotion_list .select_box ul li a').on('click',function(){
		var t = $(this);
		if(!t.parent().hasClass('on')){
			t.parent().addClass('on').siblings().removeClass('on');
			t.parent().parent().removeClass('on');
			$(t.attr('href')).show().siblings('div.content').hide();
			return false;
		}
	});

	//프로모션 페이지 셀렉트 메뉴
	$('.promotion_list .select_box .selecter').on('click',function(){
		var t = $(this);
		t.next('ul').toggleClass('on');
		return false;
	});	

});