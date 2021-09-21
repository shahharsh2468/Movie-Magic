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

	$con=mysqli_connect('localhost','root','','movie magic');

	$query="insert into now_available(id,name,poster,rate,rdate,duration,language,category,category2) values($mid,'$name','$poster',$rate,'$rdate','$duration','$cat1','$cat2');

	$posterpath="poster/".$poster;

	move_uploaded_file($_FILES['fn']['tmp_name'],$posterpath);
	
	header('location:Admin Add Movie Menu.php');
?>