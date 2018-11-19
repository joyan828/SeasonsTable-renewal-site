<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">	
	<title> 계절밥상 로그인 </title>
    <link rel="shortcut icon" href="../images/favicon/favicon.ico">
	<link rel="stylesheet" href="../css/common.css" />
	<link rel="stylesheet" href="../css/login.css" />
	<link rel="stylesheet" href="//cdn.jsdelivr.net/font-iropke-batang/1.2/font-iropke-batang.css">	
	<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="../js/prefixfree.min.js"></script>
	<script type="text/javascript" src="../js/common.js"></script>

</head>

<body>
    <!-- header -->
    <header>
       <? include "../lib/header02.php"; ?>
    </header>
    <!--// header ending -->
    
    <!-- section -->
    <section class="bt230">
        <h2>로그인</h2>
        <div id="login_form">
            <!-- tab btn  -->
            <ul id="login_tab">
                <li class="tab_btn selected" data-tab="login_mem">회원로그인</li>
                <li class="tab_btn" data-tab="login_notmem">비회원(주문조회)</li>
            </ul>
            <!-- // tab btn ending -->
            <!-- login_member  -->
            <div id="login_mem" class="memchk on">
                <form name="login" action="./login.php" method="post">
                    <fieldset>
                        <legend class="blind">회원로그인</legend>
                        <div class="login-input">
                            <div class="input_wrap">
                                <label for="id" class="blind">아이디</label>
                                <input type="text" name="id" id="id" placeholder="아이디 6~12자">
                            </div>
                            <p class="error_msg" id="idMsg">아이디를 입력해주세요.</p>
                            <div class="input_wrap">
                                <label for="pw" class="blind">비밀번호</label>
                                <input type="password" name="pwd" id="pwd" placeholder="비밀번호,영문,특수문자,숫자혼합 8~16자">
                            </div>
                            <p class="error_msg" id="pwdMsg">비밀번호를 입력해주세요.</p>
                            <span class="error_msg" id="loginerr">계절밥상에 등록되지 않은 아이디이거나, 아이디 또는 비밀번호를 잘못 입력하셨습니다. </span>
                        </div>
                    </fieldset>
<!--                    <input type="hidden" name="">-->
                    <!-- login_btn -->
            <div class="login_btn">
                <input type="button" class="l_btn" value="로그인">
            </div>
        <!--// login_btn ending-->
                </form>
            </div>
            <!-- login_member ending  -->
            <!-- login_notmember  -->
            <div id="login_notmem" class="memchk">
                <form name="ordercheck" action="" method="post">
                    <fieldset>
                        <legend class="blind">비회원(주문조회)</legend>
                        <div class="login-input">
                            <div class="input_wrap">
                                <label for="order" class="blind">주문번호</label>
                                <input type="text" name="orderId" id="order" placeholder="주문번호">
                            </div>
                            <p class="error_msg" id="ornumMsg">주문번호를 입력해주세요.</p>
                            <div class="input_wrap">
                                <label for="contact" class="blind">주문자 연락처</label>
                                <input type="tel" name="mobileNo" id="contact" placeholder="주문자 연락처">
                            </div>
                            <p class="error_msg" id="phMsg">주문자 연락처를 입력해주세요.</p>
                        </div>
                    </fieldset>
<!--                    <input type="hidden" name="">-->
                </form>
            </div>
            <!-- login_notmember ending  -->
            
        </div>
        <!-- login_links -->
        <div id="login_links">
            <div class="link">
                <p>아이디와 비밀번호를 잊으셨나요?</p>
                <div><a href="#">아이디/비밀번호 찾기</a></div>
            </div>
            <div class="link">
                <p>아직 계절밥상 회원이 아니신가요?</p>
                <div><a href="../member/join_policy.php">회원가입하기</a></div>
            </div>
        </div>
        <!-- //login_links ending-->
    </section>
    <!-- //section ending-->


     <!-- footer -->
    <footer>
        <? include "../lib/footer02.php"; ?>
    </footer>
    <!-- //footer ending -->
    <script>
        //*로그인 탭 구현---------------------------------*
        //tab 클릭 시 회원로그인/비회원 로그인 화면 보이기
        $('#login_tab li').on("click", function(){
            var tabId=$(this).attr('data-tab');
            $('#login_tab li').removeClass('selected');
            $('.memchk').removeClass('on');
            $(this).addClass('selected');
            $('#'+tabId).addClass('on');
            
            //해당탭의 첫번째 input에 focus주고, 값 리셋해주기.
            $('#'+tabId).find('input').eq(0).focus();
            $('#'+tabId).find('input').val("");
            $(".error_msg").hide();
        });
        
        //*인풋 태그 클릭 시 텍스트박스 컬러 변경---------------*
        //input 포커스 시 해당 텍스트박스 border컬러 변경
        $("input").focus(function(){
            $(this).parent().css('border-color','#095d26'); 
        });
        
        //input 포커스 아웃 시 해당 텍스트박스 border컬러 되돌리기
        $("input").blur(function(){
            $(this).parent().css('border-color','#999'); 
        });
        
        //*로그인 버튼 클릭 시-----------------------------*
        $(".l_btn").on("click",function(){
            //아이디, 비밀번호 입력 체크
            var txt=$('input');
            var num=$('input').length;
            var start=0;
            
            //탭에 ".selected"가 있는지 여부로 검사할 input을 제한한다.
            if($('#login_tab li').eq(0).hasClass("selected")){
                num=num/2;                                        
            }else{
                start+=2;
            };
            //input 입력값이 없으면 알림메시지를 보인다.
            for(var i=start; i<num; i++){
              if(!txt.eq(i).val()){
                  $(".error_msg").hide();
                  txt.eq(i).focus();
                  txt.eq(i).parent().next().show();
                  return;
              }else if(txt.eq(i).val()&&txt.eq(i+1).val()){
                  $(".error_msg").hide();
                  $("form:first").submit();
                  console.log('로그인통과');
              }
            };

            
        });
    </script>
</body>
</html>
