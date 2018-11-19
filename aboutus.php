<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">	
	<title> 계절밥상 소개 </title>
    <link rel="shortcut icon" href="./images/favicon/favicon.ico">
	<link rel="stylesheet" href="css/common.css" />
	<link rel="stylesheet" href="css/aboutus.css" />
	<link rel="stylesheet" href="//cdn.jsdelivr.net/font-iropke-batang/1.2/font-iropke-batang.css">	
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/prefixfree.min.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
    <script>
        //해시 변경 시 실행
        $(window).on('hashchange',function(){
           goToFromHash(); 
        });
      
       //윈도우 모두 로드 되었을 때 실행 
        $(window).on('load',function(){
            goToFromHash();   
        });
        
        //해시에 따라 해당 페이지로 이동하는 함수
        function goToFromHash(){
            var hash=location.hash;
            if(hash==="#st_story"){
                change(0); $('#ban_img').attr('src','./images/about_us_banner.png');
                $('html,body').scrollTop(0);
//                $('html,body').animate({scrollTop:0},200, 'easeInSine');
                return;
            }else if(hash==="#st_intro"){
                change(1); $('#ban_img').attr('src','./images/about_us_banner02.jpg');
                $('html,body').scrollTop(0);
//                $('html,body').animate({scrollTop:0},200, 'easeInSine');
                return;
            };
            function change(n){//해당 탭에 클래스 추가
                $('.tab li').removeClass('on');
                $('.tabcontent').removeClass('on');
                $('.tab li').eq(n).addClass('on');
                $(hash).addClass('on');
            };
        };
        
        //탭을 클릭했을 때 goToFromHash()함수 실행
//        $('.tab li').click(function(){
////            goToFromHash();
//        });
    </script>
</head>

<body>
    <!-- header -->
    <header>
       <? include "./lib/header.php"; ?>
    </header>
    <!--// header ending -->
    
    <!-- banner  -->
    <div id="about_banner">
        <div id="banner_img">
            <img id="ban_img" src="./images/about_us_banner.png" alt="계절밥상 음식 이미지">
            <img class="ban_logo" src="./images/LOGO/txt_seasonstableTop.png" alt="계절밥상 로고"> 
            <p>CJ 푸드빌의 새로운 한식 브랜드<br>산지 제철 식재로 만든 건강한 밥상</p>    
            <!-- tab links -->
            <ul class="tab">
                <li class="tablinks on" data-tab="st_story"><a href="#st_story">계절밥상 이야기</a></li>
                <li class="tablinks" data-tab="st_intro"><a href="#st_intro">지점별 소개</a></li>
            </ul>
            <!-- // tab links ending -->
        </div>
    </div>
    
    <!-- tab contents 01-->
    <section id="st_story" class="tabcontent on"> 
        <h2 class="our_title"><img src="./images/about_us_title01.gif" alt="계절밥상은 제철음식의 소중함을 전합니다."></h2>
        <div class="story" id="us_pt1-1">
            <img src="./images/about_us_seasonstable_info.png" alt="">
            <p class="story_text">
                우리농가에 도움이 되는 안전한 농산물 사용,<br> 지역별 잘 알려지지 않은 제철 식재료를 발굴하여<br> 귀한 우리 제철 재료의 맥을 이어갑니다.
            </p>
        </div>
        <div class="story" id="us_pt1-2">
            <img src="./images/about_us_seasonstable_info2.png" alt="">
            <h3>'From farm to your table'</h3>
            <p class="story_text">
                계절밥상은 전국 각 지역 농가에서 직접 공급받은 신선한 재료를 활용해<br> 우리 농가와의 상생을 실현하며,<br> 제철 재료로 만든 건강한 제철 음식을 경험할 수 있는 한식 브랜드입니다.
            </p>
        </div>
        <div class="story" id="us_pt1-3">
            <img src="./images/about_us_seasonstable_info3-1.png" alt="">
            <h3>제철음식의 소중함을 전합니다</h3>
            <p class="story_text">
                계절의 흐름에 따라 순리에 맞게 키워낸 생명의<br> 먹을거리야말로 우리의 몸을 가장 잘 이해하고<br> 따뜻하게 품어줄 수 있습니다. 계절밥상은 우리 땅, 우리 채소, 우리의 풍토가 빚어낸 다양한 발효 <br>식품들이 '진짜 우리의 맛', '진짜 최고의 먹을거리'라고 믿습니다.
            </p>
        </div>
        <div class="story" id="us_pt1-4">
            <img src="./images/about_us_seasonstable_info3-2.png" alt="">
            <h3>소박하지만 자연스럽고<br> 건강한 밥상을 제공합니다</h3>
            <p class="story_text">
                푸드빌은 '자연스러운 삶'을 꿈꾸는 사람들을 위해<br> 사계절이 있는 그래서 소박하지만 건강하고<br> 자연스러운 밥상을 고민한 끝에<br> '계절밥상'이라는 한식브랜드를 탄생시켰습니다.
            </p>
        </div>
        <div class="story" id="us_pt1-5">
            <h3>계절장터를 통해 농가와의 상생을 실천합니다</h3>
            <b>한국벤처농업대학과 함께하는 우리 농산물 직거래 공간</b>
            <p class="story_text">
                농부의 손길과 마음이 전해지길 바라는 마음으로 계절밥상 전 매장에 마련된 "계절장터"에서 판매되는 농부님들의 정성이 담긴 가공식품을 이제는 가정에서도 만나실 수 있습니다.
            </p>
            <img src="./images/about_us_seasonstable_info4.png" alt="">
        </div>
        <!-- move btn -->
        <div class="move_btn"><a href="#">제철메뉴 보러가기<img src="./images/icons/foreign.png" alt="제철메뉴 페이지 링크"></a></div>
        <!-- move btn ending -->
    </section>
        <!-- // tab contents ending -->
        <!-- tab contents 02-->
    <section id="st_intro" class="tabcontent"> 
        <h2 class="our_title"><img src="./images/about_us_title02.gif" alt="남산타워점, 비비고 계절밥상에서 더욱 특별한 한식의 맛을 느껴보세요."></h2>
        <div class="story" id="us_pt2-1">
            <img src="./images/about_us_Namsan01.gif" alt="">
            <h3>Korean Vintage</h3>
            <p class="story_text">
                계절밥상의 인테리어는 추억의 향수를 느낄 수 있도록<br>연출하고 있어 부담 없이 즐기실 수 있습니다.
            </p>
        </div>
        <div class="story" id="us_pt2-2">
            <img src="./images/about_us_Namsan02.gif" alt="">
            <img src="./images/about_us_Namsan03.gif" alt="">
            <h3>남산서울타워점</h3>
            <p class="story_text">
                계절밥상 남산서울타워점은 우리 조상의 맛과 멋, 지혜가 살아 숨쉬는 건강한 한식을 사계절의 변화에 따라 가장 새롭고 다양하게<br> 경험할 수 있는 한식 패밀리 레스토랑입니다.
            </p>
        </div>
        <div class="story" id="us_pt2-3">
            <img src="./images/about_us_Namsan04.gif" alt="">
            <h3>한국의 멋과 만나다</h3>
            <p class="story_text">
                서울 한가운데를 차지하고 있는 해발 265m 높이의 남산.<br>
그리고 그 곳에 자리한 계절밥상 남산서울타워점은 서울의<br>전망을 오롯이 즐기며 기와, 처마, 꽃담 등으로 재현한 <br>우리나라 전통 가옥인 한옥의 멋을 경험할 수 있습니다. 
            </p>
            <h3>한국의 맛을 경험하다</h3>
            <p class="story_text">
                계절의 시간표대로 거둔 산지 제철 식재료와 사라져가는 국내산<br> 토종 식재료를 우리 한식의 고유 특징인 조화와 균형, 발효와<br> 숙성의 원리로 조리하여 한국의 맛을 경험할 수 있습니다.
            </p>
        </div>
        
        <div class="story" id="us_pt2-4">
            <div class='img_wrap'>
                <img src="./images/about_us_Bibigo01.png" alt="">
                <p>자연의 시간을 담은 100여가지의 건강한 밥상</p>
            </div>
            <h3>비비고 계절밥상</h3>
            <p class="story_text">
                비비고 계절밥상은 산지 제철 식재로 만든 건강한 밥상을 통해<br> 농가상생을 실현하는 ‘계절밥상’에 “비빔”의 철학을 실천하는<br> 글로벌 대표 한식 브랜드 ‘비비고’를 더했습니다.
            </p>
        </div>
        <div class="story" id="us_pt2-5">
            <div class='img_wrap'>
                <img src="./images/about_us_Bibigo02.png" alt="">
                <p>매장에서 직접 담근 동치미와 장아찌가 있는 
숙성실</p>
            </div>
            <h3>비비고 계절밥상만의 '숙성실'</h3>
            <p class="story_text">
                비비고 계절밥상의 숙성실은 한국 식문화의 가치 중 으뜸으로 <br>꼽는 발효식품을 저장하는 공간입니다. 매장에서 직접 담근<br> 동치미와 장아찌가 시간의 흐름에 따라 맛의 깊이를<br> 더해갑니다.
            </p>
        </div>
         <div class="story" id="us_pt2-6">
            <div class='img_wrap'>
                <img src="./images/about_us_Bibigo03.png" alt="">
                <p>매장에서 직접 담근 동치미와 장아찌가 있는 
숙성실</p>
            </div>
            <h3>비비고 HOT STONE</h3>
            <p class="story_text">
                비비고 계절밥상의 비비고 핫스톤 코너에서는 글로벌 한식 브랜드<br> “비비고”의 돝솥비빔밥과 찌개를 맛보실 수 있습니다.<br> 주문과 동시에 조리됩니다.
            </p>
        </div>   
        <!-- move btn -->
        <div class="move_btn"><a href="#">가격 및 이용안내 보기<img src="./images/icons/foreign.png" alt="이용안내 페이지 링크"></a></div>
        <!-- move btn ending -->
    </section>
        <!-- // tab contents ending -->
        <!-- top btn -->
        <div class="top_btn"><a href="#"><img src="./images/icons/arrow-up.png" alt="상단으로 이동"></a></div>
        <!--// top btn ending-->
    <!-- footer -->
    <footer>
        <? include "./lib/footer.php"; ?>
    </footer>
    <!-- //footer ending -->
</body>
</html>













