jQuery(document).ready(function () {
	//탭메뉴 공통
       	 init_tabs();

        	//main visual
 	jQuery("#visualMainScreen").cycle({
		fx: 'fade',
		activePagerClass: 'selected',
           	speed: 500,
           	timeout: 3000,
           	// 2014.01.03 수정되었습니다.
           	pager: '.main_pager ul',
           	slideExpr: '.roll_list li',
           	pause: 1,
           	pauseOnPagerHover: 1,
           	// 2014.01.03 추가 되었습니다.
           	pagerAnchorBuilder: function(idx, slide) {
        		return '.main_pager ul li:eq(' + idx + ') a';
		}
        });
        jQuery('#visualMainScreen .controller').on('click', '> a', function () {
            if (jQuery(this).hasClass('play')) {
                jQuery(this).attr('class', 'stop');
                jQuery(this).find('span').html('배너 자동재생 일시정지');
                jQuery('#visualMainScreen').cycle('pause');
            } else {
                jQuery(this).attr('class', 'play');
                jQuery(this).find('span').html('배너 자동재생');
                jQuery('#visualMainScreen').cycle('resume');
            }
            return false;
        });

        jQuery("#ad_spot_229x88").jCarouselLite({
            speed: 500,
            btnNext: ".pager .next",
            btnPrev: ".pager .prev",
            visible: 3,
            scroll: 1,
            start: 0,
            over: true
        });
        jQuery('#ad_spot_229x88').on({
            mouseenter: function () {
                jQuery(this).find('.pager').show();
            },
            mouseleave: function () {
                jQuery(this).find('.pager').hide();
            }
        });
        /* S:2014.05.28 추가 */
	// 탭 넘어갈때 요금상세정보 레이어 팝업 비활성화 시키기
	jQuery("#air_sale_ticket ul.tabs_menu:first").on('click', ' a', function(){
		jQuery(jQuery(this).attr('href')).find('td.charge_total .layer_popup').hide();
	});
	// 요금상세정보 Layer 열기
	jQuery("#air_sale_ticket .btn_charge_detail").on('click', function(event){
		jQuery("#air_sale_ticket").addClass('activate');
		jQuery(this).closest('tr').addClass('select').siblings('tr').removeAttr('class').find('.layer_popup').hide();
		jQuery(this).next('.layer_popup').show();
		event.preventDefault();
	});
	// 요금상세정보 Layer 닫기
	jQuery("#air_sale_ticket .btn_lay_close").on('click', function(event){
		jQuery(this).closest('.layer_popup').hide();
		jQuery(this).closest('tr').removeAttr('class');
		jQuery("#air_sale_ticket").removeClass('activate');
		event.preventDefault();
	});
	/* E:2014.05.28 추가 */

	/* S: 2014.06.18 추가*/
	jQuery("#OpenType").on('click', function(){
		if (jQuery(this).attr('checked') == 'checked') {
			jQuery("#length_stay").siblings('input, button').hide();
			jQuery("#length_stay").show();
		} else {
			jQuery("#length_stay").hide();
			jQuery("#length_stay").siblings('input, button').show();
		}
	});
	/* E: 2014.06.18 추가*/
	jQuery("#layer_ticket_card").on('click', function(){
		var jQuerylayerPopupObj = jQuery(jQuery(this).attr('href'));
		var left = ( jQuery(window).scrollLeft() + (jQuery(window).width() - jQuerylayerPopupObj.width()) / 2 );
		var top = ( jQuery(window).scrollTop() + (jQuery(window).height() - jQuerylayerPopupObj.height()) / 2 );
		jQuerylayerPopupObj.css({'left':left,'top':top});
		jQuerylayerPopupObj.show();
		return false;
	});
	jQuery("#ticket_card_payment").on('click', '.close_layer', function(){
		jQuery(jQuery(this).attr('href')).hide();
	});
});