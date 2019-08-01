<?php
include ("connection.php");
$stdid = $_POST["sid"];
$semester = $_POST["ssem"];
$ccode = $_POST["sccode"];
$cname = $_POST["scname"];
$ccredit = $_POST["sccredit"];
echo "$stdid";
echo "$semester";
echo "$ccode";
echo "$cname";
echo "$ccredit";

$sql = "INSERT INTO stdcourseinfo (stdid,semester,ccode,cname,ccredit) VALUES ('$stdid','$semester','$ccode','$cname','$ccredit')";
mysqli_query($db,$sql);
mysqli_close($db);

?>