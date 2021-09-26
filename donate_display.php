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
    <link rel="stylesheet" href="css/container.css">
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
    <div class="container bg-info" style="margin-top:1%;">
      <marquee><p style="font-family: Impact; font-size: 15pt">Grateful to all the awesome people who believe in kindness😇</p></marquee>
      <a href="donate.php" class="btn btn-warning btn-block text-white"><b>Join them. Donate your old clothes👚</b></a>
    </div>
    <div class="container py-5">
      <div class="row mt-2">
        <?php
          include("connection.php");
          $query = "SELECT * FROM donate1";
          $query_run =  mysqli_query($con,$query);
          $check = mysqli_num_rows($query_run)>0;
          if($check){
            while($row = mysqli_fetch_array($query_run))
            {
              ?>
              <div class="col-md-3 mt-3">
                <div class="card">
                  <img src="upload/<?php echo $row['file'];?>" width="200px" height="200px" alt="donated clothes" ><hr>
                  <div class="card-body">
                    <p>Donated By: </p><h3 class="card-title"><?php echo $row['name'];?></h3><hr>
                    <center><a class="btn btn-success" href="tel:<?php echo $row['phone']?>">Phone</a>
                    <a class="btn btn-info" href="mailto:<?php echo $row['email']?>">Mail <?php  ?> </a><hr></center>
                    <p class="card-text">Dated: <?php echo $row['dated'];?></p>
                  </div>
                </div>
              </div>
              <?php
            }
          }
          else{
            echo 'no records found';
          }

         ?>
      </div>
    </div>
    <footer id="footer" class="bg-light text-center text-lg-start">
      <div class="text-center p-3">© 2021 Copyright:
        <a class="text-dark" href="https://ishikaa-2302.netlify.app/">ishikaa-2302</a>
      </div>
    </footer>
  </body>
</html>
