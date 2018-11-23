

<? 
    session_start(); 


    $id = $_POST['id'];
    $pass = $_POST['pwd'];

    include "../lib/dbconn.php";
    $sql = "SELECT * FROM member WHERE id='$id' and pass='$pass'";
    $result = mysql_query($sql, $connect);
    $num_match = mysql_num_rows($result);

    if(!$num_match){ //로그인 아이디가 없을 떄
        echo("0");
    }else{ 
        echo("1"); //로그인 성공
    }
    
    $row = mysql_fetch_array($result);

    $_SESSION['userid'] = $row['id'];
    $_SESSION['username'] = $row['name']; 
    
   

    mysql_close();
?>

