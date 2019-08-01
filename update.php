<?php
echo "update php page";
include ("connection.php");
$id = $_POST['id'];
$sem = $_POST['semi'];
$oldcode=$_POST['oldcode'];
$oldcourse=$_POST['oldcourse'];
$oldcredit=$_POST['oldcredit'];
$newcode = $_POST['upccode'];
$newcourse = $_POST['upcname'];
$newcredit = $_POST['upccredit'];

echo " ". $id . " ".$sem. " " .$oldcode. " ".$oldcourse. " ".$oldcredit. " ";
echo " ".$newcode. " ".$newcourse. " ".$newcredit. " ";
if($newcode != "" && $newcourse != "" && $newcredit != ""){
    $sql = "UPDATE stdcourseinfo set ccode='$newcode' , cname='$newcourse' , ccredit='$newcredit' where stdid='$id' and semester='$sem' and ccode='$oldcode' and cname='$oldcourse'and ccredit='$oldcredit'";
    mysqli_query($db,$sql);
    echo "new code credit course update sucessful ?????";

}
else if($newcode != "" && $newcourse != ""){
    $sql = "UPDATE stdcourseinfo set ccode='$newcode' , cname='$newcourse' where stdid='$id' and semester='$sem' and ccode='$oldcode' and cname='$oldcourse'and ccredit='$oldcredit'";
    mysqli_query($db,$sql);
    echo "new code course update sucessful ?????";
 } else if($newcode != "" && $newcredit != ""){
    $sql = "UPDATE stdcourseinfo set ccode='$newcode' , ccredit='$newcredit' where stdid='$id' and semester='$sem' and ccode='$oldcode' and cname='$oldcourse'and ccredit='$oldcredit'";
    mysqli_query($db,$sql);
    echo "new code credit  update sucessful ?????";

} else if( $newcourse != "" && $newcredit != ""){
     $sql = "UPDATE stdcourseinfo set cname='$newcourse' , ccredit='$newcredit' where stdid='$id' and semester='$sem' and ccode='$oldcode' and cname='$oldcourse'and ccredit='$oldcredit'";
     mysqli_query($db,$sql);
     echo "new credit course update sucessful ?????";

 }  else if($newcode != ""){
     $sql = "UPDATE stdcourseinfo set ccode='$newcode'  where stdid='$id' and semester='$sem' and ccode='$oldcode' and cname='$oldcourse'and ccredit='$oldcredit'";
     mysqli_query($db,$sql);
     echo "new code update sucessful ?????";

 } else if($newcourse != ""){
    $sql = "UPDATE stdcourseinfo set cname='$newcourse' where stdid='$id' and semester='$sem' and ccode='$oldcode' and cname='$oldcourse'and ccredit='$oldcredit'";
    mysqli_query($db,$sql);
    echo "new course update sucessful ?????";
} else if($newcredit != ""){
    $sql = "UPDATE stdcourseinfo set ccredit='$newcredit' where stdid='$id' and semester='$sem' and ccode='$oldcode' and cname='$oldcourse'and ccredit='$oldcredit'";
    mysqli_query($db,$sql);
    echo "new credit update sucessful ?????";
 } else {
     echo "All feild empty!!!!!";
 }

 mysqli_close($db);

?>