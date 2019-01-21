<?php
   include('session.php');
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
  <nav class="navbar bg-primary navbar-dark sticky-top" style="">
    <div class="container"> <a class="navbar-brand" href="#">International Relation Office</a> </div>
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
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="">
          <h2>Welcome, <?php echo $login_session; ?>! Please download the file below..</h2>
          <a href="sample.pdf" download="">
            <button class="btn btn-primary btn-lg" type="button">Download</button>
          </a>
        </div><a href="sample.pdf" download="">
        </a>
      </div><a href="sample.pdf" download="">
      </a>
    </div><a href="sample.pdf" download="">
    </a>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row" style="">
        <div class="col-md-1 offset-md-11" style=""><a class="btn text-light btn-sm btn-dark" href = "logout.php"> Sign Out</a></div>
      </div>
    </div>
  </div><a href="sample.pdf" download="">
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
    <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
  </a>
</body>

</html>