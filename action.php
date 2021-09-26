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
      $query= "INSERT INTO donate1 (name,phone,email,dated,file) VALUES ('$name','$phone','$email','$dated','$file')";
      $query_run =  mysqli_query($con,$query);

        if($query_run){
          move_uploaded_file($_FILES["file"]["tmp_name"], "upload/".$_FILES["file"]["name"]);
          $_SESSION['success'] = "Image added";
          echo 'done';
          header('Location: explore.html');
        }
        else
        {
          echo 'not done';
          $_SESSION['success'] = "image not added";
          header('Location: donate.php');
        }
}
?>
