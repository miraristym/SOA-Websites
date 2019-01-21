<?php
   include("config.php");
   session_start();
   $error = "";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $nama = mysqli_real_escape_string($db,$_POST['nama']);
      $nim = mysqli_real_escape_string($db,$_POST['nim']); 
      $status = 1;
      
      $sql = "SELECT id_enrollment FROM enrollment WHERE nama = '$nama' and nim = '$nim' and status = '$status'";
      $result = mysqli_query($db,$sql);
      if (!$result) {
          printf("Error: %s\n", mysqli_error($db));
          exit();
      }
      //echo $result;
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //printf ("%s (%s)\n",$row["username"],$row["password"]);

      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $nama;
         
         header("location: welcome.php");
      }else {
         $error = "Nama atau NIM tidak valid";
      }
   }
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.standalone.min.css">
  <link rel="stylesheet" href="now-ui-kit.css" type="text/css">
  <link rel="stylesheet" href="assets/css/nucleo-icons.css" type="text/css">
  <script src="assets/js/navbar-ontop.js"></script>
  <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
  <title>International Relation Office</title>
  <meta name="description" content="Start your development with a beautiful Bootstrap 4 UI kit. It is yours Free.">
  <meta name="keywords" content="bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, now ui, now ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit">
</head>

<body class="">
  <nav class="navbar bg-primary navbar-dark sticky-top">
    <div class="container"> <a class="navbar-brand" href="#" contenteditable="true">International Relation Office</a> </div>
  </nav>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-xl-8 col-md-10">
          <h2 class="my-3 text-center">
            <b>Re-Enrollment Page</b></h2>
        </div>
      </div>
    </div>
  </div>
  <form action = "" method = "post">
    <div class="pt-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-5 text-center" style="">
            <div class="form-group">
              <div class="input-group border-0">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-gray text-secondary" id="basic-addon1">
                    <i class="now-ui-icons users_circle-08 lg"></i>
                  </span>
                </div>
                <input type="text" class="form-control bg-gray text-white" id="inlineFormInputGroup" placeholder="Enter your name here" required="required" name="nama">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="pt-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-5 text-center" style="">
            <div class="form-group">
              <div class="input-group border-0">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-gray text-secondary" id="basic-addon1">
                    <i class="now-ui-icons users_circle-08 lg"></i>
                  </span>
                </div>
                <input type="text" class="form-control bg-gray text-white" id="inlineFormInputGroup" placeholder="Enter your NIM here" required="required" name="nim">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="" style="">
      <div class="container">
        <div class="row text-right">
          <div class="col-md-10" style=""><button type="submit" class="btn mt-4 mb-3 rounded btn-lg btn-primary text-white"><b>Sign in</b></button></div>
        </div>
      </div>
    </div>
  </form>
  <div class="text-center" style = "font-size:11px; color:#cc0000; margin-top:10px">
    <?php

      //$error = ""; 
      echo $error; 
    ?>
  </div>  
  <div class="pt-5 bg-dark">
    <div class="container">
      <div class="row mt-4 py-5">
        <div class="col-md-12 text-center">
          <h3 class="mb-5 text-center">Thank you for supporting us!</h3>
          <button class="btn btn-icon rounded btn-lg btn-light mx-1 btn-twitter" type="button" data-placement="top" data-toggle="tooltip" title="Follow us">
            <i class="fa fa-fw fa-2x fa-twitter"></i>
          </button>
          <button class="btn btn-icon rounded btn-lg btn-light mx-1 btn-facebook" type="button" data-placement="top" data-toggle="tooltip" title="Like us">
            <i class="fa fa-fw fa-2x fa-facebook-square"></i>
          </button>
        </div>
      </div>
      <div class="row mt-5">
        <div> </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="assets/js/parallax.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
  <script>
    $(document).ready(function() {
      $('[data-toggle="popover"]').popover();
      $('[data-toggle="tooltip"]').tooltip();
      $('#datepicker-example').datepicker({
        calendarWeeks: true,
        autoclose: true,
        todayHighlight: true
      });
    });
  </script>
</body>

</html>