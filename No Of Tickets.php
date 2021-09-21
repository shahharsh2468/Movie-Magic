<?php
    session_start();

	$mid=$_GET['mid'];
	
	$tid=$_GET['tid'];

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


	#ticketform{
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
	}
	#mainbox{
		height:120px;
		width:350px;
		//background-color:white;
		text-align:center;
		padding-top:80px;
		border:8px solid white;
		border-radius:25px 25px 0px 0;
	}
	#mainbox input{
		height:40px;
		width:300px;
		padding-left:5px;
		background-color:#222;
		border:none;
		outline:none;
		border:1px solid #94c82f;
		color:white;
	}
	#mainbox input:focus{
		box-shadow: 0px 0px 10px #94c82f;
	}
	#btn{
		height:40px;
		width:365px;
		border:none;
		outline:none;
		background-color:#94c82f;
		color:white;
		font-family:arial;
		font-size:18px;
	}
	#ticketimg{
		position:absolute;
		top:50%;	
		left:50%;
		transform:translate(-50%,-50%);
	}
	#ticketimg img{
		position:absolute;
		top:50%;	
		left:50%;
		transform:translate(-50%,-50%);
	}
	#noofticket{
		height:40px;
		width:220px;
		position:absolute;
		top:50%;	
		left:48%;
		transform:translate(-50%,-50%);
		border:none;
		color: #94c82f;
		outline:none;
		background-color:transparent;
	}
	#subbtn{
		height:70px;
		width:70px;
		background-color:#94c82f;
		position:absolute;
		top:50%;
		left:64%;
		transform:translate(-50%,-50%);
		border-radius:50%;

	}
	#subbtn input{
		background-color:#94c82f;
		border:none;
		outline:none;
		color:white;
		font-family:arial;
		font-size:18px;
		position:relative;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
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
	
	<div id="ticketimg">
		<img src="ticket1.png" height="356" width="400"/>
			
	</div>
	<form action="Seat Selection.php?mid=<?php echo $mid;?>&tid=<?php echo $tid;?>" method="post">

	<input type="text" placeholder="Enter No Of Tickets" id="noofticket" name="nt"/>

	<div id="subbtn"><input type="submit" value="OK"/></div>

	</form>
        
    <?php        
        
        $name=$_SESSION['uname'];
        
        $con = mysqli_connect('localhost','root','','movie magic');
        
        $query = "select * from registration where email='$name'";
        
        $res = mysqli_query($con,$query);
        
        if($res)
        {
            while($data=mysqli_fetch_array($res))
            {
                $cid = $data['cid'];    
            }
            
            $query = "select * from time_table where id=$tid";
            
            $res = mysqli_query($con,$query);
            
            while($data=mysqli_fetch_array($res))
            {
                $price = $data['price'];    
            }
                 
            $query = "update temp_payment set cid=$cid,mid=$mid,tid=$tid,price=$price";
            
            $res = mysqli_query($con,$query);
        }
        
    ?>
<!--
	<div id="ticketform">
		<table border="0">
			<tr>
				<Td>
					<div id="mainbox">
						<input type="text" placeholder="Enter No Of Tickets"/>
					</div>
					<input type="submit" value="OK" id="btn"/>
				</td>			
			</tr>
		</table>
	</div>
-->
	</body>
</html>