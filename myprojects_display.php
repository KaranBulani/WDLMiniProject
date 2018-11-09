<?php
$username=$_SESSION['username'];
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
 $sql = "SELECT (assigned_pid,myproject_pid) FROM user where username=$username";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc()
 $sql_a = "SELECT * FROM project  WHERE pid=$row["assigned_pid"]";
 $sql_m = "SELECT * FROM project  WHERE pid=$row["myproject_pid"]";
 $result1 = $conn->query($sql_a);
 $result2 = $conn->query($sql_m);

//*********************assigned projects*********************//
 while($row1 = $result1->fetch_assoc())
 {
   echo $row1["pid"];
   echo $row1["pro_title"];
   echo $row1["pro_description"];
   echo $row1["pro_skill"];
   echo $row1["pro_time"];
 }
//*****************personal projects***********************//
 while($row2 = $result2->fetch_assoc())
 {
   echo $row2["pid"];
   echo $row2["pro_title"];
   echo $row2["pro_description"];
   echo $row2["pro_skill"];
   echo $row2["pro_time"];
 }
 //Prepare statement

  $conn->close();
}
 ?>
