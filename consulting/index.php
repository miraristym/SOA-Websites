

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
  <title>International Relaion Office</title>
  <meta name="description" content="Start your development with a beautiful Bootstrap 4 UI kit. It is yours Free.">
  <meta name="keywords" content="bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, now ui, now ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit">

  <!-- JAVASCRIPT VALISATION FUNCTIONS -->
  <script src="function.js"></script>

</head>

<body class="">
  <nav class="navbar bg-primary navbar-dark">
    <div class="container"> <a class="navbar-brand" href="#" contenteditable="true">International Relation Office</a> </div>
  </nav>
  <div class="section-overlapping"></div>
  <div class="py-5 text-center parallax cover gradient-overlay" style="">
    <div class="container d-flex flex-column">
      <div class="row">
        <div class="px-5 col-md-8 text-center mx-auto">
          <h3 class="text-light display-4"> <b>WELCOME!</b></h3>
          <h2 class="my-3">IRO'S CONSULTING</h2>
          <p> We serve the best advice! </p>
        </div>
      </div>
      <div class="row my-auto">
        <div class="col-md-12"> 
          <form name=searchForm action="consulting_result.php" onsubmit="return validateForm()" method="get">
            <div class="form-group">
              <h1>Anything that we can help?</h1>
              <input type="text" id="keyword" name="keyword" class="form-control" placeholder="Type keyword here!">
              <!-- <button type="submit" class="btn btn-primary">Ask!</button> -->
              <input type="submit" id='searchButton' class="btn btn-primary" value="Ask">
            </div>
          </form>
          <div class="row text-right">
          <div class="col-md-10" style=""><button class="btn mt-4 mb-3 rounded btn-lg btn-primary text-white" onclick="window.location = '../'"><b>Back to home</b></button></div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 bg-secondary" style="">
    <div class="container">
      <div class="row bg-gra">
        <div class="col-md-12">
          <div class="py-5">
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
          </div>
        </div>
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