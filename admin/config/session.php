<?php 

session_start();
$user_name = $_SESSION['username'];
// $em_id = $_SESSION['id'];


if(!isset($_SESSION['username'])){
  header("location: index.php");

}

?>

