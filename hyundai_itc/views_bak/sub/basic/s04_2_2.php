<script type="text/javascript" src="/js/apexcharts.js"></script>
<!--내용시작 -->
        <div class="sub sub04-2 sub04-2-2">
            <div class="sub-top" data-aos="fade-down">
                <h2 data-aos="zoom-in">재무정보</h2>
                <ul data-aos="zoom-in">
                    <li><a href="/main">H</a></li>
                    <li>투자정보</li>
                    <li>재무정보</li>
                </ul>
            </div>
            <div class="sub-content" data-aos="fade-up">
                <div class="nav">
                    <!--<ul>
                        <li><a href="/sub/s04_2_1">요약재무제표</a></li>
                        <li class="on"><a href="javascript:;">신용등급</a></li>
                    </ul>-->
                </div>
                <div class="layout">
                    <h3>국내<span class="s-txt">- 회사채 신용등급</span></h3>
                    <div class="chart-wrap mt0">
                        <h4>한국기업평가</h4>
                        <div id="chart1"></div>
                    </div>
                    <div class="chart-wrap">
                        <h4>한국신용평가</h4>
                        <div id="chart2"></div>
                    </div>
                    <div class="chart-wrap">
                        <h4>NICE 신용평가</h4>
                        <div id="chart3"></div>
                    </div>

                </div>
            </div>
        </div>
        <!-- 내용끝 -->
<script>  

            //한국기업평가
            var options = {
              series: [{
              data: [34, 44, 54, 21, 12, 43, 33]
            }],
              chart: {
              type: 'line',
              height: 350,
              toolbar: {
                        show: false
                      }
            },
            colors: ['#002D72'],
            stroke: {
              curve: 'stepline',
            },
            dataLabels: {
              enabled: false
            },
            markers: {
                size: 5,
              hover: {
                sizeOffset: 4
              }
            },
            xaxis: {
                  categories: ['2008', '2009', '2010', '2013', '2015', '2017', '2021'],
                },

            };
            var chart = new ApexCharts(document.querySelector("#chart1"), options);
            chart.render();

            //한국신용평가
            var options = {
              series: [{
              data: [34, 44, 54, 21, 12, 43, 33]
            }],
              chart: {
              type: 'line',
              height: 350,
              toolbar: {
                        show: false
                      }
            },
            colors: ['#002D72'],
            stroke: {
              curve: 'stepline',
            },
            dataLabels: {
              enabled: false
            },
            markers: {
                size: 5,
              hover: {
                sizeOffset: 4
              }
            },
            xaxis: {
                  categories: ['2008', '2009', '2010', '2013', '2015', '2017', '2021'],
                },

            };
            var chart = new ApexCharts(document.querySelector("#chart2"), options);
            chart.render();

            //NICE 신용평가
            var options = {
              series: [{
              data: [34, 44, 54, 21, 12, 43, 33]
            }],
              chart: {
              type: 'line',
              height: 350,
              toolbar: {
                        show: false
                      }
            },
            colors: ['#002D72'],
            stroke: {
              curve: 'stepline',
            },
            dataLabels: {
              enabled: false
            },
            markers: {
                size: 5,
              hover: {
                sizeOffset: 4
              }
            },
            xaxis: {
                  categories: ['2008', '2009', '2010', '2013', '2015', '2017', '2021'],
                },

            };
            var chart = new ApexCharts(document.querySelector("#chart3"), options);
            chart.render();
        </script>