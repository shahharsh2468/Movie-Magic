<?php
    session_start();

	$id=$_GET['mid'];

	$con=mysqli_connect('localhost','root','','movie magic');

	$query="select * from now_available where id=$id";

	$res=mysqli_query($con,$query);
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
        #a1{
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
       
	
	#mainposter
	{
		height:400px;
		width:100%;
		background-color:red;
		position:relative;
		top:60;
		background-image:url('poster/Baahubali-2-2017.jpg');
		background-size:100% 140%;
		background-repeat:no-repeat;
	}
	#ratingtable{
		position:relative;
		top:300;
		left:50;
	}	
	#heart{
		color:red;
		font-size:30px;
	}
	#rate{
		color:white;
		font-size:18px;
		font-family:arial;
	}
	#moviename{
		color:white;
		font-size:28px;
		font-family:arial;
	}
	.action{
		color:white;
		font-size:15px;
		font-family:arial;
		border:1px solid white;
		border-radius:15px;
		padding:2px;
		padding-left:4px;
		padding-right:4px;
	}
	.drama{
		color:white;
		font-size:15px;
		font-family:arial;
		border:1px solid white;
		border-radius:15px;
		padding:2px;
		padding-left:4px;
		padding-right:4px;
	}
	.history{
		color:white;
		font-size:15px;
		font-family:arial;
		border:1px solid white;
		border-radius:15px;
		padding:2px;
		padding-left:4px;
		padding-right:4px;
	}
	#rdate{
		color:white;
		font-size:15px;
		font-family:arial;
	}
	#duration{
		color:white;
		font-size:15px;
		font-family:arial;
	}
		
	#rtable{
		position:absolute;
		top:290;
		right:50;
		
	}
	.actorname{
		color:white;
		font-size:15px;
		font-family:arial;
	}
	.movieimg{
		border-radius:50%;
	}
	#timetable{
		position:absolute;
		bottom:100;
		left:350;
		
	}
	#timetable table tr td{
		font-size:15px;
		font-family:arial;
		color:white;
	}
	.pricer{
		font-size:13px;
		color:red;
	}
	.duration{
		text-shadow:none;
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

	<!-- POSTER CODE -->


	<?php
		while($data=mysqli_fetch_array($res))
		{

	?>

	<div id="mainposter" style="background:url('poster/<?php echo $data['poster']; ?>'); background-size:100% 100%;">
		<table border="0" id="ratingtable" cellspacing="10">
			<tr>
				<td id="moviename" colspan="7">
					<?php echo $data['name'];?>
				</td>
			</tr>
			<tr>
				<td id="heart">
					&hearts;
				</td>
				<td id="rate">
					<?php echo $data['rate']."%";?> 
				</td>
				<td>
					<div class="action"><?php echo $data['category'];?></div>					
				</td>
				<td>
					<div class="drama"><?php echo $data['category2'];?></div>
				</td>
				<td>
					<div id="rdate"><?php echo $data['rdate'];?></div>							</td>
				<td>
					<div id="duration"><?php echo $data['duration'];?></div>
				</td>
		
			</tr>
		</table>
	</div>


	<?php
		}
	

		$query="select * from time_table";

		$res=mysqli_query($con,$query);
	?>

	<div id="timetable">
		<table border="0" cellspacing="20">
			
			<tr>
				<?php
					while($data=mysqli_fetch_array($res))
					{
				
				?>
				<Td >
					<a class="duration" href="No Of Tickets.php?mid=<?php echo $id;?>&tid=<?php echo $data['id'];?>"><?php echo $data['duration'];?></a>
				</td>
				<?php
					}
				?>
			</tr>
			<tr align="center">
				<?php
					$query="select * from time_table";

					$res=mysqli_query($con,$query);

					while($data=mysqli_fetch_array($res))

					{
				?>

				<td class="pricer">
					<font color="#94c82f"><?php echo $data['price'];?></font>
				</td>
				<?php
					}
				?>
				
			</tr>
		</table>
	
	</div>

	</body>
</html>