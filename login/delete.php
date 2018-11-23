<? session_start(); ?>
<meta charset="utf-8" />
<?
    $id = $_SESSION['userid'];

    include "../lib/dbconn.php";
    $sql="DELETE FROM member WHERE id='$id'";

    mysql_query($sql, $connect);
    mysql_close();

    unset($_SESSION['userid']);
    unset($_SESSION['username']);

    echo("
        <script>
            location.href='./member_leave_fin.php';
        </script>
    ");
?>