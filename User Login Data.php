<?php
	
	$uid=$_POST['uid'];
	$pass=$_POST['pass'];
	
	$counter=0;
	
	$con=mysqli_connect('localhost','root','','movie magic');
	
	$query="select * from registration where email='$uid' AND password='$pass'";
	
	$res=mysqli_query($con,$query);
	
	while($data=mysqli_fetch_array($res))
	{
		$name=$data['email'];
		
		$counter=1;
	
	}
	if($counter==1)
	{
		session_start();
		
		$_SESSION['uname']=$name;
		
		header('location:Home.php');
	}
    else{
        header('location:User Login.php?flag=0');
    }
	/*
	if($uid=="Admin" && $pass=="Admin123")
	{
	
		session_start();
		
		$_SESSION['uid']="Admin";
		
		header('location:Admin Home.php');
		
	}
	else{
		header('location:Admin Login.html');
	}
*/
?>