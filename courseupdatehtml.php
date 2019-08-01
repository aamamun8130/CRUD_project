<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
echo "courseupdatehtml.php page";
include ("connection.php");
$id = $_GET['id'];
$sem = $_GET['sem'];
$code=$_GET['code'];
$course=$_GET['course'];
$credit=$_GET['credit'];

echo " ".$id." ".$sem." ".$code." ".$course." ".$credit." ";

?>
<form method="post" action='update.php'>
    <div style="background-color: lightgrey; height: 500px; width: 700px; ">
        <input type="hidden" value="<?php echo $id ?>" name="id">
        <input type="hidden" value="<?php echo $sem ?>" name="semi">
        <input type="hidden" value="<?php echo $code ?>" name="oldcode">
        <input type="hidden" value="<?php echo $course ?>" name="oldcourse">
        <input type="hidden" value="<?php echo $credit ?>" name="oldcredit">

        Course Name: <input type="text" placeholder="Enter Course Name" name="upcname"/>
        <br>Course code: <input type="text" placeholder="Enter Course Code" name="upccode"/>
        <br>Course Credit: <input type="text" placeholder="Enter Course Credit" name="upccredit"/>




    <br> <button type="submit">Update</button>


    </div>
    </form>

</body>
</html>