

function deviceChk() {
	if(window.innerWidth > 1024 ) {
		$("body").addClass("pc");
		$("body").removeClass("mob");
	} else{
		$("body").addClass("mob");
		$("body").removeClass("pc");
	}
}

$(window).scroll(function () {
	var sctop = $(window).scrollTop();
	var fixtop = $('.fix-menu').offset().top;
	var slider1 = $('#slider1').offset().top;
	var slider2 = $('#slider2').offset().top;

	if(sctop > fixtop){
		$('.fix-menu').addClass('on');
	}else{
		$('.fix-menu').removeClass('on');
	}

	if(sctop > slider2 - 200){
		$('.scroll_sect05').addClass('on');
		$('.scroll_sect05 .tab li.tab02').addClass('on').siblings().removeClass('on');
	}else{
		$('.scroll_sect05').removeClass('on');
		$('.scroll_sect05 .tab li.tab02').removeClass('on').siblings().addClass('on');
	}
});

// PC네비
function pcNavi() {
	// 네비 on
	$(document).on('mouseenter', '.pc .header_nav .inner', function () {
	//$(".pc .gnb_wrap>ul>li").on("mouseenter", function(){
		var idx = $(".pc .header_nav .inner").index($(this));
		$("header").addClass("open");
		$(".pc .nav_bg").stop().slideDown(200);
		$(".pc .header_nav .depth2").stop().fadeIn(400);
	});

	// 네비 off
	$(document).on('mouseleave', '.pc .header_nav .inner', function () {
	//$(".pc #header").on("mouseleave", function(){
		$("header").removeClass("open");
		$(".pc .nav_bg").stop().slideUp(300);
		$(".pc .header_nav .depth2").stop().fadeOut(100);
	});
}


//모바일네비

function mobNavi() {
	$(".m_toggle_btn").on('click', function () {
		if($(this).hasClass('on')){
			$('body').removeClass('no_scrolling');
			$(this).removeClass('on');
			$(this).parent().find('.tel').removeClass('on');
			$(this).parent().find('.m_search_btn').removeClass('on');
			$(".header_nav").slideUp(200);
		}else{
			$('body').addClass('no_scrolling');
			$(this).addClass('on');
			$(this).parent().find('.tel').addClass('on');
			$(this).parent().find('.m_search_btn').addClass('on');
			$(".header_nav").slideDown(200);
		}
	});
}


function mobMenu() {
	//$('.mob .header_nav .depth1>li>a').on('click', function () {
	$(document).on('click', '.mob .header_nav .depth1>li>a', function () {
		var idx = $('.mob .header_nav .depth1>li>a').index($(this));
		$('.mob .header_nav .depth1>li>a').each(function(index){
			if(idx == index){
				if(!$(this).parent('li').hasClass("on")){
					$(this).parent('li').addClass("on");
					$(this).parent('li').find('.depth2').stop().slideDown(300);
				}else{
					$(this).parent('li').removeClass("on");
					$(this).parent('li').find('.depth2').stop().slideUp(300);
				}
			}else{
				$(this).parent('li').removeClass("on");
				$(this).parent('li').find('.depth2').stop().slideUp(300);
			}
		});
	});
}

$( document ).ready(function() {

	deviceChk();
	pcNavi();
	mobNavi();
	mobMenu();
	pop();
	popclose();
	goTop();
	numFocusMove();
	sect07tab();
	toggleslide();

	$('.fix-menu a,.scroll_sect05 .tab li a').click(function(){
		$('html, body').animate({scrollTop: $(this.hash).offset().top}, 800);
		return false;
	});
	


	//   ScrollTrigger.create({
	// 	trigger: '.scroll_sect05 .tab-wrap',
	// 	pin: true,
	// 	start: 'top 100px',
	// 	end: "+=100%",
	// 	pinSpacing: false,
	// 	//markers: true,
	//   });

	//   ScrollTrigger.create({
	// 	trigger: '.scroll_sect05 .left',
	// 	pin: true,
	// 	start: 'top 100px',
	// 	end: "+=100%",
	// 	pinSpacing: false,
	// 	//markers: true,
	//   });

	  

	// ScrollTrigger.matchMedia({
	// 	// mobile
	// 	"(min-width: 1025px)": function() {
	// 	   gsap.timeline({  
	// 		scrollTrigger: {
	// 		  trigger: ".scroll_sect05_slider", // 객체기준범위
	// 		  pin: true, // 고정
	// 		  start: "top -30px", // 시작점
	// 		  end: "bottom bottom", // 끝점
	// 		  scrub: 0.1, // 모션바운스
	// 		  markers: false, // 개발가이드선
	// 		  onLeave: function(){
	// 			console.log('end');
	// 		  }
	// 		}
	// 	  })
	// 		  .to('.scroll_sect05 .item01', {duration: 4, opacity: 1, y: 0})
	// 		  .from('.scroll_sect05 .item02', {y: 100}) 
	// 		  .to('.scroll_sect05 .item02', {duration: 4, opacity: 1, y: 0,'z-index':6}) 
	// 		  .to('.scroll_sect05 .tab li.tab01', {opacity: 0.5})
	// 		  .to('.scroll_sect05 .tab li.tab02', {opacity: 1})
	// 		  .to('.scroll_sect05 .item02', {duration: 4, delay: 1})
			  
	// 	},
	  
	// 	  "(min-width: 721px) and (max-width: 1024px)": function() {
	// 	   gsap.timeline({  
	// 		scrollTrigger: {
	// 		  trigger: ".scroll_sect05_slider", // 객체기준범위
	// 		  pin: true, // 고정
	// 		  start: "top 90px", // 시작점
	// 		  end: "bottom bottom", // 끝점
	// 		  scrub: 0, // 모션바운스
	// 		  markers: false, // 개발가이드선
	// 		  onLeave: function(){
	// 			console.log('end');
	// 		  }
	// 		}
	// 	  })
	// 		  .to('.scroll_sect05 .item01', {duration: 4, opacity: 1, y: -30})
	// 		  .to('.scroll_sect05 .item02', {duration: 4, opacity: 1, y: 0,'z-index':6}) 
	// 		  .to('.scroll_sect05 .tab li.tab01', {opacity: 0.5})
	// 		  .to('.scroll_sect05 .tab li.tab02', {opacity: 1})
	// 		  .to('.scroll_sect05 .item02', {duration: 4, delay: 1})
			  
	// 	},
	  
	// 	  "(max-width: 720px)": function() {
	// 	   gsap.timeline({  
	// 		scrollTrigger: {
	// 		  trigger: ".scroll_sect05_slider", // 객체기준범위
	// 		  pin: true, // 고정
	// 		  start: "top 55px", // 시작점
	// 		  end: "bottom bottom", // 끝점
	// 		  scrub: 0, // 모션바운스
	// 		  markers: false, // 개발가이드선
	// 		  onLeave: function(){
	// 			console.log('end');
	// 		  }
	// 		}
	// 	  })
	// 		  .to('.scroll_sect05 .item01', {duration: 4, opacity: 1, y: -30})
	// 		  .from('.scroll_sect05 .item02', {y: 30})
	// 		  .to('.scroll_sect05 .item02', {duration: 4, opacity: 1, y: 0,'z-index':6}) 
	// 		  .to('.scroll_sect05 .tab li.tab01', {opacity: 0.5})
	// 		  .to('.scroll_sect05 .tab li.tab02', {opacity: 1})
	// 		  .to('.scroll_sect05 .item02', {duration: 4, delay: 1})
	// 	},
	//   })
	  

	$(window).scroll(function(){
		var wscroll = $(window).scrollTop();
		if (wscroll > $('.block_sect02').offset().top){
			$('.block_sect02 .txt_ani').addClass('active');
		} else {
			$('.block_sect02 .txt_ani').removeClass('active');
		}
	});

	var swiper = new Swiper(".block_sect04 .swiper", {
		slidesPerView: 1.5,
		spaceBetween: 20,
		speed: 1200,
		navigation: {
			nextEl: ".block_sect04 .swiper-button-next",
			prevEl: ".block_sect04 .swiper-button-prev",
		},
		breakpoints: {
			600: {
				slidesPerView: 2.5, //브라우저가 1440보다 클 때
				spaceBetween: 20,
			},
			1024: {
				slidesPerView: 3.5, //브라우저가 1440보다 클 때
				spaceBetween: 20,
			},
			1224: {
				slidesPerView: 'auto', //브라우저가 1440보다 클 때
				spaceBetween: 25,
			},
		},
	});

	$('.block_sect06 .tab li a').click(function(){
		var idx = $(this).parent().index();
		$(this).parent().addClass('on').siblings().removeClass('on');
		$('.block_sect06 .con-wrap .content').eq(idx).show().siblings().hide();
		return false;
	});

	var swiper = new Swiper(".block_sect07 .mainswiper", {
		slidesPerView: 1,
		centeredSlides: true,
		loopedSlides: 2,
		loop: true,
		spaceBetween: 0,
		speed: 1200,
		navigation: {
			nextEl: ".block_sect07 .control .swiper-button-next",
			prevEl: ".block_sect07 .control .swiper-button-prev",
		 },
	});

	var swiper = new Swiper(".block_sect07 .subswiper1", {
		slidesPerView: 1,
		centeredSlides: true,
		loopedSlides: 2,
		loop: true,
		spaceBetween: 0,
		speed: 1200,
		initialSlide : 3,
		navigation: {
			nextEl: ".block_sect07 .control .swiper-button-next",
			prevEl: ".block_sect07 .control .swiper-button-prev",
		 },
		 observer: true,
  		observeParents: true,
	});

	var swiper = new Swiper(".block_sect07 .subswiper2", {
		slidesPerView: 1,
		centeredSlides: true,
		loopedSlides: 2,
		loop: true,
		spaceBetween: 0,
		speed: 1200,
		initialSlide : 1,
		navigation: {
			nextEl: ".block_sect07 .control .swiper-button-next",
			prevEl: ".block_sect07 .control .swiper-button-prev",
		 },
		 observer: true,
		 observeParents: true,
	});

	var swiper = new Swiper(".scroll_sect05 .item01 .swiper", {
		slidesPerView: 1,
		centeredSlides: true,
		loop: true,
		spaceBetween: 0,
		speed: 1200,
		pagination: {
			el: ".scroll_sect05 .swiper-pagination",
			clickable: true,
		  },
	});

	var swiper = new Swiper(".scroll-mblock .tab01 .swiper", {
		slidesPerView: 1,
		centeredSlides: true,
		loop: true,
		spaceBetween: 0,
		speed: 1200,
		pagination: {
			el: ".scroll-mblock .tab01 .swiper-pagination",
			clickable: true,
		  },
	});

	$('.scroll-mblock .tab li a').click(function(){
		var idx = $(this).parent().index();
		$(this).parent().addClass('on').siblings().removeClass('on');
		$('.scroll-mblock .con-wrap .content').eq(idx).show().siblings().hide();
		return false;
	});

	var swiper = new Swiper(".block_sect09 .slide-wrap .swiper", {
        slidesPerView: 1,
		loop: true,
		speed: 800,
        spaceBetween: 30,
		centeredSlides: true,
		loopedSlides: 2,
        pagination: {
          el: ".block_sect09 .swiper-pagination",
          clickable: true,
        },
		navigation: {
			nextEl: ".block_sect09 .control .swiper-button-next",
			prevEl: ".block_sect09 .control .swiper-button-prev",
		 },
		 breakpoints: {
			780: {
				slidesPerView: 2,
				spaceBetween: 20,
				// centeredSlides: false,
			  },
			1224: {
			  slidesPerView: 2.1,
			  spaceBetween: 20,
			  //loopedSlides: 4,
			  //centeredSlides: false,
			}
		}
      });

	  var swiper = new Swiper(".block_sect11 .swiper", {
		slidesPerView: 1,
		//centeredSlides: true,
		loop: true,
		spaceBetween: 0,
		speed: 1200,
		pagination: {
			el: ".block_sect11 .swiper-pagination",
			clickable: true,
			renderBullet: function (index, className) {
			  return '<span class="' + className + '">' + (index + 1) + "</span>";
			},
		},
		navigation: {
			nextEl: ".block_sect11 .swiper-button-next",
			prevEl: ".block_sect11 .swiper-button-prev",
		 },
	});

	$(window).on('resize', function(){
		deviceChk();
		if($(window).width() > 1024 ) {
			$(".header_nav .depth1>li>a").attr("onclick","return true");
			$(".header_nav").show();
			$(".header_nav .depth2").hide();
			$('body').removeClass('no_scrolling');
			$(".camp_scroll_list li .fold_wp").show();
			$(".card_sect01 .right").addClass('off');
		} else if ($(window).width() <= 1024 ){
			$(".header_nav .depth1>li>a").attr("onclick","return false");
			$(".camp_scroll_list li .fold_wp").hide();
			$('.camp_scroll_list li').removeClass('on');
			$('.camp_scroll_list li.card').addClass('on');
			$(".camp_scroll_list li.card .fold_wp").show();
			$(".card_sect01 .left").removeClass('off');
			$(".card_sect01 .right").removeClass('off');

		}
	}).resize();

	$(window).scroll(function() {
		var scrollDistance = $(window).scrollTop();
		var fxh = $('.block_sect06 .fix-wrap').height()+150;
	
		// Assign active class to nav links while scolling
		$('.block_sect06 .conts .cont').each(function(i) {
			if ($(this).offset().top-fxh <= scrollDistance) {
					$('.fix-menu li.on').removeClass('on');
					$('.fix-menu li').eq(i).addClass('on');
					$('.block_sect06 .conts .cont.on').removeClass('on');
					$('.block_sect06 .conts .cont').eq(i).addClass('on');
			}
		});
	}).scroll();

});


//layerPopup
function pop(){
	// $('.add_btm_fix .right .btn_basic').click(function(){
	// 	$('.consult-complete').show();
	// 	$('.dim').addClass('on');
	// 	return false;
	// });

	$('.block_main .tit-wrap a').click(function(){
		$('.apply-pop').show();
		$('.dim').addClass('on');
		$('html,body').css('overflow','hidden');
		return false;
	});

	$('.fix-banner a').click(function(){
		$('.apply-pop2').show();
		$('.dim').addClass('on');
		$('html,body').css('overflow','hidden');
		return false;
	});

	$('.block_sect11 .introduce a').click(function(){
		$('.apply-pop3').show();
		$('.dim').addClass('on');
		$('html,body').css('overflow','hidden');
		return false;
	});

	$('.add_btm_fix .right a,.agree_wp a').click(function(){
		$('.privacy-pop').show();
		$('.dim').addClass('on');
		$('html,body').css('overflow','hidden');
		return false;
	});
	

	$('.block_banner a').click(function(){
		$('.consult-apply').show();
		$('.dim').addClass('on');
		return false;
	});

	$('.btn-apply').click(function(){
		$('.consult-apply').hide();
		$('.consult-complete').show();
		return false;
	});

	$('.block_sect03 .swiper-slide a').click(function(){
		var t = $(this);
		$(t.attr('href')).show();
		$('.dim').addClass('on')
		return false;
	});
}

function popclose(){
	$('.pop .close-btn').click(function(){
		var t = $(this);
		t.parent('.pop').hide();
		$('.dim').removeClass('on');
		$('html,body').removeAttr('style');
		return false;
	});
}

function sect07tab(){
	$('.block_sect07 .tab li a').click(function(){
		var t = $(this);
		if(!t.parent().hasClass('on')){
			t.parent().addClass('on').siblings().removeClass('on');
		}else{
			t.parent().removeClass('on');
		}
		return false;
	});
}

function toggleslide(){
	$('.block_sect14 .toggle a,.block_sect05 .toggle a,.block_sect09 .toggle li a').click(function(){
		var t = $(this);
		if(!t.parent().hasClass('on')){
			t.parent().addClass('on').find('.txt').slideDown();
			t.parent().siblings().removeClass('on').find('.txt').slideUp();
		}else{
			t.parent().removeClass('on').find('.txt').slideUp();
		}
		return false;
	});
}


//top 버튼
function goTop() {
	  $('.top_btn').click(function(){
		  $('html, body').animate({scrollTop:0},400);
		  return false;
	  });
};


//input 제한

function handleOnInput(el, maxlength) {
  if(el.value.length > maxlength)  {
    el.value 
      = el.value.substr(0, maxlength);
  }
}


(function() {
    var w = window;
    if (w.ChannelIO) {
      return (window.console.error || window.console.log || function(){})('ChannelIO script included twice.');
    }
    var ch = function() {
      ch.c(arguments);
    };
    ch.q = [];
    ch.c = function(args) {
      ch.q.push(args);
    };
    w.ChannelIO = ch;
    function l() {
      if (w.ChannelIOInitialized) {
        return;
      }
      w.ChannelIOInitialized = true;
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = 'https://cdn.channel.io/plugin/ch-plugin-web.js';
      s.charset = 'UTF-8';
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    }
    if (document.readyState === 'complete') {
      l();
    } else if (window.attachEvent) {
      window.attachEvent('onload', l);
    } else {
      window.addEventListener('DOMContentLoaded', l, false);
      window.addEventListener('load', l, false);
    }
  })();
  ChannelIO('boot', {
    "pluginKey": "6132fd18-f7aa-4571-b695-60d57d70a1e9" //please fill with your plugin key
});

document.addEventListener("DOMContentLoaded", function() {
    var elements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("This field cannot be left blank");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
});

/*function checkboxError() {
	if($('input[type="radio"]').hasClass("error")){
		$(this).parent().addClass("error_border");
	}else{
		$(this).parent().removeClass("error_border");
	}
}*/

function numFocusMove() {
	$('input[name="phone1"]').on('keyup', function() {
		if(this.value.length == 3) {
		   $('input[name="phone2"]').focus()
		}
	});
}

function scrollactive(){}