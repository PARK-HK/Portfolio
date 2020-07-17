//<![CDATA[
	$(function(){
		fn_snb();
		fn_tab();
		fn_faq();
	});

	function fn_snb(){
		var s=$('.snb .section');

		s.on('mouseenter focusin',function(){
			if(!$(this).hasClass('is-active')){
				s.removeClass('is-active');
				$(this).addClass('is-active');
			}else{
				s.removeClass('is-active');
			}
		}).on('mouseleave focusout',function(){
			$(this).removeClass('is-active');
		});
	}

	function fn_tab(){
		$('.tab-title>a:first-child').addClass('is-current');
		$('.tab-title>a').on('click',function(e){
			if(!$(this).hasClass('is-current')){
				$(this).addClass('is-current').siblings('a').removeClass('is-current');
				$(this).parent('.tab-title').next('.tab-cont').children('.cont').hide().eq($(this).index()).show();
			}
			e.preventDefault();
		});
	}

	function fn_faq(){
		$('.faq-list dt a').on('click',function(e){
			if(!$(this).closest('li').hasClass('is-open')){
				$(this).closest('li').addClass('is-open').siblings('li').removeClass('is-open');
			}else{
				$(this).closest('li').removeClass('is-open');
			}
			e.preventDefault();
		});
	}
//]]>