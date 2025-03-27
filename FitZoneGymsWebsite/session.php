<?php
   include('Config.php');
   session_start();
   
   $user_check = $_SESSION['Username'];
   
   $ses_sql = mysqli_query($connection,"select Username from user where Username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Username'];
   
   if(!isset($_SESSION['Username'])){
      header("location:Login.php");
      die();
   }
?>