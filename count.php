<?php
	include("config/connect.php");
    include("config/session.php");


    $find_count = "SELECT * FROM `counter`";
    $query = mysqli_query($con,$find_count);
    while ($row=mysqli_fetch_assoc($query)) {
    	# code...
    	$current_count = $row['count'];
    	$new_count = $current_count + 1;
    	$update_count = mysqli_query($con,"UPDATE `counter` SET `count`='$new_count'");

    	echo "Total Visitor is :".$new_count;
    }
?>