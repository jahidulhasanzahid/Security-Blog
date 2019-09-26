<?php
  include("config/connect.php");
  include("config/session.php");

if(isset($_POST['username']) && ($_POST['password'])){

  $user_name = $_POST['username'];
  $password = $_POST['password'];

  $user_login_query = "SELECT * FROM adminlogin WHERE username = '$user_name' && password = '$password' LIMIT 1";
  $user_login = mysqli_query($con,$user_login_query);

  $count_user = mysqli_num_rows($user_login);


  if($count_user == 1){

    $row= mysqli_fetch_assoc($user_login);


    session_start();
    
    $_SESSION['username'] = $user_name;

  
   
    header("location:Admin-index.php");
    //echo "successfully logged in";
      exit();
  }
  else{
      echo "<script> alert(' Incorrect information, try again !!') </script>";
      echo "<script> window.open('index.php','_self'); </script>";
    }

}
?>