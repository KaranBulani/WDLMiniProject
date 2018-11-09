<?php

include('sessions.php');

$pro_title = $_POST['pro_title'];
$pro_description = $_POST['pro_description'];
$pro_skill = $_POST['pro_skill'];
$pro_time = $_POST['pro_time'];
$username = $_SESSION['username'];
$uid = $_SESSION['uid'];

if (!empty($pro_time) || !empty($pro_skill) || !empty($pro_title) || !empty($pro_description))
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

	 $sql1 = mysqli_query($db,"select max(pro_no) as max_pro_no from project");
     $row = mysqli_fetch_array($sql1, MYSQLI_ASSOC);
	 $pro_no = $row['max_pro_no']+1;
	 
     $sql = "INSERT Into project (pro_title, pro_description, pro_skill, pro_time, uid, pro_no) values('$pro_title',' $pro_description', $pro_skill, $pro_time, $uid, $pro_no)";
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
