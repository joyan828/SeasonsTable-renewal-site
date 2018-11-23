<? session_start(); ?>
<meta charset="utf-8" />
<?
    $id = $_SESSION['userid'];

    $newpass = $_POST['pwd'];
    $newname = $_POST['name'];

    $bir_yy=$_POST['bir_yy'];
    $bir_mm=$_POST['bir_mm'];
    $bir_dd=$_POST['bir_dd'];
    $newbirthday=$bir_yy."/".$bir_mm."/".$bir_dd;

    $newgender=$_POST['gender'];

    $newemail=$_POST['email'];
    $newhp=$_POST['phone'];

    $post=$_POST['post'];
    $address1=$_POST['Address'];
    $address2=$_POST['Address2'];
    $newaddress=$post."|".$address1."|".$address2;


    include "../lib/dbconn.php";
    $sql = "UPDATE member SET pass='$newpass', name='$newname', birthday='$newbirthday', gender='$newgender', email='$newemail', hp='$newhp', address='$newaddress' WHERE id='$id'";

    mysql_query($sql, $connect);
    mysql_close();

    $_SESSION['username'] = $newname; // 변경된 이름으로 세션도 업데이트

    echo("
        <script>
            location.href='../index.php';
        </script>
    ");


?>