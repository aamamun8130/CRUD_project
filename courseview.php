<?php
include ("connection.php");
$sid1= $_POST["vsid"];
$sem = $_POST["vssem"];
echo "$sid1";
echo "$sem";
$sql = "SELECT stdid,semester,ccode,cname,ccredit from stdcourseinfo  where stdid='$sid1' and semester='$sem' ";
$result1 = mysqli_query($db,$sql);
if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    echo "<table border='1' cellspacing='0'><tr><th>Course Code</th><th>Course Name</th><th>Credit</th><th>Delete</th><th>Update</th></tr>";
    while($row = mysqli_fetch_assoc($result1)) {
        
        echo "<tr><td>" . $row["ccode"]. "</td><td>" . $row["cname"] . "</td><td>" . $row["ccredit"]. "</td><td><a href='http://localhost/MyProject/delete.php?id=".$sid1."&sem=".$sem."&code=".$row["ccode"]."&course=".$row["cname"]."&credit=".$row["ccredit"]."'>Delete</a></td><td><a href='http://localhost/MyProject/courseupdatehtml.php?id=".$sid1."&sem=".$sem."&code=".$row["ccode"]."&course=".$row["cname"]."&credit=".$row["ccredit"]."'>Update</a></td></tr>";
        //echo "name: " . $row["uname"]. " email: " . $row["uemail"]. "  password: " . $row["upassword"]. "<br>";

        
    }

    echo "</table>";
} else {
    echo "0 results";
}


mysqli_close($db);


?>