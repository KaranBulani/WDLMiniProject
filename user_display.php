<?php
	include('sessions.php');
    $x = $_SESSION['username'];
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "freelancer";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else
    {
     $sql = "SELECT uid, username, name, email, dob, gender, class, roll_no, skillk, des, title1, description1, title2, description2 FROM user WHERE username = '$x' ";
     $result = $conn->query($sql);

     while($row = $result->fetch_assoc())
     {
       echo $row["uid"];
       echo $row["username"];
       echo $row["name"];
       echo $row["email"];
       echo $row["dob"];
	   echo $row["gender"];
	   echo $row["class"];
	   echo $row["roll_no"];
       echo $row["skillk"];
	   echo $row["des"];
	   echo $row["title1"];
	   echo $row["description1"];
	   echo $row["title2"];
	   echo $row["description2"];
	   

      }
     //Prepare statement

     	$conn->close();
    }


?>
