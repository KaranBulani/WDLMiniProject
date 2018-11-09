<?php
$username = $_POST['username'];
$password = md5($_POST['password']);
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$class= $_POST['class'];
$roll_no= $_POST['roll_no'];
//$assigned = $_POST['assigned'];
$skillk = $_POST['skillk'];
$des = $_POST['des'];
$title1 = $_POST['title1'];
$description1 = $_POST['description1'];
$title2 = $_POST['title2'];
$description2 = $_POST['description2'];



    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "freelancer";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error())
    {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else
    {
     $sql = "INSERT Into user (username, password, name, email, dob, gender, class, roll_no, skillk, des, title1, description1, title2,description2) values('$username','$password','$name','$email','$dob','$gender','$class',$roll_no,'$skillk','$des','$title1','$description1','$title2','$description2')";
     if($conn->query($sql)=== TRUE)
     {
     	//echo "new record created";
		header("location:browse_projects.php");
     }
     	else
     	{
     		echo  "error" . $sql. "<br>". $conn->error;
     	}
     	$conn->close();
    }


?>
