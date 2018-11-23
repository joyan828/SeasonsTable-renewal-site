var doc = document;

//오픈 시 id에 포커스 ( FF 는 작동안됨 )
window.onload = function () {
    "use strict";
    //h2 태그의 값을 가져와 회원가입/회원정보수정 페이지 판단
    //회원정보수정 페이지일 때 자동 focus 주지 않음
    var h2=doc.getElementsByTagName('h2')[0];
    if(h2.innerHTML !== "회원정보수정"){
        doc.join_form.id.focus();
    }
};

//입력창 강조 -----------------------------*
//input 포커스: 텍스트박스 border컬러 변경
function boxcolor(obj) {
    "use strict";
    obj.parentNode.style.borderColor = '#095d26';
}

//input 포커스 아웃: 텍스트박스 border컬러 되돌림
function offcolor(obj) {
    "use strict";
    obj.parentNode.style.borderColor = '#ccc';
}

//*유효성검사를 위한 함수 --------------------------------------------------*
//아이디 체크 함수 ------------------------------------*
function idchk() {
    "use strict";
    var id = doc.join_form.id,
        errmsg = id.parentNode.nextElementSibling,
        idReg = new RegExp(/^[a-z0-9_]{6,12}$/g);

    //ID가 입력되지 않은 경우
    if (!id.value) {
        errmsg.setAttribute('class', 'error_msg');
        errmsg.innerHTML = "필수 정보입니다.";
        errmsg.style.display = 'block';
        doc.join_form.idchk.value = "";
        return;
    //ID가 조건을 충족하지 않은 경우     
    } else if (!idReg.test(id.value)) {
        errmsg.setAttribute('class', 'error_msg');
        errmsg.innerHTML = "아이디는 6~12자의 영문 소문자, 숫자와 특수기호(_)만 사용할 수 있습니다.";
        errmsg.style.display = 'block';
        doc.join_form.idchk.value = "";
    //ID의 모든 조건을 충족한 경우 - ID 중복체크
    } else {
        $.ajax({
            url: './idCheck.php',
            type: 'POST',
            data: {'id': $('#id').val()},
            dataType: 'html',
            success: function (response) {
                if (response === '1') { //아이디 중복됨
                    errmsg.setAttribute('class', 'error_msg');
                    errmsg.innerHTML = "이미 존재하는 아이디입니다.";
                    errmsg.style.display = 'block';
                    doc.join_form.idchk.value = "";
                } else if (response === '0') { //아이디 사용 가능
                    errmsg.setAttribute('class', 'pass_msg');
                    errmsg.innerHTML = "사용 가능한 아이디입니다.";
                    errmsg.style.display = 'block';
                    doc.join_form.idchk.value = "1";
                }
            }
        });//ajax 닫힘      
    }
}

//비밀번호 체크 함수 ------------------------------------*
function pwdchk() {
    "use strict";
    var pwd = doc.join_form.pwd,
        errmsg = pwd.parentNode.nextElementSibling,
        pwdReg = new RegExp(/^[a-zA-Z0-9_\W]{8,16}$/g),
        samestr = /(\w)\1\1\1/, //같은 영문자&숫자 연속 4번이상일 때
        samespe = /(\W)\1\1\1/; // 같은 특수문자 연속 4번 이상일 때

    //비밀번호가 입력되지 않았을 때
    if (!pwd.value) {
        errmsg.style.display = 'block';
        doc.join_form.pwdchk.value = "";
    //비밀번호 조건이 충족되지 않을 때
    } else if (!pwdReg.test(pwd.value)) {
        errmsg.innerHTML = "8~16자 영문 대 소문자, 숫자, 특수문자를 사용하세요.";
        pwd.style.backgroundImage = "url(../images/unlocked.svg)";
        errmsg.style.display = 'block';
        doc.join_form.pwdchk.value = "";
    //비밀번호에 연속으로 입력된 문자가 있을 때
    } else if (samestr.test(pwd.value) || samespe.test(pwd.value)) {
        errmsg.innerHTML = "연속으로 입력된 숫자 또는 문자가 있습니다.";
        pwd.style.backgroundImage = "url(../images/unlocked.svg)";
        errmsg.style.display = 'block';
        doc.join_form.pwdchk.value = "";
    //비밀번호 조건을 모두 충족했을 때
    } else {
        errmsg.style.display = 'none';
        pwd.style.backgroundImage = "url(../images/locked.svg)";
        pwd.style.backgroundSize = "28px 28px";
        doc.join_form.pwdchk.value = "1";
    }
}

//비밀번호 확인 함수 ------------------------------------*
function pwdconchk() {
    "use strict";
    var pwd = doc.join_form.pwd,
        pwdcon = doc.join_form.pwdconfirm,
        errmsg = pwdcon.parentNode.nextElementSibling;

    //비밀번호 확인이 입력되지 않을 때
    if (!pwdcon.value) {
        errmsg.style.display = 'block';
    //비밀번호와 비밀번호확인이 일치하지 않을 때
    } else if (pwd.value !== pwdcon.value) {
        errmsg.innerHTML = "비밀번호가 일치하지 않습니다.";
        errmsg.style.display = 'block';
    //비밀번호와 비밀번호확인이 일치할 때
    } else {
        errmsg.style.display = 'none';
        pwdcon.style.backgroundImage = "url(../images/passwordChk.svg)";
        pwdcon.style.backgroundSize = "28px 28px";
    }
}

//이름 확인 함수 ------------------------------------*
function namechk() {
    var name1 = doc.join_form.name,
        errmsg = name1.parentNode.nextElementSibling,
        nameReg = new RegExp(/^[가-힣A-Za-z]+$/);
    
    //이름을 입력하지 않았을 때
    if (!name1.value) {
        errmsg.style.display = 'block';
        doc.join_form.namechk.value = "";
    //이름 조건을 만족하지 않을 때
    } else if (!nameReg.test(name1.value)) {
        errmsg.innerHTML = "한글과 영문 대 소문자를 사용하세요.(숫자, 특수기호, 공백 사용 불가)";
        errmsg.style.display = 'block';
        doc.join_form.namechk.value = "";
    //이름 조건을 만족할 때
    } else {
        errmsg.style.display = 'none';
        doc.join_form.namechk.value = "1";
    }
}


//생년 확인 함수 ------------------------------------*
function yychk() {
    var biryy = doc.join_form.bir_yy,
        birerr = doc.getElementById('birMsg'),
        d = new Date(),
        y = d.getFullYear(), //y=현재년도
        biryyReg = new RegExp(/^[0-9]{4}$/);
    
    //생년이 입력되지 않았을 때
    if (!biryy.value) {
        birerr.innerHTML = "필수 정보입니다.";
        birerr.style.display = 'block';
        doc.join_form.yychk.value = "";
    //생년 조건을 충족하지 않을 때(숫자가 아닐 떄)
    } else if (!biryyReg.test(biryy.value)) {
        birerr.innerHTML = "태어난 년도를 정확하게 입력해주세요.";
        birerr.style.display = 'block';
        doc.join_form.yychk.value = "";
    //나이 조건 : 현재년도 이후 또는 현재년도 -110이 될 때는 알림
    } else if (biryy.value > y || biryy.value < y - 110) {
        birerr.innerHTML = "정말이세요?";
        birerr.style.display = 'block';
        doc.join_form.yychk.value = "";
    //생년 조건을 충족할 때
    } else {
        birerr.style.display = 'none';
        doc.join_form.yychk.value = "1";
    }
}

//생월 확인 함수 ------------------------------------*
function mmchk() {
    var birmm = doc.join_form.bir_mm,
        birerr = doc.getElementById('birMsg');
    
    //생월 조건을 충족하지 않을 때
    if (!birmm.value) {
        birerr.innerHTML = "생년월일을 다시 확인해주세요.";
        birerr.style.display = 'block';
    //생월 조건을 충족할 때
    } else {
        if (doc.join_form.yychk.value === "1") {
            birerr.style.display = 'none';
        }
    }
}
//그레고리력의 정확한 윤년 규칙은 다음과 같다.

//1.서력 기원 연수가 4로 나누어떨어지는 해는 윤년으로 한다.(1992년, 1996년, 2004년, 2008년, 2012년, 2016년, 2020년 …) 
//2.이 중에서 100으로 나누어떨어지는 해는 평년으로 한다.(1900년, 2100년, 2200년, 2300년, 2500년 …)
//3.그중에 400으로 나누어떨어지는 해는 윤년으로 둔다.(1600년, 2000년, 2400년 …)

//생일 확인 함수 ------------------------------------*
function ddchk() {
    //선택한 달의 index
    var biryy = doc.join_form.bir_yy.value;
    var monthIdx = doc.join_form.bir_mm.value-1;
    var birdd = doc.join_form.bir_dd,
        birerr = doc.getElementById('birMsg'),
        birddReg = new RegExp(/^\d{1,2}$/),
        //해당 달의 마지막 날을 설정
        lastday = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    
    //윤년을 계산하여 2월의 마지막 날 변경함
    //4로 나누어 떨어지는 해는 윤년, 그 중에 100으로 나누어 떨어지는 해는 평년, 그 중에 400으로 나누어 떨어지는 해는 윤년이다.
    if ((biryy % 4 === 0)&&(biryy % 100 !== 0) || (biryy % 400 === 0)){
        lastday[1] = 29;
    }
  
    if (!birddReg.test(birdd.value) || birdd.value > lastday[monthIdx] || birdd.value < 1) {
    //생일 조건을 충족하지 않을 때 
        birerr.innerHTML = "생년월일을 다시 확인해주세요.";
        birerr.style.display = 'block';
        doc.join_form.ddchk.value = "";
    //생일 조건을 충족할 때
    } else {
        if (doc.join_form.yychk.value === "1") {
            birerr.style.display = 'none';
        }
        doc.join_form.ddchk.value = "1";
    }
}

//성별 확인 함수 ------------------------------------*
function genchk() {
    var gen = doc.join_form.gender,
        errmsg = gen.parentNode.nextElementSibling;
    
    //성별에 입력값이 없을 때
    if (!gen.value) {
        errmsg.style.display = 'block';
    //값을 선택했을 때
    } else {
        errmsg.style.display = 'none';
    }
}

//이메일 확인 함수 ------------------------------------*
function mailchk() {
    var mail = doc.join_form.email,
        errmsg = mail.parentNode.nextElementSibling,
        emailReg = new RegExp(/^[a-z0-9_+.-]+@([a-z0-9-]+\.)+[a-z0-9]{2,4}$/);
    
    //이메일 조건을 충족하지 않을 때
    if (!mail.value) {
        //프로모션에 동의했을때 : 메일입력 필수
        if (doc.join_form.promo_ok.value === 'Y') {
            doc.join_form.mailchk.value = "";
            errmsg.innerHTML = "프로모션 메일 수신을 위해 이메일을 입력해주세요.";
            errmsg.style.display = 'block';
            
        //동의 안했을때 : 메일입력 선택
        }else{
            //선택 항목이므로 입력하지 않을 경우에도 hidden 은 통과값 1을 준다.
            errmsg.style.display = 'none';
            doc.join_form.mailchk.value = "1";
        }
        
    } else if (!emailReg.test(mail.value)) {
        errmsg.innerHTML = "이메일 주소를 다시 확인해주세요.";
        errmsg.style.display = 'block';
        doc.join_form.mailchk.value = "";
    //이메일 조건을 충족했을 때
    } else {
        errmsg.style.display = 'none';
        doc.join_form.mailchk.value = "1";
    }
}

//휴대폰 확인 함수 ------------------------------------*
function phchk() {
    var ph = doc.join_form.phone,
        pherr = doc.getElementById('phMsg1'),
        phoneReg = new RegExp(/^01(0|1|6|7|8|9?)-?([0-9]{3,4})-?([0-9]{4})$/);

    //전화번호 조건이 충족되지 않을 때
    if (!ph.value) {
        pherr.innerHTML = "필수 정보입니다.";
        pherr.style.display = 'block';
        doc.join_form.phchk.value = "";
    } else if (!phoneReg.test(ph.value)) {
        pherr.innerHTML = "형식에 맞지 않는 번호입니다.";
        pherr.style.display = 'block';
        doc.join_form.phchk.value = "";
    } else { //전화번호 조건 충족
        pherr.style.display = 'none';
        doc.join_form.phchk.value = "1";
    }
}

//다음 주소 찾기 API ---------------------------------* 
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
            if (data.userSelectedType === 'R') {
                //법정동명이 있을 경우 추가한다.
                if (data.bname !== '') {
                    extraAddr += data.bname;
                }
                // 건물명이 있을 경우 추가한다.
                if (data.buildingName !== '') {
                    extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                }
                // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                fullAddr += (extraAddr !== '' ? ' (' + extraAddr + ')' : '');
            }

            // 우편번호와 주소 정보를 해당 필드에 넣는다.
            doc.getElementById('postcode').value = data.zonecode; //5자리 새우편번호 사용
            doc.getElementById('Address').value = fullAddr;

            // 커서를 상세주소 필드로 이동한다.
            doc.getElementById('Address2').focus();
            // 커서를 입력 가능한 상태로 만든다.
            doc.getElementById('Address2').removeAttribute('readonly');
        }
    }).open();
}

//*유효성검사를 위한 함수 끝--------------------------------------------------*


//유효성 검사 -----------------------------*
//input 포커스를 벗어나면 유효성 검사
function chk(obj) {
    "use strict";
    var id = doc.join_form.id,
        pwd = doc.join_form.pwd,
        pwdcon = doc.join_form.pwdconfirm,
        name1 = doc.join_form.name,
        biryy = doc.join_form.bir_yy,
        birmm = doc.join_form.bir_mm,
        birdd = doc.join_form.bir_dd,
        gen = doc.join_form.gender,
        mail = doc.join_form.email,
        ph = doc.join_form.phone;
    
    offcolor(obj);

    //ID를 체크한다. 
    if (obj === id) {
        idchk();
    //비밀번호를 체크한다.
    } else if (obj === pwd) {
        pwdchk();
    //비밀번호 확인을 체크한다.
    } else if (obj === pwdcon) {
        pwdconchk();
    //이름을 체크한다.
    } else if (obj === name1) {
        namechk();
    //생년을 체크한다.
    } else if (obj === biryy) {
        yychk();
    //생월을 체크한다.
    } else if (obj === birmm) {
        mmchk();
    //생일을 체크한다.
    } else if (obj === birdd) {
        ddchk();
    //성별을 체크한다.
    } else if (obj === gen) {
        genchk();
    //메일주소를 체크한다(선택항목)
    } else if (obj === mail) {
        mailchk();
    //휴대폰 번호를 체크한다.
    } else if (obj === ph) {
        phchk();
    }
} //chk(obj)

//회원가입(join_form.php)----------------------------------------*
//'가입하기'버튼을 눌렀을 때: 
//전체 유효성 검사하고 통과하지 못한 항목에는 focus를 주어 입력을 유도한다.
function join() {
    //전체 항목을 검사하고 알림 -----------------------------*
    idchk();
    pwdchk();
    pwdconchk();
    namechk();
    yychk();
    mmchk();
    ddchk();
    genchk();
    mailchk();
    phchk();
    
    //유효성검사 통과여부확인: input:hidden의 value 값이 1이 아닌 경우 체크--------------------------*
    
    //아이디: idchk의 hidden 값을 검사한다.
    if (!doc.join_form.idchk.value) {
        doc.join_form.id.focus();
        
    //비밀번호: pwdchk의 hidden 값을 검사한다.
    } else if (!doc.join_form.pwdchk.value) {
        doc.join_form.pwd.focus();
        
    //비밀번호 확인: hidden 사용하지 않고, 값이 다를 경우 pwd에 포커스.
    } else if (doc.join_form.pwd.value !== doc.join_form.pwdconfirm.value) {
        doc.join_form.pwd.focus();
        
    //이름: namechk의 hidden 값을 검사한다.
    } else if (!doc.join_form.namechk.value) {
        doc.join_form.name.focus();
        
    //생년: yychk의 hidden 값을 검사한다.
    } else if (!doc.join_form.yychk.value) {
        doc.join_form.bir_yy.focus();
        
    //생월: hidden 사용하지 않고, 입력값이 있는지만 확인한다.
    } else if (!doc.join_form.bir_mm.value) {
        doc.join_form.bir_mm.focus();
        
    //생일: ddchk의 hidden 값을 검사한다.
    } else if (!doc.join_form.ddchk.value) {
        doc.join_form.bir_dd.focus();
        
    //성별: hidden 사용하지 않고, 입력값이 있는지만 확인한다.
    } else if (!doc.join_form.gender.value) {
        doc.join_form.gender.focus();
        
    //메일(선택): mailchk의 hidden 값을 검사한다. (기본값 1)
    } else if (!doc.join_form.mailchk.value) {
        doc.join_form.email.focus();
        
    //휴대폰: phchk의 hidden 값을 검사한다.
    } else if (!doc.join_form.phchk.value) {
        doc.join_form.phone.focus();
        
    //모든 조건 통과 : 가입하기
    } else {
        doc.join_form.submit();
    }
    
} //join();

//정보수정(member_form_modify.php)----------------------------------------*
//'변경하기'버튼을 눌렀을 때: 
//아이디 제외 전체 유효성 검사하고 통과하지 못한 항목에는 focus를 주어 입력을 유도한다.
function change() {
    //아이디를 제외한 전체 항목을 검사하고 알림 -----------------------------*
    "use strict";
    pwdchk();
    pwdconchk();
    namechk();
    yychk();
    mmchk();
    ddchk();
    genchk();
    mailchk();
    phchk();
    
    //유효성검사 통과여부확인: input:hidden의 value 값이 1이 아닌 경우 체크--------------------------*
     
    //비밀번호: pwdchk의 hidden 값을 검사한다.
    if (!doc.join_form.pwdchk.value) {
        doc.join_form.pwd.focus();
        
    //비밀번호 확인: hidden 사용하지 않고, 값이 다를 경우 pwd에 포커스.
    } else if (doc.join_form.pwd.value !==                   doc.join_form.pwdconfirm.value) {
        doc.join_form.pwd.focus();
        
    //이름: namechk의 hidden 값을 검사한다.
    } else if (!doc.join_form.namechk.value) {
        doc.join_form.name.focus();
        
    //생년: yychk의 hidden 값을 검사한다.
    } else if (!doc.join_form.yychk.value) {
        doc.join_form.bir_yy.focus();
        
    //생월: hidden 사용하지 않고, 입력값이 있는지만 확인한다.
    } else if (!doc.join_form.bir_mm.value) {
        doc.join_form.bir_mm.focus();
        
    //생일: ddchk의 hidden 값을 검사한다.
    } else if (!doc.join_form.ddchk.value) {
        doc.join_form.bir_dd.focus();
        
    //성별: hidden 사용하지 않고, 입력값이 있는지만 확인한다.
    } else if (!doc.join_form.gender.value) {
        doc.join_form.gender.focus();
        
    //메일(선택): mailchk의 hidden 값을 검사한다. (기본값 1)
    } else if (!doc.join_form.mailchk.value) {
        doc.join_form.email.focus();
        
    //휴대폰: phchk의 hidden 값을 검사한다.
    } else if (!doc.join_form.phchk.value) {
        doc.join_form.phone.focus();
        
    //모든 조건 통과 : 정보수정하기
    } else {
        doc.join_form.submit();
    }
}


