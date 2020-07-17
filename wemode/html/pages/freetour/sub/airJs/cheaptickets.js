jQuery(function($){
	//City
	$(".tab_wrap").tabs();


	// 달력 2013.10.15 
	// 출발
	$( "#start_date" ).datepicker({
		showOn : 'both',
		buttonImage : "http://img.modetour.co.kr/ModeLiveBooking/130913_air/ico/ic_black_calendar.gif",
		buttonImageOnly : true,
		buttonText : "달력",
		showOtherMonths: true,  //이전달과 다음달 보이기
      		selectOtherMonths: true, // 이전달, 다음달 선택 가능
		showAnim : "slideDown"
	}).keydown(function(event) {
		 //  LEFT: 37
	        	//    UP: 38
	        	// RIGHT: 39
	        	//  DOWN: 40
	        	//   TAB: 9

       		var keyCode = event.which;
        		if(keyCode != 9) {

			event.preventDefault();
		         event.stopPropagation();

		         var parts = $("#start_date").val();
		         if (parts == ""){ //Today 입력
		         	parts = new Date(); 
		         	parts = parts.getFullYear()+"/"+(parts.getMonth()+1)+"/"+parts.getDate();
		         }
			$("#start_date").val(parts);

			parts = $("#start_date").val().split("/");
			var currentDate = new Date(parts[0], parts[1]-1, parts[2]); // months are 0-based
			 
			switch(keyCode) {
			    case 37: // LEFT, -1 day
			        currentDate.setDate(currentDate.getDate() -1);
			        break;
			    case 38: // UP, -1 week
			        currentDate.setDate(currentDate.getDate() -7);
			        break;
			    case 39: // RIGHT, +1 day
			        currentDate.setDate(currentDate.getDate() +1);
			        break;
			    case 40: // DOWN, +1 week
			        currentDate.setDate(currentDate.getDate() +7);
			        break;
			}
			
			if(currentDate != null){
			    $("#start_date").datepicker("setDate", currentDate);
			}
		}
	});
	// 도착~
	$( "#arrive_date" ).datepicker({
		showOn : 'both',
		buttonImage : "http://img.modetour.co.kr/ModeLiveBooking/130913_air/ico/ic_black_calendar.gif",
		buttonImageOnly : true,
		buttonText : "달력",
		showOtherMonths: true,  //이전달과 다음달 보이기
      		selectOtherMonths: true, // 이전달, 다음달 선택 가능
		showAnim : "slideDown"
	}).keydown(function(event) {
		 //  LEFT: 37
	        	//    UP: 38
	        	// RIGHT: 39
	        	//  DOWN: 40
	        	//   TAB: 9

       		var keyCode = event.which;
        		if(keyCode != 9) {
        			event.preventDefault();
		         event.stopPropagation();

		         var parts = $("#arrive_date").val();
		         if (parts == ""){  //Today 입력
		         	parts = new Date(); 
		         	parts = parts.getFullYear()+"/"+(parts.getMonth()+1)+"/"+parts.getDate();
		         }
			$("#arrive_date").val(parts);

			parts = $("#arrive_date").val().split("/");
			var currentDate = new Date(parts[0], parts[1]-1, parts[2]); // months are 0-based
			 
			switch(keyCode) {
			    case 37: // LEFT, -1 day
			        currentDate.setDate(currentDate.getDate() -1);
			        break;
			    case 38: // UP, -1 week
			        currentDate.setDate(currentDate.getDate() -7);
			        break;
			    case 39: // RIGHT, +1 day
			        currentDate.setDate(currentDate.getDate() +1);
			        break;
			    case 40: // DOWN, +1 week
			        currentDate.setDate(currentDate.getDate() +7);
			        break;
			}
			
			if(currentDate != null){
			    $("#arrive_date").datepicker("setDate", currentDate);
			}
		}
	});
	//한국어
	$.datepicker.regional['ko'] = {
		closeText: '완료',
		prevText: '이전',
		nextText: '다음',
		currentText: '오늘',
		monthNames: ['1월','2월','3월','4월','5월','6월',
		'7월','8월','9월','10월','11월','12월'],
		monthNamesShort: ['1월','2월','3월','4월','5월','6월',
		'7월','8월','9월','10월','11월','12월'],
		dayNames: ['일요일','월요일','화요일','수요일','목요일','금요일','토요일'],
		dayNamesShort: ['일','월','화','수','목','금','토'],
		dayNamesMin: ['일','월','화','수','목','금','토'],
		weekHeader: '주',
		dateFormat: 'yy/mm/dd',
		firstDay: 0,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''
	};
	$.datepicker.setDefaults($.datepicker.regional['ko']);


	// 생년월일
	$(".booking_name li").hover(function(){
		$(this).find('.btn_delete').show();
	}, function(){
		$(this).find('.btn_delete').hide();
	});
	$(".btn_delete").click(function(){
		$(this).siblings('input').val('');
	});

	$("#person, .same_person, #agreement").buttonset(); 
	$(".booking_rule_tabs, .rule_sub_tabs").tabs();

});

