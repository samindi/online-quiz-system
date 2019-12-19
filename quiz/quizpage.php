<?php require_once('connect.php'); ?>
<?php 

session_start();

if ($_SESSION['uname'] == '') {
    header("location: index.html");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style3.css" rel="stylesheet">
    <title>SL Quiz</title>
</head>
<body>
    <div class="header">  
        <h1>Quizes</h1>
 </div> 

 <form action="result.php" method="POST">
 <?php
 
 $a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15 );
 $count=0;
 $_SESSION['answers'] = array();
 $_SESSION['questions'] =array();
 shuffle($a);
 $b = array();

 for($i=0;$i<15;$i++){$b[$i] = $a[$i];}

 for ($x = 0; $x < count($b); $x++) {
     $count++;
     $chosing = "select * from questions where id='{$b[$x]}'";
     $result = mysqli_query($connection, $chosing);
     $rows = mysqli_fetch_assoc($result);

    
     array_push($_SESSION['answers'],$rows['answer']);
     array_push($_SESSION['questions'],$rows['question']);

     ?>
    <div class="Box box-1">
        <h3><?php echo "Question:".$count." ".$rows['question']; ?></h3><br/>
        <input type ="radio" name = "<?php echo 'ans'.$count; ?>" value="<?php echo $rows['ans_one']; ?>"> <?php echo $rows['ans_one']; ?><br/>
        <input type ="radio" name = "<?php echo 'ans'.$count; ?>" value = "<?php echo $rows['ans_two']; ?>"> <?php echo $rows['ans_two']; ?><br/>
        <input type ="radio" name = "<?php echo 'ans'.$count; ?>" value = "<?php echo $rows['ans_three']; ?>"> <?php echo $rows['ans_three']; ?><br/>
        <input type ="radio" name = "<?php echo 'ans'.$count; ?>" value = "<?php echo $rows['ans_four']; ?>"><?php echo $rows['ans_four']; ?><br/>

    </div>
   
<?php
 }
 ?>
 <div class="btn">
    <input type="submit" name="result" id="result" value="Submit Answers">
 </div>
 
 </form>
 <br/><br/>
</body>
</html>
<?php mysqli_close($connection); ?> 