<?php

	$id=$_GET['gid'];

	$gto=$_POST['to'];

	$gmsg=$_POST['msg'];

	$gfrom=$_POST['from'];

	$con=mysqli_connect('localhost','root','','project');

	$query="insert into giftcard(gid,gto,msg,gfrom,flag) values($id,'$gto','$gmsg','$gfrom',0)";

	mysqli_query($con,$query);


	//$query="select * from giftcard where gto='$gto' and gfrom='$gfrom' and gid=$id and flag=0";

	//$res=mysqli_query($con,$query);

	//while($data=mysqli_fetch_array($res))

	//{
	//	$uid=$data['id'];		
	//}

	header('location:payment.php');
	
?>