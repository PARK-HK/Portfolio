var preferAirline  = function(){
	var cnt = 0;
	jQuery('#preferAir input[name=preferAirline]').removeAttr('checked');
	jQuery('#preferAir input[name=preferAirline]').on('click', function(){
		if (jQuery(this).attr('checked')) {
			jQuery(this).attr('checked', 'checked');
			cnt++;
		}else{
			jQuery(this).removeAttr('checked');
			cnt--;
		}
		if(cnt>5){alert('선호 항공사는 5개 까지만 선택 하실 수 있습니다.'); cnt--; return false};
	});
	jQuery('#preferAirline').on('click', '.btn_confirm', function(){
		if(cnt==0){alert('선호 항공사를 선택 해주세요.'); return false};
		var choice = [];
		jQuery('input[name=preferAirline]:checked').each(function(){choice.push(jQuery(this).val());});
		jQuery('#preferAirList ul').find('li').removeAttr('class').find('.airline').empty();
		for(var i=0; i<cnt; i++){
			jQuery('#preferAirList ul').find('li').eq(i).addClass('active').find('.airline').text(choice[i]);
		}
		jQuery(this).closest('.prefer_airline_wrap').slideUp(130);
		jQuery('#preferAir').find('.btn_prefer_airline').focus();
	}).on('click', '.btn_unchecked', function(){jQuery('input[name=preferAirline]').removeAttr('checked'); cnt=0;});
	jQuery('#preferAirList').on('click', '.btn_del', function(){
	 	var txt = jQuery(this).prev().text();
	 	jQuery(this).prev().empty();
	 	jQuery('input[name=preferAirline]').each(function(){
	 		if(txt == jQuery(this).val()){
	 			jQuery(this).removeAttr('checked');
	 		}
	 	});
	 	jQuery(this).closest('li').removeAttr('class');
	 	jQuery('#preferAir').find('.btn_prefer_airline').focus();
	 	cnt--;
	 });
};

jQuery(document).ready(function(){
	preferAirline();
	jQuery('#preferAir').on('click', '.btn_prefer_airline', function(e){
		jQuery(jQuery(this).attr('href')).slideDown(200);
		e.preventDefault();
	}).on('click', '.btn_preferairline_close', function(){
		jQuery(this).closest('.prefer_airline_wrap').slideUp(130);
		jQuery('#preferAir').find('.btn_prefer_airline').focus();
	});
});