<?php
	$mid=$_GET['mid'];

	$con=mysqli_connect('localhost','root','','movie magic');

	$query="delete from now_available where id = $mid";

	mysqli_query($con,$query);

	header('location:Admin Delete Movie Menu.php');

?>