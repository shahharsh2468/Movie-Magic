<?php
    session_start();

	$con=mysqli_connect('localhost','root','','movie magic');
?>
<html>
	<head>
	<style>
		body{
            margin: 0;
		background-color:#222;
        }
        #main{
            height: 60px;
            width: 100%;
            background-color: #222222;
            position: fixed;
            z-index: 9999;
        }
        #menu{
           padding-top: 5px; 
            float: left;
        }
        ul{
            list-style: none;
        }
        li{
            display: inline;
            margin-left: 50px;
            color:white;
            font-family: arial;
            font-size:15px;
        }
        li:first-child{
            color:#94c82f;
            text-shadow:0px 0px 10px #94c82f;
        }
        #search{
            float: right;
            padding-top: 15px;
            margin-right: 50px;
        }
        #search input{
            height: 30px;
            width: 180px;
            text-align: center;
            background-color: transparent;
            padding: 5px;
            color: #94c82f;
            border: 1px solid #94c82f;
            outline: none;
            box-shadow: 0px 0px 10px #94c82f;
            font-family: arial;
            border-radius: 5px;
            margin-right: 20px;
        }
        #logo{
            height: 80px;
            width: 100px;
            float: left;
            margin-left:17%;
            margin-top: 10px;
            transform: rotate(-10deg);
        }
        a{
            color:white;
            text-shadow:0px 0px 10px #94c82f;
            text-decoration: none;
        }
        #a2{
            color:#94c82f;
            text-shadow:0px 0px 10px #94c82f;
            text-decoration: none;
        }
        #gifts{
		color:white;
		font-family:arial;
           text-shadow:0px 0px 10px #94c82f;
		margin-right:30px;
            text-decoration: none;
	}
	#offers{
		color:white;
		font-family:arial;
           text-shadow:0px 0px 10px #94c82f;
		margin-right:30px;
            text-decoration: none;
	}

		//NOW SHOW

		
		#box{
			height:275px;
			width:300px;
			background-color:white;
		}
		#nowshow{
			padding-top:100px;
		}
		
		
		.poster{
			height:125px;
			width:300px;
		
		}
		.lan{
			font-size:10px;
			color:gray;
		}
		.action{
			font-size:10px;
			border:1px solid gray;
			width:50px;
			text-align:center;
			border-radius:10px;
			color:gray;
			display:inline-block;
		}
		.drama{
			font-size:10px;
			border:1px solid gray;
			width:50px;
			text-align:center;
			border-radius:10px;
			color:gray;
			margin-left:10px;
			display:inline-block;
		}
		.buttons{
			height:50px;
			width:300px;
			background-color:#94c82f;
			color:white;
			font-size:14px;
			text-align:center;
			line-height:50px;
		}
		.postername{
			height:100px;
			width:300px;
		}
		#movietable{
			margin-top:10px;
			margin-right:-50px;
			margin-left:30px;
			font-family:arial;
		}
		#nowavailabeltitle{
			font-family:arial;
			font-size:15px;
			color:white;
		}
		#box{
			height:275px;
			width:300px;
			background-color:white;
		}
	</style>
	</head>
	<body>
		<div id="main">
            <div id="menu">
                <ul>
                    <li><a href="Home.php" id="a1">HOME</a></li>
                    <li><a href="Movies.php" id="a2">MOVIES</a></li>
                    <li><a href="Videos.php" id="a3">VIDEOS</a></li>
                </ul>
            </div>
            <div id="logo">
                <img src="logo.png" height="100%" width="100%"/>
            </div>
            <div id="search">
                <table border="0">
                    <tr>
			<td>
				<a href="Offers.php" id="offers">OFFERS</a>
			</td>
			<td>
				<a href="Gift.php" id="gifts">GIFTS</a>
			</td>
                        <td>
                            <?php
                                if(isset($_SESSION['uname']))
                                {
                                    ?>
                                        <a href="User%20Logout.php" id="una"><?php echo $_SESSION['uname'];?></a>
                                    <?php
                                }
                                else
                                {
                                  ?>
                                <a href="User Login.html" id=""><img src="Login.png" height="30px" width="30px"/></a>
                                <?php
                                }
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>



	<div id="nowshow">
				<table border="0">
			<tr>
				<td>
			<table border="0" id="movietable" cellspacing="50px">
				<tr  align="center">
					<td colspan="4" id="nowavailabeltitle">
NOW AVAILABEL
					<hr size="2" width="142" color="#94c82f" align="center"/>
</td>
					
				</tr>
				<Tr>
				<?php
					$query="select * from now_available where id>=1 AND id<=4";
					$res=mysqli_query($con,$query);
					while($data=mysqli_fetch_array($res))
					{
					
				?>
					
					<td>
						<div id="box">
							<div class="poster">
								<img src="poster/<?php echo $data['poster'];?>" height="125px" width="300px"/>
							</div>
							<div class="postername">
								<table border="0" cellspacing="10px" width="300px">
									<tr>
										<td>
											<?php
												echo $data['name'];
											?>									</td>
									</tr>
									<tr>
										<td class="lan">
											<?php
																										echo $data['language'];
											?>
										</tD>
									</tr>
									<Tr>
										<td>
											<div class="action"><?php echo $data['category'];?></div>
											<div class="drama"><?php echo $data['category2'];?></div>
										</td>
									</tr>
								</table>
							</div>
							<a href="Time Table.php?mid=<?php echo $data['id'];?>">
							<div class="buttons">
								BOOK NOW
							</div></a>
						</div>
					</td>
					<?php
						}
					?>
				</tr>
				<tr>
				<?php
					$query="select * from now_available where id>=5 AND id<=8";
					$res=mysqli_query($con,$query);
					while($data=mysqli_fetch_array($res))
					{
						
						
				?>
				<td>
						<div id="box">
							<div class="poster">
								<img src="poster/<?php echo $data['poster'];?>" height="125px" width="300px"/>
							</div>
							<div class="postername">
								<table border="0" cellspacing="10px" width="300px">
									<tr>
										<td>
											<?php
												echo 									$data['name'];
											?>
										</td>
									</tr>
									<tr>
										<td class="lan">
											<?php
												echo 										$data['language'];
											?>
										</tD>
									</tr>
									<Tr>
										<td>
											<div class="action"><?php echo $data['category'];?></div>
											<div class="drama"><?php echo $data['category2'];?></div>
										</td>
									</tr>
								</table>
							</div><a href="Time Table.php?mid=<?php echo $data['id'];?>">
							<div class="buttons">
								BOOK NOW
							</div></a>
						</div>
					</td>
					<?php
						}
					?>
					</tr>
					<tr>
					<?php
						$query="select * from now_available where id>=9 AND id<=12";
						$res=mysqli_query($con,$query);
						while($data=mysqli_fetch_array($res))
						{
					?>
					<td>
						<div id="box">
							<div class="poster">
								<img src="poster/<?php echo $data['poster'];?>" height="125px" width="300px"/>
							</div>
							<div class="postername">
								<table border="0" cellspacing="10px" width="300px">
									<tr>
										<td>
											<?php
												echo $data['name'];
											?>
										</td>
									</tr>
									<tr>
										<td class="lan">
											<?php
												echo $data['language'];
											?>
										</tD>
									</tr>
									<Tr>
										<td>
											<div class="action"><?php echo $data['category'];?></div>
											<div class="drama"><?php echo $data['category2'];?></div>
										</td>
									</tr>
								</table>
							</div>	
							<a href="Time Table.php?mid=<?php echo $data['id'];?>">
							<div class="buttons">
								BOOK NOW
							</div></a>
						</div>
					</td>
					<?php
						}
					?>
					</tr>
									
			</table>

				</td>
			</tr>	
		</table>
	</div>	


	</body>
</html>