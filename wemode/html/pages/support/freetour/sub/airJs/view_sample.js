var $ = jQuery.noConflict();
$(function(){
	// Layer & calendar
	$(".btn_calendar").on('click', function(){
		$(".calendar_unit").show(); //달력 열기
		return false;
	});
	$(".calendar_unit .btn_layer_close").on('click', function() {
		$(".calendar_unit").hide(); //달력 숨기기
	});
	$(".btn_charge_standard").on('click', function(){
		$(".person_layer").show(); //요금기준 layer 열기
	});
	$(".person_layer .btn_person_close").on('click', function() {
		$(this).parents('.person_layer').hide(); //요금기준 layer 숨기기
	});
	// 탭 넘어갈때 달력, 요금기준 Layer 숨기기
	$("#short_flight_search ul.tabs_menu").on('click', 'a', function() {
		$("#short_flight_search").find(".calendar_unit, .person_layer").hide();
	});

	// 해외항공 왕복, 편도.
	$("#foreign_air dd.journey a").on('click', function(){
		$(this).addClass('active').siblings().removeClass('active');
	});

	//국내항공 왕복, 편도 눌렀을때
	$("#rotRt").on('click', function(){ //왕복
		$(this).addClass('active').siblings('a').removeClass('active');
		$("#domestic_return_date").removeAttr('disabled').removeClass('disabled').siblings('button').removeAttr('disabled').removeClass('disabled');;
		$(".calendar_unit").removeClass('oneway').addClass('shuttle').find('> .return').show(); //달력
	});
	$("#rotOw").on('click', function(){ //편도
		$(this).addClass('active').siblings('a').removeClass('active');
		$("#domestic_return_date").attr('disabled','disabled').addClass('disabled').siblings('button').attr('disabled','disabled').addClass('disabled');;
		$(".calendar_unit").removeClass('shuttle').addClass('oneway').find('> .return').hide(); //달력
	});

	$("#visual_screen ul").cycle({
		fx: 'fade',
		speed: 1000,
		timeout: 3500,
		delay: -1000,
		pager:  '#BookButton',
		pagerEvent: 'mouseover'
	});

	//자주 묻는 질문 best Tab Menu
	$('#latest_faq').on('click','.item_category a',function(){
		$(this).parents('.item_category').find('a').removeClass('active');
		$(this).addClass('active');

		$('#latest_faq .item_list').find('ul').hide();
		$('#latest_faq .item_list').find($(this).attr('href')).show();
		return false;
	});
});