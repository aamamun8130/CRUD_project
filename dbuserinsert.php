<?php
session_start();

include ('connection.php');

$uname = $_POST["fname"];
$uemail = $_POST["email"];
$upassword = $_POST["pass"];
$uage = $_POST["age"];
$ugender = $_POST["gender"];
$ureligion = $_POST["religion"];
$constatus = $_POST["term"];
$sql = "INSERT INTO usersinfo (uname,uemail,upassword,uage,ugender,ureligion,constatus) VALUES ('$uname','$uemail','$upassword','$uage','$ugender','$ureligion','$constatus')";
mysqli_query($db,$sql);
mysqli_close($db);
//header("location: test.php");

?>