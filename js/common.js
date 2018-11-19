$(document).ready(function(){
    
    //lnb 언어 : 클릭 시 나타나고 한번 더 클릭 시 사라지기 
                // 아무 곳이나 클릭해도 사라지도록 수정할 예정
    var $lang=$('.language').parent(),
        $lang_op=$('.language li');
    
    $lang.on("click",function(){  //lang(<li>) 클릭 시 
        if($lang_op.is(":visible")){ //lang_op이 보이면  
            $lang_op.hide();
        }else{                  //그 외에는 
            $lang_op.show();    //show    
        }
    });

    //gnb 메뉴 : mainmenu를 호버 시 submenu 슬라이드 다운, 업.
    $('#gnb').hover(function(){
        $('.main_menu .sub').stop().slideDown("50");
        $('#submenu_bg').stop().slideDown("50");
        $('#submenu_bg').stop().slideDown("50");

    },function(){
            $('.main_menu .sub').stop().slideUp("50");
            $('#submenu_bg').stop().slideUp("50");
    }); 
 

    
    
    
});// document.ready