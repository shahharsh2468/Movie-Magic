<?php
    session_start();

	$id=$_GET['gid'];

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
		padding-right:2px;
        	margin-left:17%;
        	margin-top: 10px;
		background-color:#222;
        	transform: rotate(-10deg);
		z-index:9999;
        }
        a{
            color:white;
            text-shadow:0px 0px 10px #94c82f;
            text-decoration: none;
        }
        #gifts{
		color:#94c82f;
		font-family:arial;
           	text-shadow:0px 0px 10px #94c82f;
		margin-right:30px;
            	text-decoration: none;
	}
	#offers{
		font-family:arial;
		margin-right:30px;
		color:white;
            	text-shadow:0px 0px 10px #94c82f;
            	text-decoration: none;
	}
	#title{
		
		padding-top:120px;
	}
	#to{
		color:white;
		font-family:arial;
		font-size:15px;
		height:10px;
		width:100px;
		border-bottom:2px solid #94c82f;
	}
	#recipientname{
		color:#222;
		border:none;
		background-color:white;
		height:30px;
		outline:none;
		width:300px;
		padding-left:5px;
		font-size:15px;
	}
	#message{
		color:#222;
		font-family:arial;
		font-size:15px;
		width:300px;
		height:150px;
		padding-left:5px;
		resize:none;
		outline:none;
	}
	#bestwishes{
		color:white;
		font-family:arial;
		font-size:15px;
		border-bottom:2px solid #94c82f;
	}
	#yourname{
		color:#222;
		font-family:Lucida Handwriting;
		font-size:25px;
		height:30px;
		width:300px;
		outline:none;
		padding-left:5px;
	}
	#payment{
		height:50px;
		width:300px;
		background-color:#94c82f;
		color:white;
		font-family:arial;
		font-size:18px;
		border:none;
		outline:none;
		margin-top:10px;
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
	<table border="0" id="title" align="center" cellpadding="2px">
		<tr>
			<td>
				<img src="bms_and_baskin_robbins_combo_19452016114548.jpg" height="200px" width="300px" id="img"/>
			</td>
		</tr>
		<tr>
			<form action="gift data.php?gid=<?php echo $id;?>" method="post">
			<td id="to">
				To:
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" placeholder="Recipient Name" id="recipientname" name="to"/>
			</td>
		</tr>
		<tr>
			<td>
				<textarea cols="22" rows="5" placeholder="Type Your Message Here" id="message" name="msg"></textarea>
			</td>
		</tr>
		<tr>
			<td id="bestwishes">
				Best Wishes
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" placeholder="Your Name" id="yourname" name="from"/>
			</td>
		</tr>
		<tr align="center">
			<td>
				<input type="submit" value="MAKE PAYMENT" id="payment"/>
			</td>

			</form>
		</tr>
	</table>
	</body>
</html>