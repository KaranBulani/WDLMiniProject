<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
	  $mypassword=md5($mypassword);

      $sql = "SELECT * FROM user WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row
		// echo "I am i login.php" . $sql;
		
      if($count == 1) {
         $_SESSION['username'] = $row['username'];
         $_SESSION['uid'] = $row['uid'];
         $_SESSION['name'] = $row['name'];
         $_SESSION['email'] = $row['email'];
         header("location: browse_projects.php");
      }else {
         echo "Your Login Name or Password is invalid. You will be automatically directed to the login screen in 5 seconds";
		 header("location: log_in.php");
      }
   }
?>
