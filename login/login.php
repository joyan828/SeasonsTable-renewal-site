<meta charset="utf-8" />

<? 
    session_start(); 


    $id = $_POST['id'];
    $pass = $_POST['pwd'];

    include "../lib/dbconn.php";
    $sql = "SELECT * FROM member WHERE id='$id' and pass='$pass'";
    $result = mysql_query($sql, $connect);
    $num_match = mysql_num_rows($result);

    if(!$num_match){
        echo("
            <script>
                window.alert('아이디 또는 비밀번호가 없습니다.');
                history.go(-1);
            </script>
        ");
    }
    
    $row = mysql_fetch_array($result);

    $_SESSION['userid'] = $row['id'];
    $_SESSION['username'] = $row['name'];
    
    echo("
        <script>
            location.href='../index.php';
        </script>
    ");

    mysql_close();
?>

