<?php

    session_start();

    
	$con=mysqli_connect('localhost','root','','movie magic');

	$query="select * from FEATURED_MOVIES where id>=1 and id<=4";
	
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
	#flogo{
            height: 80px;
            width: 100px;
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
       @-webkit-keyframes daft{
            0%{
                left:0;
            }
            13%{
                left:-100%;
            }
            26%{
                left:-200%;
            }
            39%{
                left:-300%;
            }
            52%{
                left:-400%;
            }
            65%{
                left:-300%;
            }
            78%{
                left:-200%;
            }
            91%{
                left:-100%;
            }          
            100%{
                left:0;
            }
            
        }   
        #slider{
            padding-top:10px;
            overflow: hidden;
            height:575px;
            width: auto;
            border: 25px solid #222;
            z-index: -1;
        }
        #slider div img{
            width: 20%;
            float: left;
        }
        #slider div{
            position: relative;
            width: 500%;
            margin: 0;
            left: 0;
            -webkit-animation:daft 50s infinite;
        }
        #featuredMovies{
            padding-left: 0;
            background-color: #222;
            
        }
        .featuredMovie{
            height:250px;
            width: 300px;
            border: 1px solid white;
        }
        #featuretitle{
            font-family: arial;
            font-size: 15px;
            color: white;
        }
        .fmposter{
            height: 200px;
            width: 300px;
            
        }
        .moviename{
            height: 25px;
            width: 300px;
            font-family: arial;
            font-size: 15px;
            color: white;
            padding-left: 10px;
            padding-top: 5px;
        }
        .rdate{
            height: 25px;
            width: 300px;
            font-family: arial;
            font-size: 15px;
            color: white;
            padding-left: 10px;
        }

	//Circle Hover Effect
		
	#topm table{
		background-color:black;
	}
	#topmovietitle{
		font-family:arial;
		color:white;
		font-size:15px;
	}
	#movie1{
		height:220px;
		width:220px;
		
		position:relative;
	}
	.circle1{
		height:220px;
		width:220px;
		background:url('poster/poster1.jpeg');
		background-size:220px 220px;
		background-repeat:no-repeat;
		border-radius:50%;
		box-shadow:inset 0px 0px 0px 0px rgba(255,255,255,.5),
			inset 0px 0px 0px 16px rgba(255,255,255,.5);
	}
	.circle2{
		height:0px;
		width:0px;
		background-color:#aed85a;
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
		border-radius:50%;
		transition:all .5s;
		text-transform:uppercase;
		text-align:center;
	}
	.circle2 h3{
		color:white;
		position:absolute;
		top:40%;
		left:10%;
		font-family:arial;
		transform:translate(-50%,-50%);
		opacity:0;
		transform:scale(0);		
	}
	#movie1:hover .circle2{
		height:190px;
		width:190px;
	}
	#movie1:hover .circle2 h3{
		transition:all 0.5s;
		transition-delay:.2s;
		top:38%;
		left:10%;
		transform:translate(-50%,-50%);
		opacity:1;
		transform:scale(1);
	}
	
	#movie2{
		height:220px;
		width:220px;
		position:relative;
		
	}

	.circle3{
		height:220px;
		width:220px;
		background:url('poster/poster4.jpg');
		background-size:220px 220px;
		background-repeat:no-repeat;
		border-radius:50%;
		box-shadow:inset 0px 0px 0px 0px rgba(255,255,255,.5),
			inset 0px 0px 0px 16px rgba(255,255,255,.5);
	}
	.circle4{
		height:0px;
		width:0px;
		background-color:#aed85a;
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
		border-radius:50%;
		transition:all .5s;
	}
	.circle4 h3{
		color:white;
		position:absolute;
		top:40%;
		left:0%;
		font-family:arial;
		transform:translate(-50%,-50%);
		opacity:0;
		transform:scale(0);		
	}
	#movie2:hover .circle4{
		height:190px;
		width:190px;
	}
	#movie2:hover .circle4 h3{
		transition:all 0.5s;
		transition-delay:.2s;
		top:40%;
		left:30%;
		transform:translate(-50%,-50%);
		opacity:1;
		transform:scale(1);
	}
	#movie3{
		height:220px;
		width:220px;
		position:relative;
	}

	.circle5{
		height:220px;
		width:220px;
		background:url('poster/poster3.jpg');
		background-size:220px 220px;
		background-repeat:no-repeat;
		border-radius:50%;
		box-shadow:inset 0px 0px 0px 0px rgba(255,255,255,.5),
			inset 0px 0px 0px 16px rgba(255,255,255,.5);
	}
	.circle6{
		height:0px;
		width:0px;
		background-color:#aed85a;
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
		border-radius:50%;
		transition:all .5s;
	}
	.circle6 h3{
		color:white;
		position:absolute;
		top:40%;
		left:0%;
		font-family:arial;
        text-align: center;
		transform:translate(-50%,-50%);
		opacity:0;
		transform:scale(0);		
        text-transform: uppercase;
	}
	#movie3:hover .circle6{
		height:190px;
		width:190px;
	}
	#movie3:hover .circle6 h3{
		transition:all 0.5s;
		transition-delay:.2s;
		top:40%;
		left:15%;
		transform:translate(-50%,-50%);
		opacity:1;
		transform:scale(1);
	}
	
	//NOW SHOW

		#lpanel{
			height:100vh;
			width:300px;
			float:left;
		}
		#box{
			height:275px;
			width:300px;
			background-color:white;
		}
		#main table{
			float:right;
		}
		#topmovies{
			color:white;
			text-align:center;
			padding:20px;
		}
		#region{
			color:white;
			text-align:center;
			padding:20px;
			padding-top:0px;
			font-size:12px;
		}
		.heart{
			font-size:30px;
			color:red;
		}
		.per{
			color:white;
		}
		.mname{
			color:#94c82f;
		}
		#line{
			width:250px;
			border:1px dashed white;
		}
		#lpaneltd{
			font-family:arial;
		}
		.poster{
			height:125px;
			width:300px;
		}
		.lan{
			font-size:10px;
			color:gray;
			text-transform:uppercase;
		}
		.action{
			font-size:10px;
			border:1px solid gray;
			width:60px;
			text-align:center;
			border-radius:10px;
			color:gray;
			display:inline-block;
			text-transform:uppercase;
		}
		.drama{
			font-size:10px;
			border:1px solid gray;
			width:60px;
			text-align:center;
			border-radius:10px;
			color:gray;
			margin-left:10px;
			display:inline-block;
			text-transform:uppercase;
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
			text-transform:uppercase;
		}
		#movietable{
			margin-top:10px;
			margin-right:50px;
			font-family:arial;
		}
		#nowavailabeltitle{
			font-family:arial;
			font-size:15px;
			color:white;
		}
		#fmenu{
			text-align:center;
		}
		#follow{
			font-family:arial;
			font-size:18px;
			color:white;
		}
		#fottor{
			
			height:100px;
			width:100%;
			padding-top:30px;
			box-shadow:0px -2px 2px #94c82f;
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
        
        <div id="slider">
            <div>
                <img src="poster/poster1.jpeg" height="100%" width="100%"/>
                <img src="poster/poster2.jpg" height="100%" width="100%"/>
                <img src="poster/poster3.jpg" height="100%" width="100%"/>
                <img src="poster/poster4.jpg" height="100%" width="100%"/>
                <img src="poster/student%20of%20the%20year%202.jpg" height="100%" width="100%"/>
                
            </div>
        </div>
        
	<div id="topm">
		<table border="0" cellspacing="50px" align="center">
			<tr>
				<td colspan="3" align="center" id="topmovietitle">
					TOP MOVIES
					 <hr size="2" width="135" color="#94c82f" align="center"/>
				</td>
			</tr>
			<tr>
                <?php
                    $query2="select * from home_page_top_movie where id=1";
                
                    $res2=mysqli_query($con,$query2);
                
                    while($data2=mysqli_fetch_array($res2))
                    {
                ?>
				<td>
					<div id="movie1">
						<div class="circle1">

						</div>
						<div class="circle2">
							<h3><?php echo $data2['name'];?></h3>
						</div>
					</div>
				</td>
                <?php
                    }
                ?>
                <?php
                    $query2="select * from home_page_top_movie where id=2";
                
                    $res2=mysqli_query($con,$query2);
                
                    while($data2=mysqli_fetch_array($res2))
                    {
                ?>
				<td>
					<div id="movie2">
						<div class="circle3">

						</div>
						<div class="circle4">
							<h3><?php echo $data2['name'];?></h3>
						</div>
					</div>
				</td>
                <?php
                    }
                ?>
                <?php
                    $query2="select * from home_page_top_movie where id=3";
                
                    $res2=mysqli_query($con,$query2);
                
                    while($data2=mysqli_fetch_array($res2))
                    {
                ?>
				<td>
					<div id="movie3">
						<div class="circle5">

						</div>
						<div class="circle6">
							<h3><?php echo $data2['name'];?></h3>
						</div>
					</div>
				</td>
                <?php
                    }
                ?>
			</tr>
		</table>
	</div>

        <div id="featuredMovies">
            <table border="0" cellspacing="20" width="100%">
                <tr>
                    <td colspan="4" id="featuretitle">
                        FEATURED MOVIES
                        <hr size="2" width="142" color="#94c82f" align="left"/>
                    </td>
                </tr>
                <tr>
			<?php
                $query="select * from FEATURED_MOVIES where id>=1 and id<=4";

				$res=mysqli_query($con,$query);	    
                
				while($data=mysqli_fetch_array($res))
				{
				
			?>
	
                    <td>
                        <div class="featuredMovie">
                            <div class="fmposter"><img src="poster/<?php echo $data['poster'];?>" height="100%" width="100%"/></div>
                            <div class="moviename"><?php echo $data['name'];?></div>
                            <div class="rdate"><?php echo $data['rdate']?></div>
                        </div>
                    </td>

			<?php
				
				}
				$query="select * from FEATURED_MOVIES where id>=5 and id<=8";

				$res=mysqli_query($con,$query);	

			?>
                 
                </tr>
                <tr>
			<?php

				while($data=mysqli_fetch_array($res))
				{
					
			?>	


                    <td>
                        <div class="featuredMovie">
                            <div class="fmposter"><img src="poster/<?php echo $data['poster'];?>" height="100%" width="100%"/></div>
                            <div class="moviename"><?php echo $data['name'];?></div>
                            <div class="rdate"><?php echo $data['rdate'];?></div>
                        </div>
                    </td>

				<?php

				}
				?>
                    <td>
			<?php
				while($data=mysqli_fetch_array($res))
				{
				
			?>
                        <div class="featuredMovie">
                            <div class="fmposter"><img src="poster/<?php echo $data['poster'];?>" height="100%" width="100%"/></div>
                            <div class="moviename"><?php echo $data['name'];?></div>
                            <div class="rdate"><?php echo $data['rdate'];?></div>
                        </div>
                    </td>
			<?php

				}
				?>

                     </tr>
            </table>
        </div>

	<div id="nowshow">
				<table border="0">
			<tr>
				<td id="lpaneltd" valign="top">
				<div id="lpanel">
				<div id="topmovies">TOP MOVIES</div>
				<div id="region">IN YOUR REGION</div>
				<table border="0" width="300px">
					
					<?php
						$id=0;
						$query="select * from top_movies";
						
						$res=mysqli_query($con,$query);

						while($data=mysqli_fetch_array($res))
						{
							
					?>	
						<tr>				
						<td class="heart" align="right" width="50px">&hearts;</td>
						<td class="per" align="center" width="50px"><?php echo $data['rate']."%"?></td>
						<td class="mname" align="left" width="200px"><?php echo $data['movie_name'];?><?php $id++;?></td>

						
					</tr>
					<?php	
						
					}	
					?>
									</table>


			</div>

				</td>
				<td>
			<table border="0" id="movietable" cellspacing="50px">
				<tr  align="center">
					<td colspan="3" id="nowavailabeltitle">
NOW AVAILABEL
					<hr size="2" width="142" color="#94c82f" align="center"/>
</td>
					
				</tr>
				<Tr>
					<?php
						
					$query="select * from now_available where id>=1 and id<=3";

					$res=mysqli_query($con,$query);	
	
					while($data=mysqli_fetch_array($res))

					{

					?>
					

					<td>
						<div id="box">
							<div class="poster">
								<img src="poster/<?php echo $data['poster']; ?>" height="125px" width="300px"/>
							</div>
							<div class="postername">
								<table border="0" cellspacing="10px" width="300px">
									<tr>
										<td>
									<?php echo $data['name'];?>								</td>
									</tr>
									<tr>
										<td class="lan">
										<?php echo $data['language'];?>
										</td>
									</tr>
									<tr>
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
								</div>
							</a>
						</div>
					</td>
					
					<?php
						}
		
					?>


				</tr>

				<Tr>
					<?php
						
					$query="select * from now_available where id>=4 and id<=6";

					$res=mysqli_query($con,$query);	
	
					while($data=mysqli_fetch_array($res))

					{

					?>
				
					<td>
						<div id="box">
							<div class="poster">
								<img src="poster/<?php echo $data['poster']; ?>" height="125px" width="300px"/>
							</div>
							<div class="postername">
								<table border="0" cellspacing="10px" width="300px">
									<tr>
										<td>
									<?php echo $data['name'];?>								</td>
									</tr>
									<tr>
										<td class="lan">
										<?php echo $data['language'];?>
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
							</div>
						</a>
						</div>
					</td>
					
					<?php
						}
		
					?>
					

				</tr>
				
				<Tr>

										<?php
						
					$query="select * from now_available where id>=7 and id<=9";

					$res=mysqli_query($con,$query);	
	
					while($data=mysqli_fetch_array($res))

					{

					?>
				
					<td>
						<div id="box">
							<div class="poster">
								<img src="poster/<?php echo $data['poster']; ?>" height="125px" width="300px"/>
							</div>
							<div class="postername">
								<table border="0" cellspacing="10px" width="300px">
									<tr>
										<td>
									<?php echo $data['name'];?>								</td>
									</tr>
									<tr>
										<td class="lan">
										<?php echo $data['language'];?>
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
							</div>
						</a>
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
	<div id="fottor">
		<table border="0" width="100%">
			<tr align="center">
				<td>
					<div id="flogo">
             				   <img src="logo.png" height="100%" width="100%"/>
         				</div>
				</td>
				<td>
					<ul id="fmenu">
						<li>HOME</li><br>
						<li>MOVIES</li><br>
						<li>VIDEOS</li>	<br>
						<li>2016</li><br>
						<li>OFFERS</li><br>
						<li>GIFTS</li><br>
				
					</ul>
				</td>
				<td>
					<table border="0">
						<tr align="center">
							<td colspan="3" id="follow">
								FOLLOW US
							</td>
						</tr>
						<tr>
							<td>	
								<img src="user icon.png" height="50px" width="50px"/>
							</td>
							<td>	
								<img src="user icon.png" height="50px" width="50px"/>
							</td>
							<td>	
								<img src="user icon.png" height="50px" width="50px"/>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
	
    </body>
</html>