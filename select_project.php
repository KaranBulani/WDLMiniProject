<?php

include('sessions.php');

$pid = $_POST['pid'];
$uid = $_SESSION['uid'];

if (!empty($pid))
{
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
 
     $sql = "UPDATE USER SET PID = ($pid) where uid = $uid";
     //Prepare statement
     if($conn->query($sql)=== TRUE)
     {
     	//echo "new record created";
		header("location:myprojects.php");
     }
     else
     	{
     		echo  "error" . $sql. "<br>". $conn->error;
     	}
     	$conn->close();
		die();
    }
    //$sql2 ="SELECT pid from project where pro_description=$pro_description"
    //$sql3 = "INSERT INTO user (myproject_pid) values ($sql2) where username=$username"
}
else 
{
	echo  "Fatal Error - Please check with the website owner";
}
die();
?>
