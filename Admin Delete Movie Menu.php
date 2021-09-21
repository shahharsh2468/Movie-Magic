<?php
	session_start();

    if(!isset($_SESSION['uid']))
    {
        header('location:Admin Login.html');
    }

	$con=mysqli_connect('localhost','root','','movie magic');

	$query="select * from now_available where id>=1 and id<=4";

	$res=mysqli_query($con,$query);

?>


<html>
    <head>
        <style>
            body{
                margin: 0px;
                padding: 0px;
                background-color: whitesmoke;
            }
            #lpanel{
                width: 200px;
                height: 100vh;
                position: fixed;
				z-index:999;
                top:0;
                left: 0;
                background-color: #222;
            }
            #logo{
                height: 80px;
                width: 100px;
                float: left;
                margin-left:45px;
                margin-top: 30px;
                transform: rotate(-10deg);
            }
            #menu{
                margin-top: 200px;
            }
            #menu ul{
                margin: 0px;
                padding: 0px;
                list-style: none;
            }
            #menu ul li{
                color:white;
                font-family: arial;
                font-size:15px;
                text-align: center;
                padding: 10px;
            }
            #menu ul li:first-child{
                color:#94c82f;
                text-shadow:0px 0px 10px #94c82f;
            }
            #submenu1{
                width: 150px;
                height: 200px;
                background-color: #222;
                position: absolute;
                top:30%;
                left: 0px;
                z-index: 9;
                border-radius: 0px 10px 10px 0px;
                box-shadow: inset 5px 0px 10px black;
                transition: all .5s linear;
            }
            #submenu1 ul{
                margin: 0px;
                padding: 0px;
                list-style: none;
                margin-top:45px; 
            }
            #submenu1 ul li{
                color:white;
                font-family: arial;
                font-size:15px;
                text-align: center;
                padding: 10px;
            }
            #submenu2{
                width: 150px;
                height: 200px;
                background-color: #222;
                position: absolute;
                top:30%;
                left: 0px;
                z-index: 9;
                border-radius: 0px 10px 10px 0px;
                box-shadow: inset 5px 0px 10px black;
                transition: all .5s linear;
            }
            #submenu2 ul{
                margin: 0px;
                padding: 0px;
                list-style: none;
                margin-top:65px; 
            }
            #submenu2 ul li{
                color:white;
                font-family: arial;
                font-size:15px;
                text-align: center;
                padding: 10px;
            }
            #submenu3{
                width: 150px;
                height: 200px;
                background-color: #222;
                position: absolute;
                top:30%;
                left: 0px;
                z-index: 9;
                border-radius: 0px 10px 10px 0px;
                box-shadow: inset 5px 0px 10px black;
                transition: all .5s linear;
            }
            #submenu3 ul{
                margin: 0px;
                padding: 0px;
                list-style: none;
                margin-top:65px; 
            }
            #submenu3 ul li{
                color:white;
                font-family: arial;
                font-size:15px;
                text-align: center;
                padding: 10px;
            }
            #submenu4{
                width: 150px;
                height: 200px;
                background-color: #222;
                position: absolute;
                top:30%;
                left: 0px;
                z-index:9;
                border-radius: 0px 10px 10px 0px;
                box-shadow: inset 5px 0px 10px black;
                transition: all .5s linear;
            }
            #submenu4 ul{
                margin: 0px;
                padding: 0px;
                list-style: none;
                margin-top:65px; 
            }
            #submenu4 ul li{
                color:white;
                font-family: arial;
                font-size:15px;
                text-align: center;
                padding: 10px;
            }
            #submenu5{
                width: 150px;
                height: 200px;
                background-color: #222;
                position: absolute;
                top:30%;
                left: 0px;
                z-index: 9;
                border-radius: 0px 10px 10px 0px;
                box-shadow: inset 5px 0px 10px black;
                transition: all .5s linear;
            }
            #submenu5 ul{
                margin: 0px;
                padding: 0px;
                list-style: none;
                margin-top:8px; 
            }
            #submenu5 ul li{
                color:white;
                font-family: arial;
                font-size:15px;
                text-align: center;
                padding: 10px;
            }
            #rpanel{
                width: calc(100% - 200px);
                height: 100vh;
                position:fixed;
                top:0;
                right: 0;
            }
            #rpanel table{
                margin-top: 20px;
                font-family: arial;
                font-size: 16px;
                color:#222;
            }
            #mname{
                height: 30px;
                width: 325px;
                border: none;
                outline: none;
                padding-left: 5px;
                font-family: arial;
                font-size: 16px;
                border: 3px solid #03384b;
            }
           
            
            #mcategory1{
                 height: 30px;
                width: 150px;
                border: none;
                outline: none;
                padding-left: 5px;
                font-family: arial;
                font-size: 16px;
                border: 3px solid #03384b;
            }
            #mcategory2{
                 height: 30px;
                width: 150px;
                border: none;
                outline: none;
                padding-left: 5px;
                font-family: arial;
                font-size: 16px;
                border: 3px solid #03384b;
            }
        #photo{
            display: inline-block;
            width: 323px;
            height: 30px;
            margin: 0px;
            padding: 0px;
            background-color: white;
            border: 3px solid #03384b;
            z-index: -1;
        }
        
        #photo > input[type="file"]{
            float: left;
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            cursor: pointer;
            position: relative;
            z-index: 4;
            opacity: 0;
            top:0;
        }
        #photo > span{
           position: relative;
            top:-25;
            left: 5;
            margin: 0px;
            font-family: arial;
            font-size: 16px;
            color:black;
            
        }
            #photo:before{
           position: relative;
            top:0px;
            left: 5;
            padding: 0px;
            content: '';
            font-size: 24px;
            font-family: 'Ionicons';
            color:gray;
        }
            #rate{
                height: 30px;
                width: 325px;
                border: none;
                outline: none;
                padding-left: 5px;
                font-family: arial;
                font-size: 16px;
                border: 3px solid #03384b;
            }
            #rdate{
                height: 30px;
                width: 325px;
                border: none;
                outline: none;
                padding-left: 5px;
                font-family: arial;
                font-size: 16px;
                border: 3px solid #03384b;
            }
            #dh{
                height: 30px;
                width: 149px;
                border: none;
                outline: none;
                padding-left: 5px;
                font-family: arial;
                font-size: 16px;
                border: 3px solid #03384b;
            }
            #dm{
                height: 30px;
                width: 150px;
                border: none;
                outline: none;
                padding-left: 5px;
                font-family: arial;
                font-size: 16px;
                border: 3px solid #03384b;
            }
            #sbt{
                height: 35px;
                width: 120px;
                border: none;
                outline: none;
                font-family: arial;
                font-size: 14px;
                background-color: white;
                border-radius: 35px;
                border: 3px solid #03384b;
            }
            #addmovie{
                font-family: arial;
                font-size: 25px;
            }
            .movietd img{
                height: 100px;
                width: 100px;
                border-radius: 50px;
            }
            h2{
                font-family: arial;
                font-size: 15px;
            }
			a{
                color:white;
                text-decoration: none;
            }
        </style>
        <script src="jquery-1.10.2.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                flag1=0;
                flag2=0;
                flag3=0;
                flag4=0;
                flag5=0;
               $("#mmovie").click(function(){
                   if(flag1==0)
                    {
                        $("#submenu2").css("left","0px"); 
                        flag2=0;
                        $("#submenu3").css("left","0px"); 
                        flag3=0;
                        $("#submenu4").css("left","0px"); 
                        flag4=0;
                        $("#submenu1").css("left","200px"); 
                        flag1=1;
                        $("#submenu5").css("left","0px"); 
                        flag5=0;
                    }
                    else
                    {
                        $("#submenu1").css("left","0px"); 
                        flag1=0;
                    }
               });
                $("#mtrailer").click(function(){
                   if(flag2==0)
                    {
                        $("#submenu1").css("left","0px"); 
                        flag1=0;
                        $("#submenu3").css("left","0px"); 
                        flag3=0;
                        $("#submenu4").css("left","0px"); 
                        flag4=0;
                        $("#submenu2").css("left","200px"); 
                        flag2=1;
                        $("#submenu5").css("left","0px"); 
                        flag5=0;
                    }
                    else
                    {
                        $("#submenu2").css("left","0px"); 
                        flag2=0;
                    }
               });
                $("#moffers").click(function(){
                   if(flag3==0)
                    {
                        $("#submenu1").css("left","0px"); 
                        flag1=0;
                        $("#submenu3").css("left","200px"); 
                        flag3=1;
                        $("#submenu4").css("left","0px"); 
                        flag4=0;
                        $("#submenu2").css("left","0px"); 
                        flag2=0;
                        $("#submenu5").css("left","0px"); 
                        flag5=0;
                    }
                    else
                    {
                        $("#submenu3").css("left","0px"); 
                        flag3=0;
                    }
               });
                $("#mgift").click(function(){
                   if(flag4==0)
                    {
                        $("#submenu1").css("left","0px"); 
                        flag1=0;
                        $("#submenu3").css("left","0px"); 
                        flag3=0;
                        $("#submenu4").css("left","200px"); 
                        flag4=1;
                        $("#submenu2").css("left","0px"); 
                        flag2=0;
                        $("#submenu5").css("left","0px"); 
                        flag5=0;
                    }
                    else
                    {
                        $("#submenu4").css("left","0px"); 
                        flag4=0;
                    }
               });
                $("#mreports").click(function(){
                   if(flag5==0)
                    {
                        $("#submenu1").css("left","0px"); 
                        flag1=0;
                        $("#submenu3").css("left","0px"); 
                        flag3=0;
                        $("#submenu4").css("left","0px"); 
                        flag4=0;
                        $("#submenu2").css("left","0px"); 
                        flag2=0;
                        $("#submenu5").css("left","200px"); 
                        flag5=1;
                    }
                    else
                    {
                        $("#submenu5").css("left","0px"); 
                        flag5=0;
                    }
               });
                $("#photo > input").on('change',function(){
               
                var newValue=$(this).val();
                var onlyname=newValue.split(/(\\|\/)/g).pop();
                $("#msg").html(onlyname);
                
            });
            });
        </script>
    </head>
    <body>
        <div id="lpanel">
            <div id="logo"><img src="logo.png" height="100%" width="100%"/></div>
            <div id="menu">
                <ul>
                    <li><a href="Admin%20Home.php">HOME</a></li>
                    <li id="mmovie">MOVIE</li>
                    <li id="mtrailer">TRAILER</li>
                    <li id="moffers">OFFERS</li>
                    <li id="mgift">GIFT</li>
                    <li id="mreports">REPORTS</li>
                    <li id="mlogout"><a href="Logout.php">LOGOUT</a></li>
                </ul>
            </div>
            
        </div>
        <div id="submenu1">
                <ul>
                    <li><a href="Admin%20Add%20Movie%20Menu.php">ADD MOVIE</a></li>
                    <li><a href="Admin%20Update%20Movie%20Menu.php">UPDATE MOVIE</a></li>
                    <li><a href="Admin%20Delete%20Movie%20Menu.php">DELETE MOVIE</a></li>
                </ul>
        </div>
        <div id="submenu2">
                <ul>
                    <li><a href="Admin%20Add%20Trailer%20Menu.php">ADD TRAILER</a></li>
                    <li><a href="Admin%20Delete%20Trailer%20Menu.php">DELETE TRAILER</a></li>
                </ul>
        </div>
        <div id="submenu3">
                <ul>
                    <li><a href="Admin%20Add%20Offer%20Menu.php">ADD OFFERS</a></li>
                    <li><a href="Admin%20Delete%20Offer%20Menu.php">DELETE OFFERS</a></li>
                </ul>
        </div>
        <div id="submenu4">
                <ul>
                    <li><a href="Admin%20Add%20Gift%20Menu.php">ADD GIFT</a></li>
                    <li><a href="Admin%20Delete%20gift%20Menu.php">DELETE GIFT</a></li>
                </ul>
        </div>
        <div id="submenu5">
                <ul>
                    <li><a href="Admin%20Report%20Menu.php">USERS</a></li>
                    <li><a href="Admin%20Movie%20Report%20Menu.php">MOVIES</a></li>
                    <li><a href="Admin%20Trailer%20Report%20Menu.php">TRAILER</a></li>
                    <li><a href="Admin%20Offer%20Report%20Menu.php">OFFERS</a></li>
                    <li><a href="Admin%20Gift%20Report%20Menu.php">GIFT</a></li>
                </ul>
        </div>
        <div id="rpanel">
            <table border="0" align="center" cellspacing="20px" cellpadding="20px">
                <tr  align="center">
			<?php

				while($data=mysqli_fetch_array($res))

				{
			?>
		
                    <td>
                        <div class="movietd">
                            <a href="Movie Delete.php?mid=<?php echo $data['id'];?>"><img src="poster/<?php echo $data['poster'];?>" height="100%" width="100%"/></a>
                        </div>
                        <h2><?php echo $data['name'];?></h2>
                    </td>
			<?php
				}

				$query="select * from now_available where id>=5 and id<=8";

				$res=mysqli_query($con,$query);
			?>
                    
                </tr>
                <tr align="center">
			<?php

				while($data=mysqli_fetch_array($res))

				{
			?>
                    <td>
                        <div class="movietd">
                            <a href="Movie Delete.php?mid=<?php echo $data['id'];?>"><img src="poster/<?php echo $data['poster'];?>" height="100%" width="100%"/></a>
                        </div>
                        <h2><?php echo $data['name'];?></h2>
                    </td>
			<?php
				}

				$query="select * from now_available where id>=9 and id<=12";

				$res=mysqli_query($con,$query);
			?>
                   
                </tr>
                <tr align="center">
			<?php

				while($data=mysqli_fetch_array($res))

				{
			?>
                    <td>
                       <div class="movietd">
                            <a href="Movie Delete.php?mid=<?php echo $data['id'];?>"><img src="poster/<?php echo $data['poster'];?>" height="100%" width="100%"/></a>
                        </div>
                        <h2><?php echo $data['name'];?></h2>
                    </td>

			<?php
				}
			?>
                    
                </tr>
            </table>
        </div>
    </body>
</html>