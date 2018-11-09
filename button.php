<?php
$username = $_SESSION['username'];
$pid = $_POST['pid'];

 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "freelancer";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else {

     $sql1 = "INSERT Into project (assigned) values(1) WHERE pid=$pid";
     $sql2 = "INSERT INTO users (assigned_pid) values($pid) where username = $username"
     //Prepare statement
     if($conn->query($sql1)=== TRUE && $conn->query($sql2)=== TRUE)
     {
     	echo "new record created";
     }
     	else
     	{
     		echo  "error" . $sql. "<br>". $conn->error;
     	}
     	$conn->close();
    }

?>
