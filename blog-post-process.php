<?php
 include("config/connect.php");
  include("config/session.php");

if(isset($_POST['submit'])){
	
	$option = $_POST['optionuser'];
	$title = $_POST['title'];
	$contain = $_POST['contain'];

	
	if($title =='' or $contain ==''){
		
		echo "<script>alert('Any of the fields is empty')</script>";
		echo "<script>window.open('post-share.php','_self')</script>";
		exit();
	}
	else{
		//move_uploaded_file($image_tmp,"photo/$photo");
		
		$result = mysqli_query($con,"INSERT INTO `blogpost` (`optionuser`,`title`,`contain`)
		values ('$option','$title','$contain')");
	}
	if(mysqli_query($con,$result)){

		echo "error";
	}
	else{
		
		echo "<script>alert('Post Published successfully')</script>";
		echo "<script>window.open('home.php','_self')</script>";
	}
}
?>