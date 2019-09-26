<?php
  include("config/connect.php");
  include("config/session.php");

if(isset($_POST['email']) && ($_POST['password'])){

  $email = $_POST['email'];
  $password = $_POST['password'];

  $user_login_query = "SELECT * FROM usertable WHERE email = '$email' && password = '$password' LIMIT 1";
  $user_login = mysqli_query($con,$user_login_query);

  $count_user = mysqli_num_rows($user_login);


  if($count_user == 1){

    $row= mysqli_fetch_assoc($user_login);


    session_start();
    
    $_SESSION['email'] = $email;

  
   
    header("location:home.php");
    //echo "successfully logged in";
      exit();
  }
  else{
      echo "<script> alert(' Incorrect information, try again !!') </script>";
      echo "<script> window.open('index.php','_self'); </script>";
    }

}
?>