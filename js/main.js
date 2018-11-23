$(document).ready(function() {

    //1. 슬라이드 배너 -------------------------------------------*

    var curNum = 0, //현재 창에 띄울 슬라이드 번호
        slide = $('.banner'), // 슬라이드(n개)
        slideNum = slide.length, //슬라이드의 개수
        oldNum; //현재 창 띄우기 이전 슬라이드 번호


    //pager : 슬라이드 수만큼 생성
    var pager = $('#main_banner .pager');
    createPager(pager, slideNum); //슬라이드 수만큼 페이저 생성하는 함수

    //pager를 클릭하면 indicate(페이저와 슬라이드의 연결함수) 실행
    pager.children().on('click', indicate);

    //setInterval 자동 슬라이드 넘기기 
    var slideTimer = setInterval(function() {
        nextItem();
    }, 4000);


    //스탑&플레이 버튼 작동 ------*

    var stopBtn = [$('#stop_btn img').eq(0), //스탑버튼
        $('#stop_btn img').eq(1)
    ]; //스타트버튼  

    var play = true; //true: 재생, false: 멈춤

    //스탑&플레이 버튼을 클릭했을 때
    $('#stop_btn').on('click', function() {

        stopBtn[0].toggle();
        $(this).find('img').removeClass("on");

        //스탑버튼이 보일때/안보일때: class 추가/제거
        if (stopBtn[0].is(":visible")) { //스탑->on : 재생중일때
            stopBtn[0].addClass("on");

            play = true; //재생

        } else { //스타트->on : 멈춤상태일때
            stopBtn[1].addClass("on");

            play = false; //멈춤
        }

        //변수 play의 상태에 따라 슬라이드 스탑/스타트하기.
        stopPlay();

    });

    //자연스러운 움직임을 위해 페이저에 호버 시 슬라이드 멈춤 (움직임 충돌 방지)
    //play 중인 상태에서만 적용

    pager.hover(function() {
        if (stopBtn[0].hasClass("on")) { //스탑->on : 재생중일때
            play = false;
            stopPlay();
        }
        return;
    }, function() {
        if (stopBtn[0].hasClass("on")) { //스탑->on : 재생중일때
            play = true;
            stopPlay();
        }
        return;
    });




    //스크롤 이벤트 ---------------------------------------------*
    //2. 이벤트 페이지 ------------------------------------------*
    //스크롤이 배너 위치에 이르면 애니메이션 효과가 시작됨.

    var fired = false; //애니메이션 효과 1번 주기 위함.

    $(window).scroll(function() {
        var top = $('#main_banner').offset().top, //메인배너에 스크롤될때
            mtop = $('#season_menu').offset().top, //제철메뉴에 스크롤될때
            nowScroll = $(this).scrollTop(); //현재 스크롤 위치
        
        if (nowScroll > top && nowScroll < top + 200) {
            //이벤트 제목이 1회 위 아래로 움직이는 효과
            $('#evt_title').fadeIn(200).animate({
                top: '50px'
            }, 200, function() {
                //장어간장덮밥 이미지가 왼쪽에서 미끄러져 나타난 뒤, 메뉴설명이 나타나고 움직임 
                $('#eel_pic').fadeIn(200).animate({
                    left: '110px'
                }, 400, function() {
                    function swing() {
                        $('#eel_txt').fadeIn(50).animate({
                            top: '+=10px'
                        }, 500).animate({
                            top: '-=10px'
                        }, 500, swing);
                    }
                    
                    swing();
                });
                //삼계탕 이미지가 오른쪽에서 미끄러져 나타난 뒤, 메뉴 설명 글씨가 나타나고 움직임
                $('#samgye_pic').delay(150).fadeIn(200).animate({
                    right: '100px'
                }, 600, function() {
                    function swing() {
                        $('#samgye_txt').fadeIn(50).animate({
                            top: '+=10px'
                        }, 500).animate({
                            top: '-=10px'
                        }, 500, swing);
                    }
                    
                    swing();
                });

            });

            return;

            //3. 제철 메뉴 --------------------------------------------*
            //스크롤이 제철메뉴-500px 위치에 이르면 애니메이션 효과가 시작됨.
        } else if (nowScroll > mtop - 500 && nowScroll < mtop && fired === false) {

            //자동 슬라이드 이동
            var timer1 = setTimeout(next, 1000); //다음 슬라이드로, 1초 뒤
            var timer2 = setTimeout(prev, 5000); //이전 슬라이드로, 6초 뒤

            fired = true; //슬라이드가 1번만 이동할 수 있도록 하는 역할

            return;

        }
        clearTimeout(timer1);
        clearTimeout(timer2);

        return;
    });


    //3. 제철메뉴 슬라이드 --------------------------------------*

    var selNum = 0, //현재 창에 띄울 슬라이드 번호
        mSlide = $('.menu_slide'), // 슬라이드(n개)
        mslideNum = mSlide.length; //슬라이드의 개수

    //pager : 슬라이드 수만큼 생성 
    var mpager = $('#season_menu .pager');
    createPager(mpager, mslideNum);

    //버튼 클릭 시 이동
    var act_btn = [$('.prev_btn').find('img'), //이전 버튼
        $('.next_btn').find('img')]; //다음 버튼
    
    //이전 버튼 : 메뉴 1번째 슬라이드 ( container 에 animation을 주어 0번째 위치로 이동 )
    $('.prev_btn').on("click", prev);

    //다음 버튼 : 메뉴 2번째 슬라이드 ( container 에 animation을 주어 1번째 위치로 이동 )
    $('.next_btn').on("click", next);


    //슬라이드 세팅(제철메뉴)-------------------*
    function mSetting() {
        //selNum이 1일때(두번째 페이지일 때)
        if (selNum === 1) { //이전: 원래 자리로
            $('.container').stop().animate({
                marginLeft: '0'
            }, 600, 'swing', function() {
                //prev 버튼 비활성화
                btnInactv(0);
                //next 버튼 활성화
                btnActv(1);
            });

            selNum -= 1;

            //selNum이 0일때(첫번째 페이지일 때)
        } else if (selNum === 0) { //다음: 1124px 이동
            $('.container').stop().animate({
                marginLeft: -($('.menu_slide').width()) - 20 + 'px'
            }, 600, 'swing', function() {
                //next 버튼 비활성화
                btnInactv(1);
                //prev 버튼 활성화
                btnActv(0);
            });


            selNum += 1;
        }
        pagerOn(selNum, mpager);
    }

    //pager 클릭 시 해당 슬라이드로 이동
    mpager.children().on('click', function() {
        mSetting();
    });



    //함수표현식 ------------------------------------------------------* 

    //1. 자동 슬라이드 배너
    //slide 수에 따라 pager 생성---------------------*
    function createPager(pager, slideNum) {
        for (var i = 0; i < slideNum; i++) {
            pager.append("<span></span>");
        } //pager를 슬라이드 수 만큼 생성
        pager.find('span').eq(0).addClass("selected");
        //pager의 css 조정
        var p_width = pager.width() / 2;
        pager.css({
            marginLeft: -p_width
        });
    }


    //슬라이드 작동 ----------------------------------*
    //슬라이드를 ○|■|□ 다음과 같이 배치.(이동 →일 때, ■: 현재 슬라이드)
    //curNum이 ○의 위치에 지정되어 우로 이동(animate), □에는 curNum을 제외한 모든 슬라이드를 배치. 방향은 adjust에 -,+값을 주어 조정.

    function setting(adjust) {
        var w_width = slide.width(); //슬라이드 넓이값
        var adjust1 = adjust * 1, //양수값
            adjust2 = adjust * -1; //음수값

        if (setting.caller == indicate) { //indicate로 불렸을때에 현재페이지보다 작은 수의 페이저를 클릭하면 반대방향으로 이동
            if (curNum < oldNum) {
                adjust1 = adjust * -1,
                    adjust2 = adjust;
            }
        }

        //curNum 이동되기 전에 위치
        slide.eq(curNum).css({
            left: adjust1 * w_width + 'px',
            opacity: 0.5
        });

        //oldNum은 이동된 후로 이동
        slide.eq(oldNum).stop().animate({
            left: adjust2 * w_width + 'px',
            opacity: 1
        }, 500);

        //curNum을 중앙으로 이동
        slide.eq(curNum).stop().animate({
            left: 0,
            opacity: 1
        }, 500);

        pagerOn(curNum, pager);

    }


    //다음 슬라이드로 이동------------------------------*
    function nextItem() {
        oldNum = curNum;
        curNum = curNum + 1;
        if (curNum >= slideNum) { //slide수 이상일 때 0으로 돌림
            curNum = 0;
        }
        setting('1');
    }


    //pager를 눌렀을 때 해당 pager 번호로 슬라이드가 이동-----*
    function indicate() {
        oldNum = curNum;
        curNum = $(this).index(); //페이저 번호를 curNum에 넣어 일치
        if (curNum == oldNum) return; //현재 페이지를 눌렀을 때는 작동하지 않도록 하기
        setting('1');

    }


    //선택된 pager에 class에 selected부여 -----------------*
    function pagerOn(curNum, pager) {
        pager.children().removeClass("selected");
        pager.children().eq(curNum).addClass("selected");
    }


    //변수 play 가 false, true 일때를 판별해 자동 슬라이드를 멈춤/재생함
    function stopPlay() { //변수 play가 true: 재생, false: 멈춤
        if (play === false) { //멈춤
            clearInterval(slideTimer);
        } else { //재생
            slideTimer = setInterval(nextItem, 4000);
        }
    }

    //3. 제철메뉴 슬라이드 ----------------------------------*
    //이전버튼 클릭 시 & 다음버튼 클릭 시 
    function prev() { //이전
        selNum = 1;
        mSetting();
    }

    function next() { //다음
        selNum = 0;
        mSetting();
    }

    //슬라이드 이동 버튼 활성화/비활성화
    //버튼 비활성화
    function btnInactv(index) {
        var btn = act_btn[index];
        var atr = btn.attr('src').split("-");
        btn.attr({
            src: atr[0] + "-not.png"
        });
    }
    
    //버튼 활성화
    function btnActv(index) {
        var btn = act_btn[index];
        var atr = btn.attr('src').split("-");
        btn.attr({
            src: atr[0] + "-atv.png"
        });
    }

}); //document.ready 마침