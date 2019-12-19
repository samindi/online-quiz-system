<?php require_once('connect.php'); ?>
<?php 

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SL Quiz | Results</title>
</head>
<body>
<table cellpadding="1" cellspacing="2" border="1" style="text-align:center">
        <tr>
            <th>Question No</th>
            <th>Question</th>
            <th>Your Answer</th>
            <th>Correct Answer</th>
            <th>Result</th>
            
        </tr>
<?php
if(isset($_POST['result'])) {

 for($x=0;$x<count($_SESSION['answers']);$x++){
     $y=$x+1;
     $result;
     if($_SESSION["answers"][$x]==$_POST['ans'.$y]){
         $result="Correct";
     }
     else{$result="Wrong";}
    //echo $_SESSION["questions"][$x]." ";
    //echo $_SESSION["answers"][$x]." ";
    //echo $_POST['ans'.$y]."<br>";
    ?>
<tr>
                    <td><?php echo $y; ?></td>
                    <td><?php echo $_SESSION["questions"][$x]; ?></td>
                    <td><?php echo $_POST['ans'.$y]; ?></td>
                    <td><?php echo  $_SESSION["answers"][$x]; ?></td>
                    <td><?php echo $result; ?></td>
                </tr>


    <?php
 }
}

?>
</body>
</html>


<?php mysqli_close($connection); ?>