<?php require_once('connect.php'); ?>
<?php
if (isset($_POST['submit'])) {
    $password = $_POST['pwd'];
    $cpassword = $_POST['cpwd'];

    if ($password == $cpassword) {

        $username = $_POST['name'];
        $email = $_POST['email'];
    
       $pwd = sha1($password);
        
        
        $query = "INSERT INTO users (user_name,email,password) VALUES('{$username}','{$email}','{$pwd}')";
$result = mysqli_query($connection,$query);

if ($result) {
    header('Location: login.html');
} else {
    echo "Database query failed";
}
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style2.css" rel="stylesheet">
        <script src="js/validation.js"></script>
        <title>SL Quiz | Register</title>
      
    </head>
    <body>
        <div class="container">
            <form id="contact" action="register.php" method="post">
                <h3 style="float:right;font-weight:bold;color: rgb(206, 92, 39);"s>Register</h3>
                <fieldset>
                    <input placeholder="User name" type="text" name="name" required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="e-mail" name="email" onkeyup='check();' id="email" type="text"  required>
                </fieldset>
                <fieldset>
                    <input placeholder="Password" name="pwd" type="password" id="password" onkeyup='check();' />
                </fieldset>
                <fieldset>
                    <input placeholder="Conform Password" name="cpwd" id="confirm_password" onkeyup='check();' type="password" />
                    <p id="message"></p>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                    <a href="index.html" style="color: crimson"; class="button">Back to Home</a>
                </fieldset>
            </form>
        </div>
    </body>
</html>
<?php mysqli_close($connection); ?> 