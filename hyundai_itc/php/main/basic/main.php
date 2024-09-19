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
        <div class="main">
            <div class="main-slide" data-aos="flip-down">          
                <div class="mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide1"></div>
                        <div class="swiper-slide slide1"></div>
                        <div class="swiper-slide slide1"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination pagination_bullet"></div>
                    <div class="swiper-pagination pagination_progress"></div>
                </div>
                <p data-aos="zoom-in" data-aos-duration="2800">Empowered<br />by Innovation.</p>
                <div class="control">
                    <!-- <button class="play">시작</button> -->
                    <button class="stop"><img src="../img/common/ico-stop.svg" alt=""></button>
                </div>  
                <div class="stop"><img src="../img/common/ico-stop.svg" alt=""></div>
            </div>
            <div class="con1" data-aos="fade-up" data-aos-duration="1000">
                <div class="layout">
                    <h2 data-aos="zoom-in">BUSINESS</h2>
                    <p data-aos="zoom-in">현대ITC는 고도의 기술력을 가지고<br />시대 변화에 발맞춰 지속적인 발전을<br />이루어 나가고 있습니다.</p>
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
                    <div class="img-area" data-aos="fade-right">
                        <span class="s-txt">SAFETY</span>
                        <img src="../img/main/con2-img.png" alt="">
                        <a href="">more &#43;</a>
                    </div>
                    <div class="txt-area txt-area2" data-aos="fade-left"  data-aos-duration="2000">
                        <p class="initial"><span class="top">S.</span><span>H.</span><span>E.</span></p>
                        <dl>
                            <dt>안전</dt>
                            <dd>안전이 회사 경영의 핵심가치임을 인식하고 경영층을 중심으로 안전소통 및 현장점검을 통해 안전경영을 실천하고 있습니다.</dd>
                        </dl>
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
            <div class="con4"  data-aos="fade-up" data-aos-duration="1000">
                <div class="layout" data-aos="fade-up" data-aos-duration="1300">
                    <h2 data-aos="fade-right">아름다운 세상을 위한<span>동행</span></h2>
                    <div class="card-list list01">
                        <div class="card-01">
                            <a href="">
                                <div class="item back"><i></i><span>윤리경영</span></div>
                                <div class="item front"><i></i><span>윤리경영</span></div> 
                                <span class="more">more &#43;</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-list list02">
                        <div class="card-02">
                            <a href="">
                                <div class="item back"><i></i><span>공정거래</span></div>
                                <div class="item front"><i></i><span>공정거래</span></div> 
                                <span class="more">more &#43;</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-list list03">
                        <div class="card-03">
                            <a href="">
                                <div class="item back"><i></i><span>사회공헌</span></div>
                                <div class="item front"><i></i><span>사회공헌</span></div> 
                                <span class="more">more &#43;</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-list list04">
                        <div class="card-04">
                            <a href="">
                                <div class="item back"><i></i><span>동반성장</span></div>
                                <div class="item front"><i></i><span>동반성장</span></div> 
                                <span class="more">more &#43;</span>
                            </a>
                        </div>
                    </div>
                    <!-- <ul>
                        <li class="list-01" data-aos="fade-right">
                            <div class="back"><i></i><span>윤리경영</span><a href="">more &#43;</a></div>
                            <div class="front"><i></i><span>윤리경영</span><a href="">more &#43;</a></div> 
                        </li>
                        <li class="list-02" data-aos="fade-right">
                            <div class="back"><i></i><span>인권경영</span><a href="">more &#43;</a></div>
                            <div class="front"><i></i><span>인권경영</span><a href="">more &#43;</a></div>
                        </li>
                        <li class="list-03" data-aos="fade-left">
                            <div class="back"><i></i><span>사회공헌</span><a href="">more &#43;</a></div>
                            <div class="front"><i></i><span>사회공헌</span><a href="">more &#43;</a></div>
                        </li>
                        <li class="list-04" data-aos="fade-left">
                            <div class="back"><i></i><span>동반성장</span><a href="">more &#43;</a></div>
                            <div class="front"><i></i><span>동반성장</span><a href="">more &#43;</a></div>
                        </li>
                    </ul> -->
                    <span class="s-txt">SUSTAINABILITY</span>
                </div>
            </div>
            <div class="con5">
                <div class="layout">
                    <h2 data-aos="fade-right">현대ITC,<br />새로운 가치를 창조하다.</h2>
                    <span class="s-txt" data-aos="fade-right">2021년 9월 출범한 현대ITC의 다양한 소식을 만나보세요.</span>
                    <ul>
                        <li class="ico-youtube" data-aos="zoom-out"><a href=""><span class="text_blind">유튜브</span></a></li>
                        <li class="ico-facebook" data-aos="zoom-out"><a href=""><span class="text_blind">페이스북</span></a></li>
                        <li class="ico-instagram" data-aos="zoom-out"><a href=""><span class="text_blind">인스타그램</span></a></li>
                    </ul>
                    <div class="Swiper ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="video-area" data-aos="zoom-in-right"><img src="../img/main/play.png" alt=""></div>
                                <div class="txt-area" data-aos="zoom-in-left">
                                    <p class="tit">2022 현대ITC 홍보영상</p>
                                    <p class="in">융합, 그것은 새로운 생각의 결합.<br />세상에 없는 것을 새롭게 창조하는 것이 아니라<br />세상에 있는 것을 결합해 새로운 가치를 만드는 것.<br /> 현대ITC는 무한한 융합의 노력을 통해<br />철, 그 이상의 가치를 창조합니다.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-area"><img src="../img/main/play.png" alt=""></div>
                                <div class="txt-area">
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
                    <a href="" data-aos="flip-right">채용관바로가기<i></i></a>
                </div>
            </div>
        </div>
        <!-- main -->