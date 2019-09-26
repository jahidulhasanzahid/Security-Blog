<?php 

session_start();
$email = $_SESSION['email'];
// $em_id = $_SESSION['id'];


if(!isset($_SESSION['email'])){
  header("location: index.php");

}

?>

