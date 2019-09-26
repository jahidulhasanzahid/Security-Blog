<?php
 include("config/connect.php");
  include("config/session.php");

if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$option = $_POST['optionuser'];
	$password = $_POST['password'];
	$encrypt = md5($email);

	
	if($name =='' or $email =='' or $option =='' or $password ==''){
		
		echo "<script>alert('Any of the fields is empty')</script>";
		echo "<script>window.open('sign-up.php','_self')</script>";
		exit();
	}
	else{
		//move_uploaded_file($image_tmp,"photo/$photo");
		
		$result = mysqli_query($con,"INSERT INTO `usertable` (`name`,`email`,`optionuser`,`password`)
		values ('$name','$encrypt','$option','$password')");
	}
	if(mysqli_query($con,$result)){

		echo "error";
	}
	else{
		
		echo "<script>alert('User Create Published successfully')</script>";
		echo "<script>window.open('sign-up.php','_self')</script>";
	}
}
?>