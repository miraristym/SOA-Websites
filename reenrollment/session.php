<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select nama from enrollment where nama = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['nama'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:reenrollment.php");
   }
?>