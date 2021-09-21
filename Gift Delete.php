<?php
	$gid=$_GET['gid'];

	$con=mysqli_connect('localhost','root','','project');

	$query="delete from gift where id = $gid";

	mysqli_query($con,$query);

	header('location:Admin Delete gift Menu.php');

?>