<?php  session_start();    

file_put_contents("data.json", json_encode($_POST)."\r\n",FILE_APPEND);
file_put_contents("email.txt", $_POST['email']."\r\n",FILE_APPEND);
$_SESSION['submit'] = "done";
header("Location: index.php");

