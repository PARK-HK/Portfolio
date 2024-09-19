<!--내용시작 -->
        <div class="sub sub03-1">
            <div class="sub-top" data-aos="fade-down">
                <h2 data-aos="zoom-in">채용가이드</h2>
                <ul data-aos="zoom-in">
                    <li><a href="">H</a></li>
                    <li><a href="">인재채용</a></li>
                    <li><a href="">채용가이드</a></li>
                </ul>
            </div>
            <div class="sub-content" data-aos="fade-up">
                <div class="nav">
                    <ul>
                        <li><a href="/sub/s03_1_1">채용전형</a></li>
                        <li class="on"><a href="javascript:;">업무소개</a></li>
                    </ul>
                </div>
                <div class="layout">
                    <div class="tab-btn">
                        <a href="" class="tab">제강/연주</a>
                        <ul class="work-list">
                            <li><a href="/sub/s03_1_2_1">제선</a></li>
                            <li class="on"><a href="javascript:;">제강/연주</a></li>
                            <li><a href="/sub/s03_1_2_3">열연후판/냉연생산</a></li>
                            <li><a href="/sub/s03_1_2_4">정비</a></li>
                            <li><a href="/sub/s03_1_2_5">생산지원</a></li>
                            <li><a href="/sub/s03_1_2_6">사업지원</a></li>
                            <li><a href="/sub/s03_1_2_7">경영지원</a></li>
                            <li><a href="/sub/s03_1_2_8">안전</a></li>
                        </ul>
                    </div>
                    <div class="work-infor">
                        <table>
                            <colgroup>
                                <col width="30%" />
                                <col width="70%" />
                            </colgroup>
                            <thead>
                                <tr>
                                    <th colspan="2" scope="col">제강</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>직무소개</th>
                                    <td>쇳물(용선)의 원료인 석탄과 철광석 등을 수급·배합하고 관련 설비와 장비들을 관리하는 업무</td>
                                </tr>
                                <tr>
                                    <th>전공분야</th>
                                    <td>
                                        <ul>
                                            <li>- 금속/재료</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <colgroup>
                                <col width="30%" />
                                <col width="70%" />
                            </colgroup>
                            <thead>
                                <tr>
                                    <th colspan="2" scope="col">연주</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>직무소개</th>
                                    <td>제강공장에서 생산된 용강을 연속주조하여 슬래브(Slab), 블룸(Bloom), 빌릿(Billet) 등의 반제품을 생산하는 업무</td>
                                </tr>
                                <tr>
                                    <th>전공분야</th>
                                    <td>
                                        <ul>
                                            <li>- 금속/재료</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- 내용끝 -->
		<script>  
            function slideToggle(){
                var t = $(this);
                if(!t.next().hasClass('on')){
                    t.next().addClass('on');
                }else{
                    t.next().removeClass('on');
                }
                return false;
            }
            $('.tab-btn>a').click(slideToggle);
        </script>