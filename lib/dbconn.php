<?
    $connect = mysql_connect("localhost","seasons","1234") or die("SQL Server에 연결할 수 없습니다.");
    mysql_query("set names utf8");
    mysql_select_db("seasons_db",$connect);
    
?>