<?php
echo "delete.php";
include ("connection.php");
$id = $_GET['id'];
$sem = $_GET['sem'];
$code=$_GET['code'];
$course=$_GET['course'];
$credit=$_GET['credit'];

echo " ".$id." ".$sem." ".$code." ".$course." ".$credit." ";

$sql = "DELETE from stdcourseinfo where stdid='$id' and semester='$sem' and ccode='$code' and cname='$course'and ccredit='$credit'";
    mysqli_query($db,$sql);
    echo "Delete sucessfully ?????";

    mysqli_close($db);



?>