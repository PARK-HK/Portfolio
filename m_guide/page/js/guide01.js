
	$(document).ready(function(){

		function naviOn(){//header에 menu버튼 클릭시 네비 나옴
			var t = $(this);
			$(t.attr('href')).css({'display':'block'});
			return false;
		}
		$('.head .menu').click(naviOn);

		function naviOff(){
			var t = $(this);
			$(t.attr('href')).css({'display':'none'});
			return false;
		}
		$('.head #menu_show .close').click(naviOff);

		function Top(){//top버튼 클릭시 상단이동
			$('html,body').stop().animate({'scrollTop':0},300);
			return false;
		}
		$('.fix a.top').click(Top);

		function Toggle(){//reserve_grp_infor.html에서 인원버튼 클릭시 toggle
			var t = $(this);
			if(t.hasClass('open')){
				t.removeClass('open').next().slideUp();
			}else{
				t.addClass('open').next().slideDown();
			}
			return false;
		}
		$('.person a').click(Toggle);

		function EmailSendpop(){//이메일 전송 팝업 
			var t = $(this);
			$('.bg').addClass('active');
			return false;
		}
		$('.form_detail .email_pop').click(EmailSendpop);

		function EmailClose(){//이메일 전송 팝업 닫기
			var t = $(this);
			t.parents().removeClass('active');
			return false;
		}
		$('.bg .e_pop a.close').click(EmailClose);

		function dpBlock(){//탭
			var t = $(this);
			t.find('div.content:first').css('display','block');
		}
		$('div.con_wrap').each(dpBlock);

		function Tabs(){//탭
			var t = $(this);
			if(!t.parent().hasClass('on')){
				t.parent().addClass('on').siblings().removeClass('on');
				$(t.attr('href')).css('display','block').siblings().css('display','none');
			}
			return false;
		}
		$('.find_list li a').click(Tabs);
		$('.reserve_confirm li a').click(Tabs);

		function Term(){//기간설정버튼 클릭시  
			var t = $(this);
			t.parent().addClass('on').siblings().removeClass('on');
			if(t.parent().hasClass('term_select')){
				t.parents().next('div').css('display','block');
			}
			return false;
		}
		$('.sort_option ul li a').click(Term);

		function Infucus(){//input text 포커스갔을때 하단 fix 메뉴 숨김 처리 
			$('.fix').stop().animate({'bottom':'-40px'});
		}
		$('input[type="text"],input[type="number"],input[type="email"]').focus(Infucus);

		function Inblur(){//input text 포커스벗어났을때 하단 fix 메뉴 보임
			$('.fix').stop().animate({'bottom':'20px'});	
		}
		$('input[type="text"],input[type="number"],input[type="email"]').blur(Inblur);

		function scrollT(){//스크롤시 top버튼 나옴
			var sct = $(window).scrollTop();
			if(sct <= 0){
				$('.fix a.top').css('display','none');
			}else if(sct > 10){
				$('.fix a.top').css('display','block');
			}
		}
		$(window).scroll(scrollT);

		function file(){//파일 input 숨김처리하고 다른 버튼 클릭시 작동 
			var t = $(this);
			t.next().trigger('click');
			return false;
		}
		$('.new_user a').click(file);
		$('.passport a').click(file);
		$('.user_img a').click(file);

		function pop(){//pop 나옴
			var t = $(this);
			$(t.attr('href')).addClass('on');
			$('body,html').css('overflow','hidden');
			return false;
		}

		function fdidpop(){//아이디찾기 팝업창 나옴
			var t = $(this);
			$(t.attr('href')).addClass('on');
			$(t.attr('href')).find('ul.find_list li').eq(0).find('a').trigger('click');
			$('body,html').css('overflow','hidden');
			return false;
		}

		function fdpwpop(){//비밀번호찾기 팝업창 나옴
			var t = $(this);
			$(t.attr('href')).addClass('on');
			$(t.attr('href')).find('ul.find_list li').eq(1).find('a').trigger('click');
			$('body,html').css('overflow','hidden');
			return false;
		}

		$('div.protect_btn a').click(pop);
		$('.login_btns .fd_id').click(fdidpop);
		$('.login_btns .fd_pw').click(fdpwpop);

		function popx(){////pop 닫힘
			var t = $(this);
			$(t.attr('href')).removeClass('on');
			$('body,html').removeAttr('css');
			return false;
		}

		$('#protect_pop .infor_cf .close').click(popx);
		$('#find_pop .find_title a.close').click(popx);
		$('.register_head h1 a').click(popx);

	});
