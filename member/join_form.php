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
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">	
	<title> 계절밥상 회원가입 </title>
    <link rel="shortcut icon" href="../images/favicon/favicon.ico">
	<link rel="stylesheet" href="../css/common.css" />
	<link rel="stylesheet" href="../css/join.css" />
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
        <h2>회원가입</h2>
        <div class="join_wrap"> 
            <form name="join_form" method="post" action="insert.php">
                <input type="hidden" id="idchk" name="idchk" value="">
                <input type="hidden" id="promo_ok" name="promo_ok" value="<?=$promo_ok?>">
                <!-- content -->
                <div class="row_group">
                    <!-- 아이디, 비밀번호 입력 -->
                    <div class="join_row">
                        <h3 class="join_title">아이디</h3>
                        <span class="txt_box">
                            <input type="text" id="id" name="id" onfocus="boxcolor(this)" onfocusout="chk(this);">
                            <label for="id"></label>
                        </span>
                        <span class="error_msg" id="idMsg">필수 정보입니다.</span>
                    </div>
                    <div class="join_row">
                        <h3 class="join_title">비밀번호</h3>
                        <span class="txt_box">
                            <input type="password" id="pwd" name="pwd" onfocus="boxcolor(this)" onfocusout="chk(this);">
                            <label for="pwd"></label>
                        </span>
                        <span class="error_msg" id="pwdMsg">필수 정보입니다.</span>      
                        <h3 class="join_title">비밀번호 재확인</h3>
                        <span class="txt_box">
                            <input type="password" id="pwdconfirm" name="pwdconfirm" onfocus="boxcolor(this)" onfocusout="chk(this);">
                            <label for="pwdconfirm"></label>
                        </span>
                        <span class="error_msg" id="pwdMsg">필수 정보입니다.</span>
                    </div>
                    <!-- //아이디, 비밀번호 입력 -->
                    <!-- 이름, 생년월일 입력 -->
                    <div class="join_row">
                        <h3 class="join_title">이름</h3>
                        <span class="txt_box">
                            <input type="text" id="name" name="name" onfocus="boxcolor(this)" onfocusout="chk(this);">
                            <label for="name"></label>
                        </span>
                        <span class="error_msg" id="nameMsg">필수 정보입니다.</span>
                    </div>
                    <div class="join_row">
                        <h3 class="join_title">생년월일</h3>
                        <div class="birth_wrap">
                            <span class="txt_box bir">
                                <input type="text" id="bir_yy" name="bir_yy" placeholder="년(4자)" onfocus="boxcolor(this);" onfocusout="chk(this);">
                                <label for="bir_yy"></label>
                            </span>
                            <span class="txt_box bir">
                                <select id="bir_mm" name="bir_mm" title="월" onfocus="boxcolor(this);" onfocusout="chk(this);">
                                    <option>월</option>
                                    <option value="01">1</option>
                                    <option value="02">2</option>
                                    <option value="03">3</option>
                                    <option value="04">4</option>
                                    <option value="05">5</option>
                                    <option value="06">6</option>
                                    <option value="07">7</option>
                                    <option value="08">8</option>
                                    <option value="09">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>    
                            </span>
                            <span class="txt_box bir">
                                <input type="text" id="bir_dd" name="bir_dd" placeholder="일" onfocus="boxcolor(this)" onfocusout="chk(this);">
                                <label for="bir_dd"></label>
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
                                <option value selected>성별</option>
                                <option value="0">여자</option>
                                <option value="1">남자</option>
                            </select>
                        </span>
                        <span class="error_msg" id="genMsg">필수 정보입니다.</span>
                    </div>
                    <div class="join_row">
                        <h3 class="join_title">본인 확인 이메일<span class="grey">(선택)</span></h3>
                        <span class="txt_box">
                            <input type="text" id="email" name="email" placeholder="선택입력" onfocus="boxcolor(this)" onfocusout="chk(this);">
                            <label for="email"></label>
                        </span>
                        <span class="error_msg" id="emailMsg1"></span>
                    </div>
                    <!-- //성별, 이메일 입력 -->
                    <!-- 휴대전화 번호 입력 -->
                    <div class="join_row">
                        <h3 class="join_title">휴대전화</h3>
                        <span class="txt_box ph">
                            <input type="text" id="phone" name="phone" placeholder="전화번호 입력" onfocus="boxcolor(this)" onfocusout="chk(this);">
                            <label for="phone"></label>
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
                            <label for="post"></label>
                        </span>
                        <span class="txt_box address">
                            <input type="text" name="Address" 
                                id="Address" placeholder="주소"
                                   onfocus="boxcolor(this)" onfocusout="offcolor(this);" readonly>
                            <label for="Address"></label>
                        </span>
                        <span class="txt_box address">
                            <input type="text" name="Address2" 
                                id="Address2" placeholder="상세주소" onfocus="boxcolor(this);" onfocusout="chk(this);" 
                                readonly>
                            <label for="Address2"></label>
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
    
    <!-- address script -->
    <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
    <script>
        //다음 주소 찾기 API 
        function execDaumPostcode() {
            new daum.Postcode({
                oncomplete: function(data) {
                    // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                    // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                    // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                    var fullAddr = ''; // 최종 주소 변수
                    var extraAddr = ''; // 조합형 주소 변수

                    // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                    if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                        fullAddr = data.roadAddress;

                    } else { // 사용자가 지번 주소를 선택했을 경우(J)
                        fullAddr = data.jibunAddress;
                    }

                    // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                    if(data.userSelectedType === 'R'){
                        //법정동명이 있을 경우 추가한다.
                        if(data.bname !== ''){
                            extraAddr += data.bname;
                        }
                        // 건물명이 있을 경우 추가한다.
                        if(data.buildingName !== ''){
                            extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                        }
                        // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                        fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                    }

                    // 우편번호와 주소 정보를 해당 필드에 넣는다.
                    document.getElementById('postcode').value = data.zonecode; //5자리 새우편번호 사용
                    document.getElementById('Address').value = fullAddr;

                    // 커서를 상세주소 필드로 이동한다.
                    document.getElementById('Address2').focus();
                    // 커서를 입력 가능한 상태로 만든다.
                    document.getElementById('Address2').removeAttribute('readonly');
                }
            }).open();
        };

        var doc=document;
        var id=doc.getElementById('id');
        var pwd=doc.getElementById('pwd');
        var pwdcon=doc.getElementById('pwdconfirm');
        var name1=doc.getElementById('name');
        var biryy=doc.getElementById('bir_yy');
        var birmm=doc.getElementById('bir_mm');
        var birdd=doc.getElementById('bir_dd');
        var gen=doc.getElementById('gender');
        var mail=doc.getElementById('email');
        var ph=doc.getElementById('phone');
        var add2=doc.getElementById('Address2');
        
        //input 포커스 시 해당 텍스트박스 border컬러 변경하는 함수
        function boxcolor(obj){
            obj.parentNode.style.borderColor='#095d26';
        };
        //input 포커스 아웃 시 해당 텍스트박스 border컬러 되돌리는 함수
        function offcolor(obj){
            obj.parentNode.style.borderColor='#ccc';
        };
        
        //input 포커스를 벗어나면 유효성 검사하는 함수
        function chk(obj){
            var errmsg=obj.parentNode.nextElementSibling;
            var birerr=obj.parentNode.parentNode.nextElementSibling;
            var pherr=doc.getElementById('phMsg1');
            offcolor(obj);
            
            //유효성 검사
            if(!obj.value){ //입력값이 없을 때
                if(obj===birdd||obj===birmm||obj===biryy){ //birmm 작동안됨
                    birerr.style.display='block';
                }else if(obj===ph){
                    pherr.style.display='block';  
                }else if(obj===id){ //아이디 미입력시
                    errmsg.setAttribute('class','error_msg');
                    errmsg.innerHTML="필수 정보입니다.";
                    errmsg.style.display='block';
                }else if(obj===mail||obj===add2){ //선택항목 미입력시 +조건 주소 칸의 값이 있을때에만
                    errmsg.style.display='none';
                }else{
                    errmsg.style.display='block';
                };
            }else if(obj===id){ //id check 
                var idReg=new RegExp(/^[a-z0-9_]{6,12}$/g);
                if(!idReg.test(id.value)){ //아이디 조건 불충족
                    errmsg.setAttribute('class','error_msg');
                    errmsg.innerHTML="아이디는 6~12자의 영문 소문자, 숫자와 특수기호(_)만 사용할 수 있습니다.";
                    errmsg.style.display='block';
                }else{ //아이디 조건 충족
                    errmsg.innerHTML="사용 가능한 아이디입니다.";
                    errmsg.style.display='block';
                    //조건 충족 시 class=pass_msg로 변경
                    errmsg.setAttribute('class','pass_msg');
                };
            }else if(obj===pwd){ //pwd check  
                var pwdReg=new RegExp(/^[a-zA-Z0-9!@#$%^&*]{8,16}$/g);
                var samestr=/(\w)\1\1\1/; //같은 영문자&숫자 연속 4번일때
                var samespe=/([\{\}\[\]\/?.,;:|\])*~`!^\-_+<>@\#$%&\\\=\(\'\"])\1\1\1/; // 같은 특수문자 연속 4번
                if(!pwdReg.test(pwd.value)){ //비밀번호 조건 불충족
                    errmsg.innerHTML="8~16자 영문 대 소문자, 숫자, 특수문자를 사용하세요."; obj.style.backgroundImage="url(../images/unlocked.svg)";
                    errmsg.style.display='block';
                }else if(samestr.test(pwd.value)||samespe.test(pwd.value)){
                    errmsg.innerHTML="연속으로 입력된 숫자 또는 문자가 있습니다."; obj.style.backgroundImage="url(../images/unlocked.svg)";
                    errmsg.style.display='block';     
                }else{ //비밀번호 조건 충족
                   errmsg.style.display='none'; obj.style.backgroundImage="url(../images/locked.svg)"; 
                    obj.style.backgroundSize="28px";
                };
            }else if(obj===pwdcon){ //pwd confirm check
                if(pwd.value!=pwdcon.value){//비밀번호 일치하지 않음
                    errmsg.innerHTML="비밀번호가 일치하지 않습니다.";
                    errmsg.style.display='block';
                }else{//비밀번호 일치
                    errmsg.style.display='none'; obj.style.backgroundImage="url(../images/passwordChk.svg)"; 
                    obj.style.backgroundSize="28px";
                };
            }else if(obj===name1){ //name check
                var nameReg=new RegExp(/^[가-힣A-Za-z]+$/);
                if(!nameReg.test(name1.value)){ //이름 조건 불충족 
                    errmsg.innerHTML="한글과 영문 대 소문자를 사용하세요.(숫자, 특수기호, 공백 사용 불가)"; 
                    errmsg.style.display='block';
                }else{ //이름 조건 충족
                   errmsg.style.display='none'; 
                };
            }else if(obj===biryy){ //birth year check
                var d=new Date();
                var y=d.getFullYear(); //y=현재년도
                var biryyReg=new RegExp(/^[0-9]{4}$/);
                if(!biryyReg.test(biryy.value)){ //생년 조건 불충족 
                    birerr.innerHTML="태어난 년도를 정확하게 입력해주세요.";
                    birerr.style.display='block';
                }else if(biryy.value>y||biryy.value<y-110){//현재 년도 이상 또는 110세를 넘을 때 
                    birerr.innerHTML="정말이세요?";
                    birerr.style.display='block';
                }else{//생년 조건 충족
                    birerr.style.display='none';
                };
            }else if(obj===birdd){ //birth day check
                var birddReg=new RegExp(/^[1-9]{1,2}$/);
                if(!birddReg.test(birdd.value)||birdd.value>31){ //생일 조건 불충족 
                    birerr.innerHTML="생년월일을 다시 확인해주세요.";
                    birerr.style.display='block';
                }else{//생년 조건 충족
                    birerr.style.display='none';
                };
            }else if(obj===gender){ //gender check
                if(gender.value){ //성별을 선택했을 때
                    errmsg.style.display='none'; 
                };
            }else if(obj===mail){ // email check(optional) //email 입력시에만
                var emailReg=new RegExp(/^[a-z0-9_+.-]+@([a-z0-9-]+\.)+[a-z0-9]{2,4}$/);
                if(!emailReg.test(email.value)){ //이메일 조건 불충족 
                    errmsg.innerHTML="이메일 주소를 다시 확인해주세요.";
                    errmsg.style.display='block';
                }else{ //이메일 조건 충족
                   errmsg.style.display='none'; //방법 바꾸기
                };
            }else if(obj===ph){ //phone number check
                var phoneReg=new RegExp(/(\d{3}).*(\d{3}).*(\d{4})/);
                if(!phoneReg.test(ph.value)){ //전화번호 조건 불충족 
                    pherr.innerHTML="형식에 맞지 않는 번호입니다.";
                    pherr.style.display='block';
                }else{ //전화번호 조건 충족
                   pherr.style.display='none'; 
                };
//            }else if(obj===add2){ //address check
//                if(add2.value){ //상세주소 입력 시 +조건 : 오직 주소칸 값이 있을 때에만
//                    errmsg.style.display='none';
//                };
            };
        };//function chk(obj)

        //조건을 모두 통과하면 가입이 되는 함수
        function join(){
            var errmsg=doc.querySelectorAll('.error_msg');
            var num=0; //점검용
            //1. 유효성 검사 통과 여부: errmsg의 display 상태 조회
            for(var i=0; i<errmsg.length; i++){
                var err=getComputedStyle(errmsg[i],null).display;
                if(err=='block'){ //하나라도 err메시지가 있을 경우
                    console.log('fail'); //점검용
                    return false; //멈추기
                };
            };
            //2. 필수 정보 입력칸이 다 채워졌는지 검사 & 비밀번호 일치 확인
            if(!id.value){
                id.focus();
            }else if(!pwd.value){
                pwd.focus();
            }else if(!pwdcon.value){
                pwdcon.focus();
            }else if(pwd.value!==pwdcon.value){ //비밀번호 확인 재검사
                pwdcon.focus();
            }else if(!name1.value){
                name1.focus();
            }else if(!biryy.value){
                biryy.focus();
            }else if(!birmm.value){
                birmm.focus();
            }else if(!birdd.value){
                birdd.focus();
            }else if(!gen.value){
                gen.focus();
            }else if(!ph.value){
                ph.focus();
            }else{ //위의 조건을 모두 통과 시 실행
                num=1; //점검용
                doc.join_form.submit();
            };
            
            console.log(num);//점검용 //num=1 일때 통과.
            return;
            
        };
        
    </script>
</body>
</html>
