<?php
   include('config.php');
   session_start();

   $user_check = $_SESSION['username'];

   $ses_sql = mysqli_query($db,"select username, uid from user where username = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['username'];
   //$uid_session = $row['uid'];
   $_SESSION['uid'] =  $row['uid'];
   
   //echo $login_session . ' - ' . $_SESSION['uid'];

   if(!isset($_SESSION['username']))
   {
      header("location:log_in.php");
   }
?>
