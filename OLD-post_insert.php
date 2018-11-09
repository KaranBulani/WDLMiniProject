<?php
$pro_title = $_POST['pro_title'];
$pro_description = $_POST['pro_description'];
$pro_skill = $_POST['pro_skill'];
$pro_time = $_POST['pro_time'];
$pro_no = mt_rand(0,255);


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

     $sql = "INSERT Into project (pro_no, pro_title, pro_description, pro_skill, pro_time) values($pro_no,'$pro_title',' $pro_description', $pro_skill, $pro_time)";
     //Prepare statement
     if($conn->query($sql)=== TRUE)
     {
     	echo "new record created";
     }
     	else
     	{
     		echo  "error" . $sql. "<br>". $conn->error;
     	}
     	$conn->close();
    }
}
else {
 echo "All field are required";
 die();
}
?>
