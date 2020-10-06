<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "login";

// Create connection
$conn = new mysqli($host, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if ( isset($_POST['username'])){

    $uname = $_POST['username'];
    $passw = $_POST['password']; 

    $sql = "select * from user where username = '".$username."' AND password = '".$password."'";

    $result = mysqli_query($sql);

    if(mysqli_num_rows($result)==1){
        echo "well done!";
        exit();
    }
    else {
        echo "Failed!";
        exit();
    }
}
?>
