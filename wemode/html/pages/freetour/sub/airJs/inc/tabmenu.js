var $ = jQuery.noConflict();
function init_tabs () {
	$(".tab_content").css('display','none');
	if(!$(".tabs_menu").length) { return; }
	$("div.tabs_contents_wrap").each(function(){
		$(this).find(".tab_content:first").show();
	});
	$("ul.tabs_menu").on('click','a', function(){
		if(!$(this).hasClass('current')){
			$(this).addClass('current').parent('li').siblings('li').find('a.current').removeClass('current');
			$($(this).attr('href')).show().siblings('.tab_content').hide();
		}
		this.blur();
    			return false;
	});
}