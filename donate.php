<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <title>Sell | Donate | Thrift</title>
    <link rel="stylesheet" href="css/form.css">
    <script>
    // Self-executing function
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms,function(form){
            form.addEventListener('submit', function(event){
                if (form.checkValidity() === false){
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </head>
  <body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a href="home.html">Sell | Donate | Thrift</a>
        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="explore.html">Explore</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container" style="margin-top: 4%;background-color:#faf0be;">
      <h1>Donate your clothes</h1>
      <h5>Donate them for good😇</h5>
      <h6>How it works?</h6>
      <ul>
        <li>Fill the form given below</li>
        <li>We'll send the responses to an NGO who donates clothes</li>
        <li>After confirmation, you'll be asked to courier your clothes</li>
        <li>You'll recieve the confirmation after your clothes has been donated</li>
      </ul>
      <p><strong>NOTE: </strong>Your should attach the <span style="background-color:yellow;padding:2px;"><strong>images of your clothes</strong></span></p>
    </div>
    <div class="container" style="margin-top: 2%;background-color:#faf0be;">
    <form class="needs-validation" enctype="multipart/form-data" action="action.php" method="post" novalidate>
      <div class="form-group row">
          <label class="col-sm-3 col-form-label" for="name">Your Name:</label>
          <div class="col-sm-9">
              <input name="name" type="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
      </div>

      <div class="form-group row">
          <label class="col-sm-3 col-form-label" for="phone">Your Contact Number:</label>
          <div class="col-sm-9">
              <input name="phone" type="phone" class="form-control" id="phone" placeholder="We'll address this number to the NGO to contact you" required>
          </div>
      </div>

      <div class="form-group row">
          <label class="col-sm-3 col-form-label" for="email">Email Address:</label>
          <div class="col-sm-9">
              <input name="email" type="email" class="form-control" id="email" placeholder="Email Address" required>
          </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="date">Last date you wore those clothes:</label>
        <div class="col-sm-9">
          <input name="dated" type="date" class="form-control" name="date" id="date" placeholder="Enter date of submission" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-3 col-form-label" for="file">Upload Images:</label>
        <div class="col-sm-9">
          <input name="file" type="file" class="form-control" id="images" required>
        </div>
      </div>

      <!--<div class="form-group row">
          <div class="col-sm-9 offset-sm-3">
              <label class="checkbox-inline">
                  <input type="checkbox" class="mr-1" value="agree" required> I understand I have to my submit Original Work
              </label>
          </div>
      </div>-->

      <div class="form-group row">
          <div class="col-sm-9 offset-sm-3">
              <button type="submit" name="submit" class="btn btn-success">Submit</button>
              <input type="reset" class="btn btn-danger" value="Reset">
          </div>
      </div>

      <a href="donate_display.php" style="color:#000;font-family:'oswald';letter-spacing:2px;" class="btn btn-primary btn-block">Click here to display the donated items</a>
  </form>
  </div>
  <footer id="footer" style="color:#000;font-family:'oswald';letter-spacing:2px;margin-top:1%" class="bg-light text-center text-lg-start">
    <div class="text-center p-3">© 2021 Copyright:
      <a class="text-dark" href="https://ishikaa-2302.netlify.app/">ishikaa-2302</a>
    </div>
  </footer>
  </body>
</html>
