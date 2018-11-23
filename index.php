<? session_start(); ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">	
	<title> 계절밥상 </title>
    <link rel="shortcut icon" href="./images/favicon/favicon.ico">
	<link rel="stylesheet" href="./css/common.css" />
	<link rel="stylesheet" href="./css/main_css.css" />
	<link rel="stylesheet" href="//cdn.jsdelivr.net/font-iropke-batang/1.2/font-iropke-batang.css">	
    <!-- jQUery load -->
	<script src="./js/jquery-2.1.1.min.js"></script>
	<script src="./js/jquery-ui.min.js"></script>
	<script src="./js/jquery.easing.1.3.js"></script>
	<script src="./js/prefixfree.min.js"></script>
	<script src="./js/common.js"></script>
	<script src="./js/main.js"></script>
    <!--[if lte IE 9]>
    <script src="../js/trasition-animation.js"></script>
    <![endif]-->
</head>

<body>
   <!-- header -->
    <header>
       <? include "./lib/header.php"; ?>
    </header>
    <!--// header ending -->
   
    <!-- main banner  -->
    <div id="main_banner">
        <div id="banner_wrap">
            <div class="banner">
                <span class="blind">
                    입맛당기는 여름 별미 삼총사 이른 여름 지금, 절정의 맛. 시원한 수박과 탱글한 젤리의 만남! 여름 수박화채. 살얼음 동동 새콤하고 시원한 여름 초계국수. 초계국수와 환상의 짝궁 매콤 닭무침
                </span>
            </div>
            <div class="banner">
                <span class="blind">
                    지금 절정의 맛. 총알 불오징어구이. 일년 중 여름과 겨울 단 2번 맛볼 수 있는 별미. 부드러운 식감과 불맛이 일품인 총알 오징어를 지금 계절밥상에서 만나보세요. 신메뉴. *일부 메뉴 및 식재는 조기 소진 또는 변경될 수 있습니다.
                </span>
            </div>
            <div class="banner">
                <span class="blind">
                    이른 무더위 처방전. 살얼음 동동 초계국수. 매콤 닭 무침. 여름 초계국수. 여름 수박화채. 
                    *일부 메뉴 및 식재는 조기 소진 또는 변경될 수 있습니다.
                </span>
            </div>
        </div>
        <div class="pager"></div>
        <div id="stop_btn">
            <img src="./images/main/stop_btn.gif" alt="멈추기" class="on">
            <img src="./images/main/start_btn.gif" alt="재생하기">
        </div>
    </div>
    <!--// main banner ending -->
    <!--  new_ad  -->
    <div id="new_ad">
        <div class="wrap">
            <!--   image sources   -->
            <img src="./images/main/SUMMER-EVENT03-3_0002_title.png" alt="전복능이삼계탕과 장어간장덮밥" id="evt_title">
            <img src="./images/main/SUMMER-EVENT03-3_0003_eel_pic.png" alt="장어간장덮밥" id="eel_pic">
            <img src="./images/main/SUMMER-EVENT03-3_0001_eel_txt.png" alt="달콤짭조롬하게 즐기는 원기회복 보양식" id="eel_txt">
            <img src="./images/main/SUMMER-EVENT03-3_0004_samgye_pic.png" alt="전복능이삼계탕" id="samgye_pic">
            <img src="./images/main/SUMMER-EVENT03-3_0000_samgye_txt.png" alt="완도 전복과 능이버섯으로 감칠맛과 풍미 가득" id="samgye_txt">
            <!--   btn    -->
            <div class="see_btn shadow"><a href="#">여름 메뉴 자세히 보기<img src="./images/main/next_btn02.gif" alt="계절밥상 여름메뉴 자세히 보기"></a></div>
            <div class="see_btn shadow"><a href="#">투표하고 선물 받기<img src="./images/main/next_btn02.gif" alt="계절밥상 여름메뉴 자세히 보기"></a></div>
        </div>    
    </div>
    <!--// new_ad ending -->
    <!-- season menu -->
    <div id="season_menu">
        <div class="arrows">
            <div class="prev_btn"><img src="./images/main/prev_btn-atv.png" alt="이전 메뉴 보기"></div>
            <div class="next_btn"><img src="./images/main/next_btn-atv.png" alt="다음 메뉴 보기"></div>
        </div>
        <div class="wrap">
            <h2>제철메뉴</h2>
            <div class="container">
                <div class="menu_slide">
                    <div class="menu shadow">
                        <a href="#">
                            <img src="./images/main/menu01.gif" alt="">
                            <p class="title">전복 능이삼계탕</p>
                            <p class="contents">완도 전복과 능이버섯으로<br>  감칠맛과
                            풍미를 더한 계절밥상<br>  특선 삼계탕</p>
                        </a>
                    </div>
                    <div class="menu shadow">
                        <a href="#">
                            <img src="./images/main/menu02.gif" alt="">
                            <p class="title">장어 간장덮밥</p>
                            <p class="contents">달콤짭조름한 양념에 버무린<br> 장어강정을 담백한 달걀볶음밥<br> 위에 올려먹는 별미 덮밥</p>
                        </a>
                    </div>
                    <div class="menu shadow">
                        <a href="#">
                            <img src="./images/main/menu03.gif" alt="">
                            <p class="title">고추장 불고기</p>
                            <p class="contents">특제양념으로 맛을 낸 입맛<br> 확 당기는 계절밥상 대표 고기요리</p>
                        </a>
                    </div>
                    <div class="menu shadow">
                        <a href="#">
                            <img src="./images/main/menu04.gif" alt="">
                            <p class="title">여름 초계국수</p>
                            <p class="contents">살얼음 동동 담백하고 상큼한<br>여름 별미 국수</p>
                        </a>
                    </div>
                </div>
                <div class="menu_slide">
                    <div class="menu shadow">
                        <a href="#">
                            <img src="./images/main/menu05.gif" alt="">
                            <p class="title">매콤 닭무침</p>
                            <p class="contents">부드럽고 쫄깃한 닭가슴살을 
                            <br>매콤한 양념에 무쳐낸 여름 <br>별미 무침</p>
                        </a>
                    </div>
                    <div class="menu shadow">
                        <a href="#">
                            <img src="./images/main/menu06.gif" alt="">
                            <p class="title">옥수수전</p>
                            <p class="contents">알알이 톡톡 터지는 달콤한 <br>옥수수를 전통 전 형태로 튀기듯<br> 부쳐낸 여름 별미 전</p>
                        </a>
                    </div>
                    <div class="menu shadow">
                        <a href="#">
                            <img src="./images/main/menu07.gif" alt="">
                            <p class="title">영양 전복죽</p>
                            <p class="contents">전복살과 내장을 넣고 푹 끓여<br> 맛과 영양이 좋은 전복죽</p>
                        </a>
                    </div>
                    <div class="menu shadow">
                        <a href="#">
                            <img src="./images/main/menu08.gif" alt="">
                            <p class="title">상큼 자두화채</p>
                            <p class="contents">탐스럽게 잘 익은 자두에 탱글한<br>젤리를 곁들여 시원하게 즐기는<br>갈증해소 여름 별미</p>
                        </a>
                    </div>
                </div>  
            </div>    
        </div>
        
        <div class="pager"></div>
    </div>
    <!-- //season menu -->
    <!-- SNS -->
    <div id="sns">
        <div class="wrap">
            <h2>SNS</h2>
            <p>계절밥상은 <span class="green">SNS</span>를 통해서 고객과의 즐거운 <span class="green">소통</span>을 이어나갑니다.<br>
더 많은 계절밥상 이야기와 이벤트를 SNS에서 확인하실 수 있습니다.</p>
            <div class="box">
                <img src="./images/main/snsimg01.jpg" alt="시~원한 생맥주 한 모금">
                <div class="sns_ov">
                    <a href="https://www.facebook.com/seasonstable/videos/vb.630093530341934/2295651697119434/?type=3&theater" target="_blank">
                        <p>👉 좋아요+공유하면 식사권 증정<br>
                            (~7/16까지, 1인 식사권 1명 /<br> 
                            친구 태그하면 당첨 확률 UP!)<br><br>
                            이따 계절밥상에서<br>
                            장어 강정에 시~원한 맥주 한 잔 콜?!
                        </p>
                        <div class="tags">#시원한_생맥에</div>
                        <div class="tags">#계절밥상_장어강정</div>
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="./images/main/snsimg02.jpg" alt="새콤상큼 과육톡톡! 자두빙수, 아삭아삭 시원한 수박화채">
                <div class="sns_ov">
                    <a href="https://www.facebook.com/seasonstable/photos/a.631113576906596.1073741828.630093530341934/2275173649167239/?type=3&theater"  target="_blank">
                        <p>💖좋아요+공유하면 식사권 증정💖<br>
                        (~7/6까지, 1인 식사권 1명 /<br>
                        친구 태그하면 당첨 확률 UP!)<br><br>
                        자두 빙수 VS 수박화채<br>
                        무더위 한 방에 날려줄 디저트는 무엇?!<br>
                        </p>
                        <div class="tags">#여름에는_역시</div>
                        <div class="tags">#시원달달한게_최고</div>
                    </a>    
                </div>
            </div>
            <div class="box">
                <img src="./images/main/snsimg03.jpg" alt="열 받을 땐 계절밥상에서 뜨끈한 삼계탕 한 그릇">
                <div class="sns_ov">
                    <a href="https://www.facebook.com/seasonstable/photos/a.631113576906596.1073741828.630093530341934/2291787990839138/?type=3&theater"  target="_blank">
                        <p>
                    👉 좋아요+공유하면 식사권 증정<br>
                    (~7/14까지, 1인 식사권 1명 /<br> 
                    친구 태그하면 당첨 확률 UP!)<br><br>
                    날도 더운데 딱 달라붙어 있는 <br>
                    커플들 때문에 열 받는다 열받아!! :(<br>
                    계절밥상에서 뜨끈한 삼계탕으로<br> 화풀이한다..<br>
                        </p>
                        <div class="tags">#나도_삼계탕과</div>
                        <div class="tags">#이열치열</div>
                    </a>    
                </div>
            </div>
            <div class="box">
                <img src="./images/main/snsimg04.jpg" alt="진~한 국물이 일품! 전복 능이 삼계탕, 달콤짭조름한 장어 간장 덮밥, 영양 가득 고소한 전복죽, 시원 새콤한 여름 초계국수">
                <div class="sns_ov">
                    <a href="https://www.facebook.com/seasonstable/photos/a.631113576906596.1073741828.630093530341934/2293674287317175/?type=3&theater"  target="_blank">
                        <p>
                        👉 좋아요+공유하면 식사권 증정<br>
                        (~7/15까지, 1인 식사권 1명 /<br>
                        친구 태그하면 당첨 확률 UP!)<br><br>
                        여름철 입 맛도 살려주고 더위도 물리쳐 <br>줄
                        나의 여름 대표 보양식을 골라주세요!
                        </p>
                        <div class="tags">#박빙이다</div>
                        <div class="tags">#다_고르면_안되나</div>
                    </a>    
                </div>
            </div>
            <div class="box">
                <img src="./images/main/snsimg05.jpg" alt="알차게 담아낸 계절밥상의 건강한 한 끼, 계절밥상 도시락 3종 출시. 언제 어디서든 간편한식, 정성가득 건강한식, 고기듬뿍 든든한식. 해당메뉴는 일부 매장에서만 제공됩니다.">
                <div class="sns_ov">
                    <a href="https://www.facebook.com/seasonstable/posts/2295974470420490"  target="_blank">
                        <p> 💖아무리 바빠도 끼니는 제대로 챙기자!<br>
                            다양하게 즐기는 계절밥상 도시락을<br>
                            더 가까운 매장에서 만나보세요 💖<br><br>

                            고객님들의 많은 성원과 사랑으로<br>
                            계절밥상 도시락이 전국 매장에 출시<br> 됩니다!
                        </p>
                        <div class="tags">#언제어디서든</div>
                        <div class="tags">#계절밥상_도시락</div>
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="./images/main/snsimg06.jpg" alt="친구야, 나랑 가면 너는 반값? 계절밥상가서 보양식 다 먹자~ 친구: 콜!!">
                <div class="sns_ov">
                    <a href="https://www.facebook.com/seasonstable/photos/a.631113576906596.1073741828.630093530341934/2301713919846545/?type=3&theater"  target="_blank">
                        <p>
                        ⭐️ 초복 맞이 할인 행사 ⭐️<br><br>

                        ~7/21까지, 초복을 맞이해 계절밥상이<br> 준비한 
                        특/별/한 할인 행사!<br><br>

                        초복 WEEK 동안 계절밥상에 <br>
                        성인 2인 이상 방문 시<br> 
                        1인 50% 할인해 드립니다 :)<br>
                        (평일 저녁, 주말에 한 함)
                        </p>
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="./images/main/snsimg07.jpg" alt="바삭한 치킨과 함께 맥주파, 다양한 고기와 함께 소주파.">
                <div class="sns_ov">
                    <a href="https://www.facebook.com/seasonstable/photos/a.631113576906596.1073741828.630093530341934/2305593812791889/?type=3"  target="_blank">
                        <p>👉 좋아요+공유하면 식사권 증정<br>
                            (~7/21까지, 1인 식사권 1명 /<br>
                            친구 태그하면 당첨 확률 UP!)<br><br>

                            바삭한 옥수수전과 먹는 시원한 맥주<br>
                            VS<br>
                            감칠맛 나는 고기와 먹는 시원한 소주<br>
                            맥주파, 소주파 너는 어떤 파야?
                        </p>
                        <div class="tags">#술은_그냥_다</div>
                        <div class="tags">#맛있다</div>
                    </a>
                </div>
            </div>
            <div class="box">
                <img src="./images/main/snsimg08.jpg" alt="이렇게만 먹어도 든든한 여름 보양식">
                <div class="sns_ov">
                    <a href="https://www.facebook.com/seasonstable/photos/a.631113576906596.1073741828.630093530341934/2309792762371994/?type=3&theater"  target="_blank">
                        <p>
                        👉 좋아요+공유하면 식사권 증정<br>
                        (~7/23까지, 1인 식사권 1명 /<br>
                        친구 태그하면 당첨 확률 UP!)<br><br>
                        기력이 쭉쭉 빠지는 여름에는<br>
                        전복 능이 삼계탕과 전복죽만 있으면<br>
                        무더위가 두렵지 않지~
                        </p>
                        <div class="tags">#올여름_복날에는</div>
                        <div class="tags">#삼계탕_전복죽</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- //SNS ending-->
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
