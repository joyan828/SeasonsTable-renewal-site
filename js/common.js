$(document).ready(function () {
    
    //lnb - 언어 : 클릭 시 오픈/클로즈 -------------------------*
    "use strict";
    
    var lang = $('.language').parent(),
        lang_opt = $('.language li');
    
    lang.on("click", function () {  //'언어' 클릭 시 
        if (lang_opt.is(":visible")) {
            lang_opt.hide();
        } else {
            lang_opt.show();
        }
    });

    
    //gnb 메뉴 : 메뉴에 호버하면 submenu 슬라이드 다운, 업 ---------*
    
    $('.main_menu').hover(function () { //
        $('.main_menu .sub').stop().slideDown("50");
        $('#submenu_bg').stop().slideDown("50");

    }, function () {
        $('.main_menu .sub').stop().slideUp("50");
        $('#submenu_bg').stop().slideUp("50");
    });
 
    //top 버튼 ---------------------------------------------*
    //스크롤 500px 이상에서 나타나기
    
    $(window).scroll(function () {
        var nowScroll = $(this).scrollTop(); //현재 스크롤
 
        if (nowScroll > 500) {
            $('.top_btn').show();
        } else {
            $('.top_btn').hide();
        }
        
    });
    
    //클릭하면 상단으로 부드럽게 이동하기
    $('.top_btn').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({scrollTop: 0}, 500);
    });
    
    
}); // document.ready