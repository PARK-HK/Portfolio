<?php
$config = array(
	'skin' => 'basic',
	'brd_key' => element('brd_key', "news2"),
	'limit' => 5,
	'length' => 40,
	'is_gallery' => '',
	'image_width' => '',
	'image_height' => '',
	'cache_minute' => 1,
);
$sch = $this->board->latest_data($config);

?>
<!-- main -->
        <div class="main fix-img">
            <div class="main-slide"> 
                <div class="dim"></div>         
                <div class="box"></div>
                <div class="mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide1"><div class="in"></div></div>
                        <div class="swiper-slide slide2"><div class="in"></div></div>
                        <div class="swiper-slide slide3"><div class="in"></div></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination pagination_bullet"></div>
                    <div class="swiper-pagination pagination_progress"></div>
                </div>
                <p data-aos="zoom-in" data-aos-duration="2800">Empowered<br />by Innovation.</p>
                <div class="control">
                    <button class="stop on"><img src="../img/common/ico-stop.svg" alt="슬라이드 멈춤"></button>
                    <button class="play"><img src="../img/common/ico-play.svg" alt="슬라이드 재생"></button>
                </div>  
            </div>
            <div class="con1" data-aos="fade-up" data-aos-duration="1000">
                <div class="layout">
                    <h2 data-aos="fade-right">BUSINESS</h2>
                    <p data-aos="fade-right">현대ITC는 고도의 기술력을 가지고<br />시대 변화에 발맞춰 지속적인 발전을<br />이루어 나가고 있습니다.</p>
                    <span class="img-txt">AUTOMATIVE PART</span>
                    <div class="con1_slide_area">
                        <div class="con1_slider">
                            <ul class="slider01">
                                <li class="active">
                                    <img src="../img/main/con1-slide1.png" alt="">
                                    <a href="" class="btn-more">more &#43;</a>
                                </li>
                                <li>
                                    <img src="../img/main/con1-slide1.png" alt="">
                                    <a href="" class="btn-more">more &#43;</a>
                                </li>
                            </ul>
                            <ul class="slider02">
                                <li>
                                    <img src="../img/main/con1-slide1.png" alt="">
                                    <a href="" class="btn-more">more &#43;</a>
                                </li>
                                <li>
                                    <img src="../img/main/con1-slide1.png" alt="">
                                    <a href="" class="btn-more">more &#43;</a>
                                </li>
                            </ul>
                            <ul class="slider03">
                                <li>
                                    <dl>
                                        <dt>기계정비</dt>
                                        <dd>TWB(Tailor Welded Blanks), 하이드로포밍(Hydroforming),<br />핫스탬핑(Hot Stamping)등의 공법을 적용한 자동차 부품 소재 개발</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>기계정비</dt>
                                        <dd>TWB(Tailor Welded Blanks), 하이드로포밍(Hydroforming),<br />핫스탬핑(Hot Stamping)등의 공법을 적용한 자동차 부품 소재 개발</dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                        <div class="slider_nav">
                            <a class="slider_prev">prev</a>
                            <a class="slider_next">next</a>
                        </div>
                        <div class="page-no">
                            <span class="current-slide-no"></span>
                            <span class="slash">/</span>
                            <span class="total-slide-no"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="con2">
                <div class="layout"> 
                    <div class="txt-area" data-aos="fade-left" data-aos-duration="1000">
                        <h2>S.H.E MANAGEMENT</h2>
                        <p class="big-txt">현대ITC는 안전하고 쾌적한<br />근무환경 조성과 지역사회 환경을 고려한<span>안전보건경영을 추진합니다.</span></p>
                    </div>
                    <div class="Swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="img-area" data-aos="fade-right">
                                    <span class="s-txt">SAFETY</span>
                                    <img src="../img/main/con2-img1.png" alt="">
                                </div>
                                <div class="txt-area txt-area2" data-aos="fade-left"  data-aos-duration="2000">
                                    <dl>
                                        <dt>안전</dt>
                                        <dd>안전이 회사 경영의 핵심가치임을 인식하고 경영층을 중심으로 안전소통 및 현장점검을 통해 안전경영을 실천하고 있습니다.</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-area" data-aos="fade-right">
                                    <span class="s-txt">HEALTH</span>
                                    <img src="../img/main/con2-img2.png" alt="">
                                </div>
                                <div class="txt-area txt-area2" data-aos="fade-left"  data-aos-duration="2000">
                                    
                                    <dl>
                                        <dt>보건</dt>
                                        <dd>현대ITC는 작업환경관리, 화학물질 관리 등을 통해 직원들이 안전하고 건강하게 일할 수 있는 쾌적한 근무 환경 조성에 최선의 노력을 다하고 있습니다.</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="img-area" data-aos="fade-right">
                                    <span class="s-txt s-txt3">ENVIROMENT</span>
                                    <img src="../img/main/con2-img3.png" alt="">
                                </div>
                                <div class="txt-area txt-area2" data-aos="fade-left"  data-aos-duration="2000">
                                    
                                    <dl>
                                        <dt>환경</dt>
                                        <dd>현대ITC는 지역사회의 환경영향까지 고려한 방침을 세워 실천하고 있습니다.</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination" data-aos="fade-left"></div>
                    </div>
                </div>
            </div>
            <div class="con3">
                <div class="layout">
                    <h2 data-aos="fade-right">NEWS</h2>
                    <a href="/ITC/News2" class="btn-more">VIEW MORE &#43;</a>
                    <div class="Swiper" data-aos="fade-up">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="<?php echo $sch['view']['latest'][0]['url']?>">
                                    <span class="s-txt"></span>
                                    <p class="big-txt"><?php echo $sch['view']['latest'][0]['post_title']?></p>
                                    <p class="big-in"><?php echo cut_str(strip_tags($sch['view']['latest'][0]['post_content']),120,"...")?></p>
                                    <span class="date"><?php echo substr($sch['view']['latest'][0]['post_datetime'],0,10)?></span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo $sch['view']['latest'][1]['url']?>">
                                    <span class="s-txt"></span>
                                    <p class="big-txt"><?php echo $sch['view']['latest'][1]['post_title']?></p>
                                    <p class="big-in"><?php echo cut_str(strip_tags($sch['view']['latest'][1]['post_content']),120,"...")?></p>
                                    <span class="date"><?php echo substr($sch['view']['latest'][1]['post_datetime'],0,10)?></span>
                                </a>
                            </div>
							<div class="swiper-slide">
                                <a href="<?php echo $sch['view']['latest'][2]['url']?>">
                                    <span class="s-txt"></span>
                                    <p class="big-txt"><?php echo $sch['view']['latest'][2]['post_title']?></p>
                                    <p class="big-in"><?php echo cut_str(strip_tags($sch['view']['latest'][2]['post_content']),120,"...")?></p>
                                    <span class="date"><?php echo substr($sch['view']['latest'][2]['post_datetime'],0,10)?></span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="con4" data-aos="fade-up" data-aos-duration="1000">
                <div class="layout">
                    <h2 data-aos="fade-right">아름다운 세상을 위한<span>동행</span></h2>
                    <div class="card-list list01">
                        <div class="card-01">
                            <a href="/sub/s06_2_1">
                                <div class="item back"><i></i><span>윤리경영</span></div>
                                <div class="item front"><i></i><span>윤리경영</span></div> 
                                <span class="more">more &#43;</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-list list02">
                        <div class="card-02">
                            <a href="/sub/s06_2_2">
                                <div class="item back"><i></i><span>공정거래</span></div>
                                <div class="item front"><i></i><span>공정거래</span></div> 
                                <span class="more">more &#43;</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-list list03">
                        <div class="card-03">
                            <a href="/sub/s06_1_1">
                                <div class="item back"><i></i><span>사회공헌</span></div>
                                <div class="item front"><i></i><span>사회공헌</span></div> 
                                <span class="more">more &#43;</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-list list04">
                        <div class="card-04">
                            <a href="/sub/s06_3_1">
                                <div class="item back"><i></i><span>동반성장</span></div>
                                <div class="item front"><i></i><span>동반성장</span></div> 
                                <span class="more">more &#43;</span>
                            </a>
                        </div>
                    </div>
                    <span class="s-txt">SUSTAINABILITY</span>
                </div>
            </div>
            <div class="con5">
                <div class="layout">
                    <h2 data-aos="fade-right">현대ITC,<br />새로운 가치를 창조하다.</h2>
                    <span class="s-txt" data-aos="fade-right">2021년 9월 출범한 현대ITC의 다양한 소식을 만나보세요.</span>
                    <!-- <ul>
                        <li class="ico-youtube" data-aos="zoom-out"><a href=""><span class="text_blind">유튜브</span></a></li>
                        <li class="ico-facebook" data-aos="zoom-out"><a href=""><span class="text_blind">페이스북</span></a></li>
                        <li class="ico-instagram" data-aos="zoom-out"><a href=""><span class="text_blind">인스타그램</span></a></li>
                    </ul> -->
                    <div class="Swiper ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="video-area" data-aos="zoom-in-right"><img src="../img/main/play.png" alt=""></div>
                                <div class="txt-area" data-aos="zoom-in-left">
                                    <p class="tit">2022 현대ITC 홍보영상</p>
                                    <p class="in">융합, 그것은 새로운 생각의 결합.<br />세상에 없는 것을 새롭게 창조하는 것이 아니라<br />세상에 있는 것을 결합해 새로운 가치를 만드는 것.<br /> 현대ITC는 무한한 융합의 노력을 통해<br />철, 그 이상의 가치를 창조합니다.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div class="big-txt">YOUTUBE</div>
                </div>
            </div>
            <div class="recruit">
                <div class="layout">
                    <h2 data-aos="fade-right">RECRUIT</h2>
                    <p data-aos="fade-right">현대ITC에서<br />함께 성장할 인재를 기다립니다.</p>
                    <a href="/sub/s03_1_1" data-aos="flip-right">채용관바로가기<i></i></a>
                </div>
            </div>
        </div>
        <!-- main -->

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
    
    setTimeout(function(){ $('.main .dim').fadeOut(5000); }, 3000);
    TweenLite.to($('.main .dim'), 1.2, {opacity:0, ease:Expo.easeInOut});     
    
    var galleryTop = new Swiper('.main-slide .mySwiper', {
        autoplay: {
           delay: 5000,
           disableOnInteraction: false,
         },
        pagination: { 
            el: ".pagination_bullet",
            clickable: true,    
            type : 'fraction',  
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

        $(".main-slide .stop").click(function(){
            galleryTop.autoplay.stop();
            $(this).removeClass('on').next().addClass('on');
        });

        $(".main-slide .play").click(function(){
            galleryTop.autoplay.start();
            $(this).removeClass('on').prev().addClass('on');
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

        // var swiper = new Swiper(".con5 .Swiper", {
        //     effect: "fade",
        //     fadeEffect: { 
        //     crossFade: true 
        //     },
        //     loop: true,
        //     observer: true,  
        //     observeParents: true,
        //     navigation: {
        //       nextEl: ".swiper-button-next",
        //       prevEl: ".swiper-button-prev",
        //     },
        // });
        var swiper2 = new Swiper(".con2 .Swiper", {
            effect: "fade",
            fadeEffect: { 
            crossFade: true 
            },
            // autoplay: {
            //    delay: 2500,
            //    disableOnInteraction: false,
            //  },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            loop: true,
            observer: true,  
            observeParents: true,
        });

        $(window).scroll(function () {
            var height = $(document).scrollTop();
            var oftop = $('.con2').offset().top-200;
            con2scroll();
                function con2scroll(){
                    if(height>oftop){
                        swiper2.autoplay.start(1000);
                    }
                }            
            }); 
        </script>