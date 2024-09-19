<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>Hyundai-ITC</title>
        <link type="text/css" rel="stylesheet" href="/css/layout.css">
        <link type="text/css" rel="stylesheet" href="/css/layout_1440.css">
        <link type="text/css" rel="stylesheet" href="/css/layout_780.css">
        <link type="text/css" rel="stylesheet" href="/css/swiper-bundle.min.css">
        <link type="text/css" rel="stylesheet" href="/css/aos.css">

        <script type="text/javascript" src="/js/libs/jquery.min.js"></script>
        <script type="text/javascript" src="/js/libs/jquery-ui.min.js"></script>
        <script type="text/javascript" src="/js/swiper-bundle.min.js"></script>
        <script type="text/javascript" src="/js/aos.js"></script>
        <script type="text/javascript" src="/js/publish.js"></script>
		<script type="text/javascript" src="/js/TweenMax.min.js"></script>
		
		<script type="text/javascript">
		// 자바스크립트에서 사용하는 전역변수 선언
		var cb_url = "<?php echo trim(site_url(), '/'); ?>";
		var cb_cookie_domain = "<?php echo config_item('cookie_domain'); ?>";
		var cb_charset = "<?php echo config_item('charset'); ?>";
		var cb_time_ymd = "<?php echo cdate('Y-m-d'); ?>";
		var cb_time_ymdhis = "<?php echo cdate('Y-m-d H:i:s'); ?>";
		var layout_skin_path = "<?php echo element('layout_skin_path', $layout); ?>";
		var view_skin_path = "<?php echo element('view_skin_path', $layout); ?>";
		var is_member = "<?php echo $this->member->is_member() ? '1' : ''; ?>";
		var is_admin = "<?php echo $this->member->is_admin(); ?>";
		var cb_admin_url = <?php echo $this->member->is_admin() === 'super' ? 'cb_url + "/' . config_item('uri_segment_admin') . '"' : '""'; ?>;
		var cb_board = "<?php echo isset($view) ? element('board_key', $view) : ''; ?>";
		var cb_board_url = <?php echo ( isset($view) && element('board_key', $view)) ? 'cb_url + "/' . config_item('uri_segment_board') . '/' . element('board_key', $view) . '"' : '""'; ?>;
		var cb_device_type = "<?php echo $this->cbconfig->get_device_type() === 'mobile' ? 'mobile' : 'desktop' ?>";
		var cb_csrf_hash = "<?php echo $this->security->get_csrf_hash(); ?>";
		var cookie_prefix = "<?php echo config_item('cookie_prefix'); ?>";
		</script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/common.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.extension.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/sideview.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/js.cookie.js'); ?>"></script>
    </head>
    <body>
		<?php
		if(isset($view) && element('no_head', $view)=="Y"){
		}else{
		?>
		<header>
            <h1><a href="/main"><span class="text_blind">현대ITC</span></a></h1>
            <ul class="gnb">
                <li>
                    <a href="/sub/s02_1_1">회사소개</a>
                    <div class="depth">
                        <div class="dep-in">
                            <div class="wrap">
                                <span class="tit">기업소개</span>
                                <ul>
                                    <li><a href="/sub/s02_1_1">사업소개</a></li>
                                    <li><a href="/sub/s02_1_2">연혁</a></li>
                                    <li><a href="/sub/s02_1_3">사업장</a></li>
                                </ul>
                            </div>
                            <div class="wrap">
                                <span class="tit">CEO 메시지</span>
                                <ul>
                                    <li><a href="/sub/s02_2_1">CEO 인사말</a></li>
                                </ul>
                            </div>
                            <div class="wrap">
                                <span class="tit">경영이념</span>
                                <ul>
                                    <li><a href="/sub/s02_3_1">경영철학</a></li>
                                    <li><a href="/sub/s02_3_2">CI</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="/sub/s03_1_1">인재채용</a>
                    <div class="depth">
                        <div class="dep-in">
                            <div class="wrap">
                                <span class="tit">채용가이드</span>
                                <ul>
                                    <li><a href="/sub/s03_1_1">채용전형</a></li>
                                    <li><a href="/sub/s03_1_2_1">업무소개</a></li>
                                </ul>
                            </div>
                            <div class="wrap">
                                <span class="tit">제도소개</span>
                                <ul>
                                    <li><a href="/sub/s03_2_1">인사제도</a></li>
                                    <li><a href="/sub/s03_2_2">복리후생</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="/sub/s06_1_1">CSR</a>
                    <div class="depth">
                        <div class="dep-in">
                            <div class="wrap">
                                <span class="tit">사회공헌</span>
                                <ul>
                                    <li><a href="/sub/s06_1_1">사회공헌방향</a></li>
                                </ul>
                            </div>
                            <div class="wrap">
                                <span class="tit">신뢰경영</span>
                                <ul>
                                    <li><a href="/sub/s06_2_1">윤리경영</a></li>
                                    <li><a href="/sub/s06_2_2">공정거래</a></li>
                                </ul>
                            </div>
                            <div class="wrap">
                                <span class="tit">동반성장</span>
                                <ul>
                                    <li><a href="/sub/s06_3_1">동반성장 소개</a></li>
                                    <li><a href="/sub/s06_3_2">동반성장 비전 및 <span>핵심가치</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="/ITC/IR1">투자정보</a>
                    <div class="depth">
                        <div class="dep-in">
                            <div class="wrap">
                                <span class="tit">전자공고</span>
                                <ul>
                                    <li><a href="/ITC/IR1">전자공고</a></li>
                                </ul>
                            </div>
                            <div class="wrap">
                                <span class="tit">재무정보</span>
                                <ul>
                                    <li><a href="/sub/s04_2_1">요약재무제표</a></li>
                                    <li><a href="/sub/s04_2_2">신용등급</a></li>
                                </ul>
                            </div>
                            <div class="wrap">
                                <span class="tit">IR 자료실</span>
                                <ul>
                                    <li><a href="/ITC/IR2">정기보고서</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="/ITC/News1">홍보센터</a>
                    <div class="depth">
                        <div class="dep-in">
                            <div class="wrap">
                                <span class="tit">홍보자료실</span>
                                <ul>
                                    <li><a href="/ITC/News1">With ITC</a></li>
                                    <li><a href="/ITC/News2">News</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <a href="" class="menu-open"><span></span></a>
        </header>
		<?php }?>

	<!-- main start -->
			<?php if (isset($yield))echo $yield; ?>
	<!-- main end -->

	<!-- footer start -->
	<footer>
            <h2><img src="/img/common/logo-black.svg" alt=""></h2>
            <ul class="link">
                <li><a href="">개인정보취급방침</a></li>
                <li><a href="">개인정보처리방침</a></li>
            </ul>
            <ul class="link link2">
                <li><a href="">영상정보처리기기 운영관리방침</a></li>
                <li><a href="">사이버감사실</a></li>
            </ul>
            <a href="" class="f-site">FAMILY SITE<i></i></a>
            <div>충청남도 당진시 유곡2길 9</div>
            <ul class="tel">
                <li><b>TEL</b>041-3464-6114</li>
                <li><b>FAX</b>041-3464-6060</li>
            </ul>              
            <span class="right">ⓒ 2022. <b>HYUNDAI ITC</b> All rights reserved.</span>
    </footer>
	<!-- footer end -->
</div>

<script type="text/javascript">
$(document).on('click', '.viewpcversion', function(){
	Cookies.set('device_view_type', 'desktop', { expires: 1 });
});
$(document).on('click', '.viewmobileversion', function(){
	Cookies.set('device_view_type', 'mobile', { expires: 1 });
});
</script>
<?php echo element('popup', $layout); ?>
<?php echo $this->cbconfig->item('footer_script'); ?>
<script>  

let mainBusinessNum = 0;
let mainBusinessBeforeNum = 0;
let mainBusinessTotalNum = 0;
let movieDis = true;
function businessArrowClickHandler(e){
    $(".con1_slide_area .slider_nav button").unbind('click',businessArrowClickHandler);
    mainBusinessBeforeNum = mainBusinessNum
    switch($(e.currentTarget).index()){
        case 0:
            if(mainBusinessNum>0){
                mainBusinessNum--;
            }else{
                mainBusinessNum = mainBusinessTotalNum-1
            }
            movieDis = false
            break;
        case 1:
            if(mainBusinessNum<(mainBusinessTotalNum-1)){
                mainBusinessNum++;
            }else{
                mainBusinessNum = 0
            }
            movieDis = true
            break;
    }
    settingBusinessArea01();
    settingBusinessArea02();
    settingBusinessArea03();
    setTimeout(function(){
        $(".con1_slide_area .slider_nav button").bind('click',businessArrowClickHandler);
    },1000)
}

function settingBusinessArea01(){
    $(".con1_slide_area .con1_slider ul.slider01 li").each(function(){
        $(this).css("z-index",0);
    })
    let $thisBanner = $(".con1_slide_area .con1_slider ul.slider01 li").eq(mainBusinessNum)
    let $beforeBanner = $(".con1_slide_area .con1_slider ul.slider01 li").eq(mainBusinessBeforeNum)
    $thisBanner.css("z-index",2).addClass('active');
    $beforeBanner.css("z-index",1).removeClass('active');
    if(movieDis){
        TweenMax.to($thisBanner,0,{left:630, ease:Cubic.easeOut});
        TweenMax.to($beforeBanner,1.2,{left:-708, ease:Cubic.easeOut});
    }else{
        TweenMax.to($thisBanner,0,{left:-630, ease:Cubic.easeOut});
        TweenMax.to($beforeBanner,1.2,{left:708, ease:Cubic.easeOut});
    }
    TweenMax.to($thisBanner.find("img"),0,{scale:1.2, ease:Cubic.easeOut});
    TweenMax.to($thisBanner.find("img"),1.2,{scale:1, ease:Cubic.easeOut});
    TweenMax.to($thisBanner,1.2,{left:0, ease:Cubic.easeOut});
}

function settingBusinessArea02(){
    $(".con1_slide_area .con1_slider ul.slider02 li").each(function(){
        $(this).css("z-index",0);
    })
    let thisBisNum = mainBusinessNum+1
    let thisBisBeforeNum = mainBusinessBeforeNum+1
    if(thisBisNum>=mainBusinessTotalNum) thisBisNum = 0
    if(thisBisBeforeNum>=mainBusinessTotalNum) thisBisBeforeNum = 0
    let $thisBanner = $(".con1_slide_area .con1_slider ul.slider02 li").eq(thisBisNum)
    let $beforeBanner = $(".con1_slide_area .con1_slider ul.slider02 li").eq(thisBisBeforeNum)
    $thisBanner.css("z-index",2);
    $beforeBanner.css("z-index",1);
    if(movieDis){
        TweenMax.to($thisBanner,0,{left:520, ease:Cubic.easeOut});
        TweenMax.to($beforeBanner,1.2,{left:-590, ease:Cubic.easeOut});
    }else{
        TweenMax.to($thisBanner,0,{left:-520, ease:Cubic.easeOut});
        TweenMax.to($beforeBanner,1.2,{left:590, ease:Cubic.easeOut});
    }
    TweenMax.to($thisBanner.find("img"),0,{scale:1.2, ease:Cubic.easeOut});
    TweenMax.to($thisBanner.find("img"),1.2,{scale:1, ease:Cubic.easeOut});
    TweenMax.to($thisBanner,1.2,{left:0, ease:Cubic.easeOut});
}

function settingBusinessArea03(){
    $(".con1_slide_area .con1_slider ul.slider03 li").each(function(){
        $(this).css("z-index",0);
    })
    let thisBisNum = mainBusinessNum+2
    let thisBisBeforeNum = mainBusinessBeforeNum+2
    if(thisBisNum==mainBusinessTotalNum) thisBisNum = 0
    if(thisBisBeforeNum==mainBusinessTotalNum) thisBisBeforeNum = 0
    if(thisBisNum>mainBusinessTotalNum) thisBisNum = 1
    if(thisBisBeforeNum>mainBusinessTotalNum) thisBisBeforeNum = 1
    let $thisBanner = $(".con1_slide_area .con1_slider ul.slider03 li").eq(thisBisNum)
    let $beforeBanner = $(".con1_slide_area .con1_slider ul.slider03 li").eq(thisBisBeforeNum)
    $thisBanner.css("z-index",2);
    $beforeBanner.css("z-index",1);
    if(movieDis){
        TweenMax.to($thisBanner,0,{left:520, ease:Cubic.easeOut});
        TweenMax.to($beforeBanner,1.2,{left:-480, ease:Cubic.easeOut});
    }else{
        TweenMax.to($thisBanner,0,{left:-520, ease:Cubic.easeOut});
        TweenMax.to($beforeBanner,1.2,{left:480, ease:Cubic.easeOut});
    }
    //TweenMax.to($thisBanner.find("img"),0,{scale:1.2, ease:Cubic.easeOut});
    //TweenMax.to($thisBanner.find("img"),1.2,{scale:1, ease:Cubic.easeOut});
    TweenMax.to($thisBanner,1,{left:0, ease:Cubic.easeOut});
}

       // 슬라이더 페이지 번호 지정
function pageNumber__Init(){
    // 전채 배너 페이지 갯수 세팅해서 .slider 에 'data-slide-total' 넣기
    var totalSlideNo = $('.con1_slider ul.slider01 li').length;
    //console.log(totalSlideNo);
    
    $('.con1_slider ul.slider01').attr('data-slide-total', totalSlideNo);
    
    // 각 배너 페이지 번호 매기기
    $('.con1_slider ul.slider01 li').each(function(index, node){
        $(node).attr('data-slide-no', index + 1);
    });
};

// 슬라이더 이동시 페이지 번호 변경
function updateCurrentPageNumber(){
    var totalSlideNo = $('.con1_slider ul.slider01').attr('data-slide-total');
    var currentSlideNo = $('.con1_slider ul.slider01 li.active').attr('data-slide-no');
    
    $('.page-no > .total-slide-no').html('0'+totalSlideNo);
    $('.page-no > .current-slide-no').html('0'+currentSlideNo);
};


$(document).ready(function(){
    $('.slider_next').trigger('click')
    $(".con1_slide_area .slider_nav a").bind('click',businessArrowClickHandler);
    mainBusinessTotalNum = $(".con1_slide_area .con1_slider ul.slider01 li").length;
    $(".con1_slide_area .con1_slider ul.slider01 li").eq(mainBusinessNum).css("z-index",1);
    $(".con1_slide_area .con1_slider ul.slider02 li").eq(mainBusinessNum+1).css("z-index",1);
    $(".con1_slide_area .con1_slider ul.slider03 li").eq(mainBusinessNum+2).css("z-index",1);
    $(".con1_slide_area .slider_nav a").click(updateCurrentPageNumber);
    pageNumber__Init();
    updateCurrentPageNumber();
});

    var galleryTop = new Swiper('.main-slide .mySwiper', {
        pagination: {   //페이징 사용자 설정
            el: ".pagination_bullet",   //페이징 태그 클래스 설정 
            clickable: true,    //버튼 클릭 여부
            type : 'fraction',   //페이징 타입 설정(종류: bullets, fraction, progressbar)   
            // Bullet Numbering 설정
           formatFractionCurrent: function (number) {
                return ('0' + number).slice(-2);
            },
            formatFractionTotal: function (number) {
                return ('0' + number).slice(-2);
            },
            renderFraction: function (currentClass, totalClass) {
                return '<span class="' + currentClass + '"></span>' +
                       '<span class="' + totalClass + '"></span>';
            }
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
    });
        //progress Bar
        var pagingSwiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".pagination_progress",
                type: "progressbar",
            },
        });

        //Main Swiper로 progress Bar 제어
        galleryTop.controller.control = pagingSwiper;

        var swiper = new Swiper(".con3 .Swiper", {
            slidesPerView: 1,
            spaceBetween: 37,
            observer: true,  
            observeParents: true,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            breakpoints: {

              780: {
                slidesPerView: 2,  //브라우저가 780보다 클 때
                spaceBetween: 40,
              },
              1024: {
                slidesPerView: 3,  //브라우저가 1024보다 클 때
                spaceBetween: 50,
              },
            },
        });

        var swiper = new Swiper(".con5 .Swiper", {
            effect: "fade",
            fadeEffect: { 
            crossFade: true 
            },
            loop: true,
            observer: true,  
            observeParents: true,
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
        });
                
        </script>

</body>
</html>
