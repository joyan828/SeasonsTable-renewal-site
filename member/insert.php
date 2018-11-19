<meta charset="utf-8">
<?

    $id=$_POST['id'];
    $pass=$_POST['pwd'];
    $name=$_POST['name'];

    $bir_yy=$_POST['bir_yy'];
    $bir_mm=$_POST['bir_mm'];
    $bir_dd=$_POST['bir_dd'];
    $birthday=$bir_yy."/".$bir_mm."/".$bir_dd;

    $gender=$_POST['gender'];
    if($gender==='0'){
        $gender='F';
    }else{
        $gender='M';
    };

    $email=$_POST['email'];
    $hp=$_POST['phone'];

    $post=$_POST['post'];
    $address1=$_POST['Address'];
    $address2=$_POST['Address2'];
    $address="(".$post.")".$address1.$address2;
    
    $regist_day=date("Y-m-d (H:i)");
    $promo_ok=$_POST['promo_ok'];
        
    $sql="INSERT INTO member(id, pass, name, birthday, gender, email, hp, address, regist_day, promo_ok) VALUES ('$id','$pass','$name','$birthday','$gender','$email','$hp','$address','$regist_day','$promo_ok')";

    include "../lib/dbconn.php";
    $result = mysql_query($sql,$connect);

    mysql_close();

    echo("
        <script>
            location.href='./join_success.php?name=$name&id=$id';
        </script>    
    ");

?>