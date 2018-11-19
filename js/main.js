$(document).ready(function(){
        
    //1. 메인 슬라이드 배너
    var curNum=0,
        $slide=$('.banner'),
        slideNum=$slide.length,
        oldNum;

    //1.1 pager : 페이지 수만큼 생성
    var pager=$('#main_banner .pager');
    createPager(slideNum);

    $('.pager span').on('click', indicate);

    //1.2 자동 슬라이드 넘기기 
    var slideTimer = setInterval(function(){nextItem();},4000);
    
    //1.3 stop,start 버튼을 눌러 슬라이드 stop&start. 
    //+로딩 후 첫화면에서 hover 작동x(추후 수정)
    var stopBtn=[$('#stop_btn img').eq(0), //stop버튼
                $('#stop_btn img').eq(1)]; //start버튼    
    
    $('#stop_btn').on('click',function(){
        stopBtn[0].toggle();
        $('#stop_btn img').removeClass("on");
        //stop버튼이 보일때/안보일때: class 추가/제거
        if(stopBtn[0].is(":visible")){
            stopBtn[0].addClass("on");
        }else{
            stopBtn[1].addClass("on");
        };
        //stop|play버튼이 on이면 슬라이드 멈춤|재생.
        if(stopBtn[0].hasClass("on")){ //재생 중: stop버튼 on
            slideTimer = setInterval(function(){nextItem();},4000);
            $('#main_banner .pager').hover(function(){
//                console.log(1);
                clearInterval(slideTimer);
            },function(){
                slideTimer = setInterval(function(){nextItem();},4000);
            });
        }else{ //멈춤 : start버튼 on
            clearInterval(slideTimer);
        };
    });
    
    //3. 제철메뉴 슬라이드 + 페이저 연동, pager 함수 만들기
    //3.1 pager : 페이지 수만큼 생성 (미완성)
    var pager=$('#season_menu .pager');
    var menuNum=$('.container .menu_slide').length;
    createPager(menuNum);
    CurNum=0;
    
    $('.prev_btn').on("click",function(){
        $('.container').animate({marginLeft:'0'},400,'swing');
        if(CurNum>0&&CurNum<menuNum) CurNum-=1; 
        $('#season_menu .pager span').removeClass("selected");
        $('#season_menu .pager span').eq(CurNum).addClass("selected");
    });
    $('.next_btn').on("click",function(){
        $('.container').animate({marginLeft:'-1124px'},400,'swing');
        if(CurNum>=0&&CurNum<menuNum-1) CurNum+=1;
        $('#season_menu .pager span').removeClass("selected");
        $('#season_menu .pager span').eq(CurNum).addClass("selected");
    });
    
//------------------------------------------------함수
    //1. 메인 배너 함수
    
    function setting(adjust){ //슬라이드 이동 값 세팅
        var w_width= $slide.width(); //슬라이드 넓이
        var adjust1= adjust * 1,
            adjust2= adjust * -1;
        if(setting.caller == indicate){
            if(curNum < oldNum){
                adjust1= adjust * -1,
                adjust2=adjust;
            };
        };
        $slide.css({display:"block"});
        $slide.eq(curNum).fadeIn(1500);

        $slide.eq(curNum).css({left: adjust1 * w_width +'px', display: 'block', opacity: 1})
        $slide.eq(oldNum).stop().animate({left:adjust2 * w_width +'px', opacity: 1},500);
        $slide.eq(curNum).stop().animate({left:0, opacity: 1}, 500);

        //pager와 현재페이지 연결  ->함수로 만들기
        $('#main_banner .pager span').removeClass("selected");
        $('#main_banner .pager span').eq(curNum).addClass("selected");
    };
    //slide 수에 따라 pager 생성하는 함수
    function createPager(slideNum){
        for(i=0; i<slideNum; i++){
            pager.append("<span></span>");
        };
        pager.find('span').eq(0).addClass("selected");
        p_width=pager.width()/2;
        pager.css({marginLeft:-p_width});
    };    

    function nextItem(){ //다음 슬라이드로 이동하는 함수
        oldNum=curNum;
        curNum=curNum +1;
        if(curNum >= slideNum){
            curNum=0;
        };
        setting('1');
    };
    function indicate(){ //pager를 누르면 작동하는 함수
        oldNum=curNum;
        curNum=$(this).index();
        if(curNum==oldNum) return;
            setting('1');
    };

}); //document.ready 마침
