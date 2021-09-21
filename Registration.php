<html>
    <head>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            background: #222;
        }    
        #form{
            position: absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
            border:3px solid white;
            border-radius: 15px;
            padding: 30px;
        }
        #box1,#box2{
            height: 40px;
            width: 240px;
            background-color:#94c82f;
            border: 1px solid white;
            margin: 0px;
        }
        #box1{
            border-radius: 2px 2px 0px 0;
            margin-bottom: -4px;
        }
        #box2{
            border-radius: 0px 0px 2px 2px;
        }
        #uicon{
            display: inline-block;
            float: left;
            margin-top: 10px;
            margin-left: 5px;
        }
       
        #picon{
            display: inline-block;
            float: left;
            margin-top: 10px;
            margin-left: 5px;
        }
        #uid,#pass,#uemail,#cpass,#phone{
            height: 30px;
            width: 200px;
            display: inline-block;
            float: left;
            margin:5px;
            border: none;
            background: transparent;
            outline: none;
            color: white;
            height: 40px;
            width: 240px;
            background-color:#94c82f;
            border: 1px solid white;
            margin: 0px;
            padding-left: 10px;
            margin-top: 5px;
        }
        #btn{
            height: 30px;
            width: 150px;
            margin-top: 20px;
            border: none;
            background-color: white;
            outline:none;
            border-radius: 2px;
            font-family: arial;
            font-size: 15px;
        }
        #logo{
            transform: rotate(-10deg);
            margin-bottom: 40px;
        }
        #main{
            height: 100vh;
            width: 100%;
            background-image: url('poster/grid%201.jpg');
            background-size: 100% 100%;
        }
        #blackLayer{
            height: 100vh;
            width: 100%;
            background-color: #222;
            position: absolute;
            opacity: .80;
        }
        a{
            color: white;
            position: relative;
            top:10px;
        }
    </style>
    <script src="jquery-1.10.2.min.js"></script>    
    <script>
            $(document).ready(function(){
               <?php
                    if($_GET['flag']==0)
                    {
                ?>
                    alert("Password Not Match");
                <?php
                    }
                    if($_GET['flag']==1)
                    {
                ?>
                    alert("Record Not Inserted");
                <?php
                    }
                ?>
            });
    </script>
    </head>
    <body>
        <div id="blackLayer"></div>
        <div id="main">
            <div id="form">
                <table cellspacing="0" border="0">
                    <form action="Registration Data.php" method="post">
                        <tr>
                            <Td align="center">
                                <img src="logo.png" height="80px" width="100px" id="logo"/>
                            </Td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" id="uid" name="uname" placeholder="Enter Name" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="email" id="uemail" placeholder="Enter Email" name="uemail" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" id="pass" name="pass" placeholder="Enter Password" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" id="cpass" name="cpass" placeholder="Confirm Password" required/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" id="phone" name="phone" placeholder="Enter Contact NO" required/>
                            </td>
                        </tr>
                        <tr align="center">
                            <td>
                                <input type="submit" value="SIGN UP" id="btn"/>
                            </td>
                        </tr>
                        
                        <tr>
                            <td align="center">
                                <a href="User%20Login.php">already have an account?</a>
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </body>
</html>