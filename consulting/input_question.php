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
  
  <!-- CONNECTING TO DATABASE -->
  <?php 
  	$servername = "localhost";
  	$username = "root";
  	$password = "";
  	$database = "iro";

  	//Create connection
  	$conn = new mysqli($servername, $username, $password, $database);
  	//Check connection
  	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
  	}
   ?>
</head>
<body class="">
	<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
       $question = $_POST['pertanyaan'];

       $sql = "INSERT INTO pertanyaan (pertanyaan) VALUES ('$question')";

      if (mysqli_query($conn, $sql)) {
        header("Location: ../");
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }
  ?>
	<nav class="navbar bg-primary navbar-dark sticky-top">
    <div class="container"> <a class="navbar-brand" href="#" contenteditable="true">International Relation Office</a> </div>
  </nav>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-xl-8 col-md-10">
          <h4 class="my-3 text-center">
            <b>Send your question here!</b></h4>
        </div>
      </div>
    </div>
  </div>
  <form action="" method="post">
    <div class="py-3">
      <div class="container">
        <div class="row">
          <div class="pt-3 col-md-2" style="">
            <h4>Question</h4>
          </div>
          <div class="col-md-9 " style="">
            <div class="form-group"><input type="text" class="form-control form-control-lg" placeholder="Type your question here!" name="pertanyaan" required="required"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-3 offset-md-9"><button type="submit" class="btn rounded btn btn-primary text-body mt-3 py-0">
              <h5 class="mt-4" style=""><b>SUBMIT</b></h5>
            </button></div>
        </div>
      </div>
    </div>
  </form>
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