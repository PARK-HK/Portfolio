<!--내용시작 -->
        <div class="sub sub03-1">
            <div class="sub-top" data-aos="fade-down">
                <h2 data-aos="zoom-in">채용가이드</h2>
                <ul data-aos="zoom-in">
                    <li><a href="/main">H</a></li>
                    <li>인재채용</li>
                    <li>채용가이드</li>
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
                        <a href="" class="tab">생산지원</a>
                        <ul class="work-list">
                            <li><a href="/sub/s03_1_2_1">제선</a></li>
                            <li><a href="/sub/s03_1_2_2">제강/연주</a></li>
                            <li><a href="/sub/s03_1_2_3">열연후판/냉연생산</a></li>
                            <li><a href="/sub/s03_1_2_4">정비</a></li>
                            <li class="on"><a href="javascript:;">생산지원</a></li>
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
                                    <th colspan="2" scope="col">제품출하</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>직무소개</th>
                                    <td>완성된 제품의 검수 및 출하 업무</td>
                                </tr>
                                <tr>
                                    <th>관련 자격증</th>
                                    <td>
                                        <ul>
                                            <li>- 천장크레인, 지게차 등 설비운전 관련 자격증</li>
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
                                    <th colspan="2" scope="col">시험연구</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>직무소개</th>
                                    <td>제철 내 환경 설비 점검 및 지원</td>
                                </tr>
                                <tr>
                                    <th>관련 자격증</th>
                                    <td>
                                        <ul>
                                            <li>- 화학 관련 자격증</li>
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
                                    <th colspan="2" scope="col">환경</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>직무소개</th>
                                    <td>열연, 후판, 특수강, 냉연 제품의 시험연구 지원</td>
                                </tr>
                                <tr>
                                    <th>관련 자격증</th>
                                    <td>
                                        <ul>
                                            <li>- 전기 관련 자격증</li>
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
                                    <th colspan="2" scope="col">철도정비</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>직무소개</th>
                                    <td>철도 설비의 점검 및 정비 작업</td>
                                </tr>
                                <tr>
                                    <th>관련 자격증</th>
                                    <td>
                                        <ul>
                                            <li>- 기계/전기/철도 관련 자격증</li>
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