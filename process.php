<?php  session_start();    

file_put_contents("internship-email.json", json_encode($_POST)."\r\n",FILE_APPEND);
file_put_contents("internship-email.txt", $_POST['email']."\r\n",FILE_APPEND);
$_SESSION['submit'] = "done";
header("Location: index.php");

