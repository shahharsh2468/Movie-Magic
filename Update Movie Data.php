<?php
	$mid=$_POST['mid'];
	
	$name=$_POST['mname'];

	$cat1=$_POST['mcategory1'];

	$cat2=$_POST['mcategory2'];

	$poster=$_FILES['fn']['name'];

	$rate=$_POST['rate'];

	$rdate=$_POST['rdate'];

	$duration=$_POST['dh']." hrs ".$_POST['dm']." mins";
	
	$lang=$_POST['lan'];

	$acn1=$_POST['actorn1'];

	$acp1=$_FILES['fn2']['name'];
	
	$acn2=$_POST['actorn2'];

	$acp2=$_FILES['fn3']['name'];

	$acn3=$_POST['actorn3'];

	$acp3=$_FILES['fn4']['name'];

	
	$con=mysqli_connect('localhost','root','','movie magic');

	$query="update now_available set poster='$poster',name='$name',language='$lang',category='$cat1',category2='$cat2',rate=$rate,rdate='$rdate',duration='$duration' where id=$mid";
	mysqli_query($con,$query);

	$posterpath="poster/".$poster;

	move_uploaded_file($_FILES['fn']['tmp_name'],$posterpath);
	
	header('location:Admin Add Movie Menu.php');
?>