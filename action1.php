<?php
  session_start();
  include("connection.php");
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $dated = $_POST['dated'];
  $file = $_FILES["file"]['name'];
  $price = $_POST['price'];
      $query= "INSERT INTO sell (name,phone,email,price,dated,file) VALUES ('$name','$phone','$email','$price','$dated','$file')";
      $query_run =  mysqli_query($con,$query);
        if($query_run){
          move_uploaded_file($_FILES["file"]["tmp_name"], "upload1/".$_FILES["file"]["name"]);
          $_SESSION['success'] = "Image added";
          echo 'done';
          header('Location: explore.html');
        }
        else
        {
          echo 'not done';
          $_SESSION['success'] = "image not added";
          header('Location: sell.php');
        }
}
?>
