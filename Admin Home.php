<?php
    session_start();

    if(!isset($_SESSION['uid']))
    {
        header('location:Admin Login.html');
    }

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
                top:0;
                left: 0;
                z-index: 999;
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
                z-index: 9;
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
            a{
                color:white;
                text-decoration: none;
            }
            #addfeature{
                height:auto;
                width: auto;
                background-color: #94c82f;
                position: absolute;
                top:100;
                right: 0;
                font-family: arial;
                padding:10px 5px;
                border-radius: 20px 0px 0px 20px;
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
        <a href="Admin%20Update%20Featured%20Movie.php"><div id="addfeature">UPDATE FEATURED MOVIE</div></a>
        <a href=""><div id=""></div></a>
    </body>
</html>