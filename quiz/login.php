<?php require_once('connect.php'); ?>
<?php


session_start();

    if(isset($_POST['login'])) {
    $uname = $_POST['name'];
    $pwd = $_POST['pwd'];
    $pass = sha1($pwd);

$query="SELECT * FROM users WHERE user_name='".$uname."' AND password='".$pass."'";
$result=mysqli_query($connection,$query);

if ($result->num_rows>0) {
    while($row=$result->fetch_assoc()){
        $_SESSION['uname'] = $row['user_name'];
        $_SESSION['email'] = $row['email'];
          
    }
}

$validity = mysqli_num_rows($result);
//printf("Result set has %d rows.\n", $validity);


if($validity==1){

    header("Location: quizpage.php");
    exit();
}
else{
    
    header("Location: login.php");

}


    }
    else{

    }


?>
