<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['theuser'];
   
   $ses_sql = mysqli_query($db,"select * from login where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['theuser']))
   {
      header("location:login.php");
   }
?>