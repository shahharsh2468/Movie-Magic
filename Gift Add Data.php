<?php
	
	$gid=$_POST['gid'];
	$img=$_FILES['fn']['name'];
	$price=$_POST['price'];
	
	$con=mysqli_connect('localhost','root','','project');

	$query="update gift set img='$img',price='$price' where id=$gid";

	mysqli_query($con,$query);
	
	$path="gift/".$img;
	
	move_uploaded_file($_FILES['fn']['tmp_name'],$path);
	
	header('location:Admin Add Gift Menu.html');
?>