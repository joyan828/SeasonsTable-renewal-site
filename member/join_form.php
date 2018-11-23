<?
    //promo_ok(프로모션 동의)시 hidden(promo_ok)에 값 세팅
    if(isset($_POST['termsEmail'])){
        $promo_ok='Y';
    }else{
        $promo_ok='N';
    };
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">	
	<title> 계절밥상 회원가입 </title>
    <link rel="shortcut icon" href="../images/favicon/favicon.ico">
	<link rel="stylesheet" href="../css/common.css" />
	<link rel="stylesheet" href="../css/join.css" />
	<link rel="stylesheet" href="//cdn.jsdelivr.net/font-iropke-batang/1.2/font-iropke-batang.css">	
	<script src="../js/jquery-2.1.1.min.js"></script>
	<script src="../js/jquery-ui.min.js"></script>
	<script src="../js/jquery.easing.1.3.js"></script>
	<script src="../js/prefixfree.min.js"></script>
	<script src="../js/common.js"></script>
	<script src="../js/join_modify.js"></script>
    <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
    <!--[if lt IE 9]>
    <script src="../js/placeholders.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- header -->
    <header>
        <? include "../lib/header02.php"; ?>
    </header>
    <!--// header ending -->
    
    <!-- section -->
    <section class="bt230">
        <h2>회원가입</h2>
        <div class="join_wrap"> 
            <form name="join_form" method="post" action="insert.php">
                <input type="hidden" name="idchk" value="">
                <input type="hidden" name="pwdchk" value="">
                <input type="hidden" name="namechk" value="">
                <input type="hidden" name="yychk" value="">
                <input type="hidden" name="ddchk" value="">
                <input type="hidden" name="phchk" value="">
                <input type="hidden" name="mailchk" value="1">
                <input type="hidden" id="promo_ok" name="promo_ok" value="<?=$promo_ok?>">
                <!-- content -->
                <div class="row_group">
                    <!-- 아이디, 비밀번호 입력 -->
                    <div class="join_row">
                        <h3 class="join_title">아이디</h3>
                        <span class="txt_box">
                            <input type="text" id="id" name="id" onfocus="boxcolor(this)" onfocusout="chk(this);">
                            <label for="id" class="blind">아이디</label>
                        </span>
                        <span class="error_msg" id="idMsg"></span>
                    </div>
                    <div class="join_row">
                        <h3 class="join_title">비밀번호</h3>
                        <span class="txt_box">
                            <input type="password" id="pwd" name="pwd" onfocus="boxcolor(this)" onfocusout="chk(this);">
                            <label for="pwd" class="blind">비밀번호</label>
                        </span>
                        <span class="error_msg" id="pwdMsg">필수 정보입니다.</span>      
                        <h3 class="join_title">비밀번호 재확인</h3>
                        <span class="txt_box">
                            <input type="password" id="pwdconfirm" name="pwdconfirm" onfocus="boxcolor(this)" onfocusout="chk(this);">
                            <label for="pwdconfirm" class="blind">비밀번호 재확인</label>
                        </span>
                        <span class="error_msg" id="pwdconMsg">필수 정보입니다.</span>
                    </div>
                    <!-- //아이디, 비밀번호 입력 -->
                    <!-- 이름, 생년월일 입력 -->
                    <div class="join_row">
                        <h3 class="join_title">이름</h3>
                        <span class="txt_box">
                            <input type="text" id="name" name="name" onfocus="boxcolor(this)" onfocusout="chk(this);">
                            <label for="name" class="blind">이름</label>
                        </span>
                        <span class="error_msg" id="nameMsg">필수 정보입니다.</span>
                    </div>
                    <div class="join_row">
                        <h3 class="join_title">생년월일</h3>
                        <div class="birth_wrap" role="group">
                            <span class="txt_box bir">
                                <input type="text" id="bir_yy" name="bir_yy" placeholder="년(4자)" onfocus="boxcolor(this);" onfocusout="chk(this);">
                                <label for="bir_yy" class="blind">년도</label>
                            </span>
                            <span class="txt_box bir">
                                <select id="bir_mm" name="bir_mm" title="월" onfocus="boxcolor(this);" onfocusout="chk(this);">
                                    <option value="" selected>&nbsp;&nbsp;월</option>
                                    <option value="01">&nbsp;&nbsp;1</option>
                                    <option value="02">&nbsp;&nbsp;2</option>
                                    <option value="03">&nbsp;&nbsp;3</option>
                                    <option value="04">&nbsp;&nbsp;4</option>
                                    <option value="05">&nbsp;&nbsp;5</option>
                                    <option value="06">&nbsp;&nbsp;6</option>
                                    <option value="07">&nbsp;&nbsp;7</option>
                                    <option value="08">&nbsp;&nbsp;8</option>
                                    <option value="09">&nbsp;&nbsp;9</option>
                                    <option value="10">&nbsp;&nbsp;10</option>
                                    <option value="11">&nbsp;&nbsp;11</option>
                                    <option value="12">&nbsp;&nbsp;12</option>
                                </select>
                                <label for="bir_mm" class="blind">월</label>
                            </span>
                            <span class="txt_box bir">
                                <input type="text" id="bir_dd" name="bir_dd" placeholder="일" onfocus="boxcolor(this)" onfocusout="chk(this);">
                                <label for="bir_dd" class="blind">일</label>
                            </span>
                        </div>    
                        <span class="error_msg" id="birMsg">필수 정보입니다.</span>
                    </div>
                    <!-- //이름, 생년월일 입력 -->
                    <!-- 성별, 이메일 입력 -->
                    <div class="join_row">
                        <h3 class="join_title">성별</h3>
                        <span class="txt_box">
                            <select id="gender" name="gender" title="성별" onfocus="boxcolor(this)" onfocusout="chk(this);">
                                <option value="" selected>&nbsp;&nbsp;성별</option>
                                <option value="F">&nbsp;&nbsp;여자</option>
                                <option value="M">&nbsp;&nbsp;남자</option>
                            </select>
                            <label for="gender" class="blind">성별</label>
                        </span>
                        <span class="error_msg" id="genMsg">필수 정보입니다.</span>
                    </div>
                    <div class="join_row">
                        <!-- 프로모션 안내 동의 시 보여지는 화면  -->
                        <? if($promo_ok === 'Y') { ?>
                        <h3 class="join_title">본인 확인 이메일</h3>
                        <!-- 프로모션 안내 비동의 시 보여지는 화면  -->
                        <? }else{ ?>
                        <h3 class="join_title">본인 확인 이메일<span class="grey">(선택)</span></h3>
                        <? } ?>
                        <span class="txt_box">
                            <input type="text" id="email" name="email" placeholder="선택입력" onfocus="boxcolor(this)" onfocusout="chk(this);">
                            <label for="email" class="blind">본인 확인 이메일(선택)</label>
                        </span>
                        <span class="error_msg" id="emailMsg1"></span>
                    </div>
                    <!-- //성별, 이메일 입력 -->
                    <!-- 휴대전화 번호 입력 -->
                    <div class="join_row">
                        <h3 class="join_title">휴대전화</h3>
                        <span class="txt_box ph">
                            <input type="text" id="phone" name="phone" placeholder="전화번호 입력" onfocus="boxcolor(this)" onfocusout="chk(this);">
                            <label for="phone" class="blind">휴대전화</label>
                        </span>
                        <span class="error_msg" id="phMsg1">필수 정보입니다.</span>
                    </div>
                    <!-- //휴대전화 번호 입력 -->
                    <!-- 주소 입력 -->
                    <div class="join_row">
                        <h3 class="join_title">주소<span class="grey">(선택)</span></h3>
                        <div class="address_btn">
                            <input type="button" class="btn-primary"
                                onclick="execDaumPostcode()" value="우편번호 찾기"><br>
                        </div>
                        <span class="txt_box address">
                            <input type="text" name="post" id="postcode"
                                placeholder="우편번호"
                                   onfocus="boxcolor(this)" onfocusout="offcolor(this);" readonly>
                            <label for="postcode" class="blind">우편번호</label>
                        </span>
                        <span class="txt_box address">
                            <input type="text" name="Address" 
                                id="Address" placeholder="주소"
                                   onfocus="boxcolor(this)" onfocusout="offcolor(this);" readonly>
                            <label for="Address" class="blind">주소</label>
                        </span>
                        <span class="txt_box address">
                            <input type="text" name="Address2" 
                                id="Address2" placeholder="상세주소" onfocus="boxcolor(this);" onfocusout="chk(this);" 
                                readonly>
                            <label for="Address2" class="blind">상세주소</label>
                        </span>
                        <span class="error_msg" id="addMsg">주소를 입력해주세요.</span>
                    </div>
                    <!-- //주소 입력-->
                    <div class="btn_area">
                        <button type="button" id="btnJoin" onclick="join();">가입하기</button>
                    </div>
                </div>
                <!-- //content -->
            </form>
        </div>
       
    </section>
    <!-- //section ending-->

     <!-- footer -->
    <footer>
       <? include "../lib/footer02.php"; ?>
    </footer>
    <!-- //footer ending -->

</body>
</html>
