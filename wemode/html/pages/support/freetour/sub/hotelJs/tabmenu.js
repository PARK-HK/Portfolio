// Tab Menu
function init_tabs () {
	$(".tabs_content").css('display','none');
	if(!$(".tabs_menu").length) { return; }
	$("div.tabs_content_wrap").each(function(){
		$(this).find("div.tabs_content:first").show();
	});
	$("ul.tabs_menu").on('click','a', function(){
		if(!$(this).hasClass('current')){
			$(this).addClass('current').parent('li').siblings('li').find('a.current').removeClass('current');
			$($(this).attr('href')).show().siblings('div.tabs_content').hide();
		}
		this.blur();
		return false;
	});
}
var $ = jQuery.noConflict();
$(document).ready(function() {
	init_tabs();
});