<?php
	$mid=$_POST['mid'];
	
	$name=$_POST['mname'];

	$poster=$_FILES['fn']['name'];

	$rdate=$_POST['rdate'];
	
	$con=mysqli_connect('localhost','root','','movie magic');

	$query="update featured_movies set poster='$poster',name='$name',rdate='$rdate' where id=$mid";
	mysqli_query($con,$query);

	$posterpath="poster/".$poster;

	move_uploaded_file($_FILES['fn']['tmp_name'],$posterpath);

	header('location:Admin Update Featured Movie.php');
?>