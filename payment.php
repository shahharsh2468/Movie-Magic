<?php
    session_start();

    if(!isset($_SESSION['uname']))
    {
        header('location:User Login.html');
    }
?>

<html>
	<head>
	<style>
		body{
            	margin: 0;
		background-color:#222;
		background:url('card2.jpg');
		background-size:100% 100%; 
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
	padding-right:2px;
            margin-left:17%;
            margin-top: 10px;
            transform: rotate(-10deg);
		z-index:99;
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

	#card{
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
		background-color:silver;
		height:220px;
		width:380px;
		border-radius:3%;
		font-family:arial;
		padding:10px;
		
	}
	#cardno{
		letter-spacing:2px;
		height:35px;
		width:260px;
		color:black;
		padding-left:8px;
		outline:none;
	}
	#cardname{
		letter-spacing:2px;
		height:35px;
		width:260px;
		color:black;
		padding-left:8px;
		outline:none;
	}	
	#mm{
		height:35px;
		width:40px;
		text-align:center;
		outline:none;
	}
	#yy{
		height:35px;
		width:40px;
		text-align:center;
		outline:none;
	}
	#cvv{
		margin-right:50px;
		height:35px;
		width:80px;
		text-align:center;
		letter-spacing:2px;
		outline:none;
	}
	#makepayment{
		height:40px;	
		width:250px;
		border:none;
		background-color:#94c82f;
		border-radius:2px;
		color:white;
		letter-spacing:2px;
		margin-top:50px;
		margin-left:60px;
		outline:none;		
	}
	#blackLayer{
		height:100%;
		width:100%;	
		background-color:#222;
		opacity:0.5;
		position:absolute;
		z-index:-1;
	}
	</style>
	</head>
	<body>

		<div id="blackLayer"></div>
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
	<div id="card">
		<table border="0" height="100%" width="100%">
            <form action="Payment Data.php" method="post">
			<tr>
				<td colspan="2">
					Card Number<br>
					<input type="text" id="cardno" placeholder="ENTER YOUR CARD NUMBER" maxlength="25" name="cardnumber"/>					
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="text" id="cardname" placeholder="NAME ON THE CARD" name="nameoncard"/>
				</td>
			</tr>
			<tr>
				<td>
					Expiry<br>
					<input type="text" id="mm" maxlength="2" placeholder="MM" name="mm"/>
					<input type="text" id="yy" maxlength="2" placeholder="YY" name="yy"/>
				</td>
				<td>
					CVV<br>
					<input type="text" id="cvv" maxlength="3" placeholder="CVV" name="cvv"/>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="MAKE PAYMENT" id="makepayment"/>
				</td>
			</tr>
		  </form>
			</table>
		</div>

	</body>
</html>