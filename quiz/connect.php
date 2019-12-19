<?php

$connection = mysqli_connect('localhost','root','','quiz_app');

if (mysqli_connect_errno()) {
    die('Database Connection failed'.mysqli_connect_error());
} else {
    //echo "Connection Successful";
}

?>