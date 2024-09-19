<!--내용시작 -->
        <div class="sub sub06-3">
            <div class="sub-top" data-aos="fade-down">
                <h2 data-aos="zoom-in">동반성장</h2>
                <ul data-aos="zoom-in">
                    <li><a href="/main">H</a></li>
                    <li>CSR</li>
                    <li>동반성장</li>
                </ul>
            </div>
            <div class="sub-content" data-aos="fade-up">
                <div class="nav">
                    <ul>
                        <li class="on"><a href="javascript:;">동반성장 소개</a></li>
                        <li><a href="/sub/s06_3_2">비전 및 핵심가치</a></li>
                    </ul>
                </div>
                <div class="layout">
                    <div class="Swiper ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                               <div class="txt-area">
                                    <div class="big">
                                        Win-Win<br />
                                        GROWTH     
                                    </div>
                                    <div class="img-area">
                                        <img src="/img/sub06/sub06-3-slide1.png" alt="">
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                   <div class="infor">
                                       <span class="tit">현대아이티씨<br />동반성장 추진 정책</span>
                                       <p>
                                       기업은 서로 협력하고 소통하며 지원할 때 더 큰 가치를 창출할 수 있습니다.<br /> 현대아이티씨는 협력사와의 파트너십 구축이 동반성장의 핵심이라고 생각하고 자금, 기술, 경영 등을 지원해 협력사의 경쟁력을 강화하고 있습니다. 현대아이티씨는 협력사와 공존ㆍ공영할 수 있는 유기적인 파트너십을 구축하고 협력사의 성장과 경쟁력 강화를 위한 상생경영을 지속할 것입니다.</p>
                                   </div>
                               </div>
                               
                            </div>
                            <div class="swiper-slide">
                                <div class="txt-area">
                                    <div class="big">
                                        PARTNER<br />
                                        SHIP   
                                    </div>
                                    <div class="img-area">
                                        <img src="/img/sub06/sub06-3-slide2.png" alt="">
                                        <div class="swiper-button-next"></div>
                                         <div class="swiper-button-prev"></div>
                                    </div>
                                   <div class="infor">
                                       <span class="tit">파트너쉽,<br />성장의 원동력</span>
                                       <p>
                                       현대아이티씨는 협력사와의 파트너십 구축이 동반성장의 핵심이라고 생각합니다.<br />협력사와의 파트너십을 통해 서로 협력하고 소통할 때 더 큰 가치를 창출할 수 있다는 철학을 바탕으로 협력사, 고객사 임직원과의 파트너십 구축을 위해 다양한 교류활동과 지원프로그램을 운영하고 있습니다.</p>
                                   </div>
                               </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="txt-area">
                                    <div class="big">
                                        SUPPORT<br />
                                        PROGRAMS  
                                    </div>
                                    <div class="img-area">
                                        <img src="/img/sub06/sub06-3-slide3.png" alt="">
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                    <div class="infor">
                                       <span class="tit">협력사 지원프로그램을 통해<br />장기적 상생 모색</span>
                                       <p>
                                       현대아이티씨는 협력사와의 상생협력을 위해 재무건전화, 결제조건 개선, 공동기술개발, 역량 제고 등 다양한 지원 프로그램을 운영하고 있습니다.<br /> 사내에 동반성장 지원체계를 구축하고, 하도급 4대 실천사항을 도입하고 준수해 상생협력을 위한 기본 토대를 갖추고 있습니다. 또한 자금지원, 대금지급조건 및 결제기일 개선, 기술지원, 교육훈련지원, 인력지원, 협력사 채용지원 등 다양한 분야에 대해 체계적인 프로그램을 운영하고 있으며, 협력사와의 소통을 위해 정기적으로 간담회를 개최하고 있습니다.</p>
                                   </div>
                               </div>
                            </div>
                        </div>
                        <div class="swiper-pagination pagination_bullet"></div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- 내용끝 -->
		<script>  
            var swiper = new Swiper(".sub06-3 .Swiper", {
                effect: "fade",
                loop: true,
                loopedSlides: 1,
                fadeEffect: { 
                crossFade: true 
                },
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
                        return '<span class="' + currentClass + '"></span><span>/</span>' +
                               '<span class="' + totalClass + '"></span>';
                    }
                },
                observer: true,  
                observeParents: true,
                navigation: {
                  nextEl: ".swiper-button-next",
                  prevEl: ".swiper-button-prev",
                },
            });

            var Top = $('.img-area').height();
            var wd = $(window).width();
                if(wd < 1024){
                    $('.sub06-3 .swiper-pagination').css('top',Top+130);
                }else{
                    $('.sub06-3 .swiper-pagination').removeAttr('style')
                }

            $(window).resize(function(){
                var Top = $('.img-area').height();
                var wd = $(window).width();
                if(wd < 1024){
                    $('.sub06-3 .swiper-pagination').css('top',Top+130);
                }else{
                    $('.sub06-3 .swiper-pagination').removeAttr('style')
                }
            }); 
        </script>