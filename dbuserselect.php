<?php

// $host = 'localhost';
// $username = 'root';
// $password = '';
// $db = 'appdata';

// $db = new mysqli($host,$username,$password,$db) or die("Not connected!!!!");

include ('connection.php');

$sql = "SELECT uname,uemail,upassword,uage,ugender,ureligion,constatus FROM usersinfo";
$result = mysqli_query($db, $sql);

$userEmail = $_POST["un"];
$userPassword = $_POST["pa"];
$checker = 0;

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table border='1' cellspacing='0'><tr><th>Name</th><th>Email</th><th>Password</th><th>Delete</th><th>Update</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        
        echo "<tr><td>" . $row["uname"]. "</td><td>" . $row["uemail"] . "</td><td>" . $row["upassword"]. "</td><td><a href='http://localhost/MyProject/delete.php?email=" . $row['uemail'] . "'>Delete</a></td><td><a href='http://localhost/MyProject/update.php?email=" . $row['uemail'] . "'>Update</a></td></tr>";
        //echo "name: " . $row["uname"]. " email: " . $row["uemail"]. "  password: " . $row["upassword"]. "<br>";

        if($userEmail==$row["uemail"] && $userPassword==$row["upassword"]){
            $checker = 1;
            header("location: test.php");
            break;

            
        }

        
    }

    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($db);
// if($checker==0){
//     header("location: loginform.html");

// }


?>