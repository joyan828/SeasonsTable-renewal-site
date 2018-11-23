<?
    // ID 중복 체크
    $id = $_POST['id'];
    
    include "../lib/dbconn.php"; 
    $sql = "SELECT * FROM member WHERE id='$id'";
    $result = mysql_query($sql, $connect);        
    $num_record = mysql_num_rows($result);
        
    if($num_record) { 
        echo (1); //이미 존재하는 아이디.
    }else {
        echo (0); //사용가능한 아이디.
    }
        
    mysql_close();

?>