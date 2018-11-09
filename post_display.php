<?php
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
     $sql = "SELECT pid, pro_title, pro_description, pro_skill, pro_time FROM project WHERE assigned=0";
     $result = $conn->query($sql);

     while($row = $result->fetch_assoc())
     {
       echo $row["pid"];
       echo $row["pro_title"];
       echo $row["pro_description"];
       echo $row["pro_skill"];
       echo $row["pro_time"];
     }
     //Prepare statement

     	$conn->close();
    }


?>
