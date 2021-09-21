<?php
	
	$uid=$_POST['uid'];
	$pass=$_POST['pass'];
	
	echo $uid."<br>".$pass;
	
	if($uid=="Admin" && $pass=="Admin123")
	{
	
		session_start();
		
		$_SESSION['uid']="Admin";
		
		header('location:Admin Home.php');
		
	}
	else{
		header('location:Admin Login.html');
	}

?>