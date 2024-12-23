function initSlick(selector, slidesToShow, slidesToScroll, isArrow){
    $(selector).slick({
        infinite: false,
        slidesToShow: slidesToShow,
        slidesToScroll: slidesToScroll,
        dots: true,
        arrows: isArrow,
        nextArrow: '<button class="slick-next slick-arrow" aria-label="�ㅼ쓬" type="button">�ㅼ쓬</button>',
        prevArrow: '<button class="slick-prev slick-arrow" aria-label="�댁쟾" type="button">�댁쟾</button>',
        variableWidth: true,
        customPaging: function(slider, i) {
            return $('<button type="button" />').attr('title', (i + 1) + " �섏씠吏�濡� �대룞").text(i + 1);
        },
        responsive: [
            {
                breakpoint: 1360,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '20px',
                    slidesToShow: 1,
                    slidesToScroll: 1

                }
            }
        ]
    });
    $(selector).find('.slick-dots').find('button').attr("tabindex", -1);
    
}

function destorySlick(selector){
    $(selector).slick('unslick');
}
function closePopup(){
    $.magnificPopup.close();
}
function setCookie(name, value, expiredays) {
    var today = new Date();
    today.setDate(today.getDate() + expiredays);
    document.cookie = name + '=' + escape(value) + '; path=/; expires=' + today.toGMTString() + ';'
}
function closePopupToday() {        
    setCookie('main_popup', 'none', 1);
    closePopup();
}
function changeVideoPoster(){
	var posterURL = "/resources/img/renewal_images/" + getColorTheme() + "/bg_main.jpg";
    $('.animation-container > video').attr("poster", posterURL);
    $('.animation-container > video').find('img').attr('src', posterURL);
}
function checkWindowRatio(){
    var windowWidth = $(window).innerWidth();
    var windowHeight = $(window).innerHeight();
    
    var windowRatio =  windowWidth / windowHeight;

    if (windowRatio > 12.5 / 9) {
        return "16:9";
    } else if (windowRatio < 9 / 12.5) {
        return "9:16";
    } else {
        return "1:1";
    }
}
function showPopupZone(){
    var mainPopName = "main_popup";
    if (getCookie(mainPopName) != "none") { 
        // console.log($('.fp-section.active').data('anchor'));
        if ($('.fp-section.active').data('anchor') == "display") {
            $('#popup_link').magnificPopup('open');
        }
    }
}

$(function(){     
    var focusableElementsString = 'a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), iframe, object, embed, [tabindex="0"], [contenteditable]';
    var beforeSectionIndex = undefined;
    
   // if($(window).width() < 768) {
   // 	$('#container').removeAttr('id');
   // }
    

    $('#container').fullpage({
        anchors: ["display", "news", "about", "career"],
        'verticalCentered': false,
        'css3': false,
        keyboardScrolling: true,
        responsiveWidth: 768,
        responsiveHeight: 820,
        'afterLoad': function(anchor, sectionIndex) {
        	$('#'+anchor+"_header").focus();
            /*if (!isNaN(beforeSectionIndex)) {
            	if (sectionIndex != 5 && beforeSectionIndex != 1) {
            		if(sectionIndex < beforeSectionIndex) {
                        $(this).find(focusableElementsString).last().focus();
                    } else {
                        $(this).find(focusableElementsString).first().focus();
                    }	
            	}
            }*/
        },
        'onLeave': function(index, nextIndex, direction){
            beforeSectionIndex = index;
            
            $('.fp-section.active').addClass('loaded');
            
            if( nextIndex == 2 || nextIndex == 3 || nextIndex == 4 || nextIndex == 5){
                $('#lnb').addClass('black');
            } else {
                $('#lnb').removeClass('black');
            }
            if (nextIndex == 5 && beforeSectionIndex != 1) {
                $('.main-floating').addClass('arrived-footer');
                $('#main_top_btn').css({
                    "display": "block",
                    "position": "fixed",
                    "bottom": "3%",
                });
            } else {
                $('.main-floating').removeClass('arrived-footer');
                $('#main_top_btn').css({
                    "display": "none"
                });
            }
        }
    });
    
    if ($('#popup_link').length > 0) {
        $('#popup_link').magnificPopup({
            type: 'inline',
            preloader: false,
            fixedContentPos: "auto",
            showCloseBtn: false,
            modal: true,
            callbacks: {
                beforeOpen: function() {
                    $.fn.fullpage.setAllowScrolling(false);                    			  
                },
                open: function() {
                    $('html, body').addClass('noscroll');
                    initSlick('#popup_content', 3, 1, true);
                    // $('#popup_title').focus();

                    $('.skip-navigation').hide();
                },
                afterOpen: function() {
                    // $('.slick-current').focus();
                },
                beforeClose: function() {
                    $('html, body').removeClass('noscroll');
                    $.fn.fullpage.setAllowScrolling(true);
                    destorySlick('#popup_content');
                },
                afterClose: function() {
                	$('.skip-navigation').show();
                }
            }
        });
        $('#popup_link2').on('click', function(){
            $('#popup_link').magnificPopup('open');
        });
        showPopupZone();
    }
    
    // [s] : 23-10-25 수정
    $('#main_floating_menu').on('click', function(){
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $('#floating_mobile').removeClass('active');
        } else {
            $(this).addClass('active');
            $('#floating_mobile').addClass('active');
        }
    });

    $('#main_top_btn').css({
        "display": "none"
    });

    if (window.innerWidth <= 480 && !$('#about_slider').hasClass('slick-initialized')) {
        initSlick('#about_slider', 1, 1, false);
    }
    $(window).on('resize', function(){
        if (window.innerWidth <= 480 && !$('#about_slider').hasClass('slick-initialized')) {
            initSlick('#about_slider', 1, 1, false);
        } else if (window.innerWidth > 480 && $('#about_slider').hasClass('slick-initialized')) {
            $('#about_slider').slick('unslick');
        }
    });

    changeVideoPoster();

    $(window).on('online', function(e){
        $('.animation-container > video').removeAttr("src");
        $('.animation-container > video').get(0).load();
    });
    $(window).on('offline', function(e){
        changeVideoPoster();

        var video = $('.animation-container > video').get(0);
        video.src = "";
        video.load();
    });
    
    $(window).on('resize', function(){
        // console.log(checkWindowRatio());
    });
});