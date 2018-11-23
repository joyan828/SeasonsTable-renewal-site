<?  
 $name=$_REQUEST['name'];
 $id=$_REQUEST['id'];
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">	
	<title> 계절밥상 회원가입을 축하합니다!</title>
    <link rel="shortcut icon" href="../images/favicon/favicon.ico">
	<link rel="stylesheet" href="../css/common.css" />
	<link rel="stylesheet" href="../css/join.css" />
	<link rel="stylesheet" href="//cdn.jsdelivr.net/font-iropke-batang/1.2/font-iropke-batang.css">	
	<script src="../js/jquery-2.1.1.min.js"></script>
	<script src="../js/jquery-ui.min.js"></script>
	<script src="../js/jquery.easing.1.3.js"></script>
	<script src="../js/prefixfree.min.js"></script>
	<script src="../js/common.js"></script>

</head>

<body>
    <!-- header -->
    <header>
        <? include "../lib/header02.php"; ?>
    </header>
    <!--// header ending -->
    
    <!-- section -->
    <section class="bt230 welcome">
        <h2>환영합니다!</h2>
        <p><span><?=$_REQUEST['name']?>&nbsp;</span>님, 회원가입을 축하합니다.<br>
        계절밥상의 새로운 아이디는 <span class="green"><?=$_REQUEST['id']?>&nbsp;</span>입니다.</p>
        <div id="login_btn" class="btn"><a href="../login/login_form.php">로그인</a></div>
        <div id="main_btn" class="btn"><a href="../index.php">홈으로</a></div>
    </section>
    <!-- //section ending-->
    <!-- footer -->
    <footer>
       <? include "../lib/footer02.php"; ?>
    </footer>
    <!-- //footer ending -->
</body>
</html>
