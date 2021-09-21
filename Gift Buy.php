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
		font-family:arial;
		margin-right:30px;
		color:#94c82f;
            	text-shadow:0px 0px 10px #94c82f;
            	text-decoration: none;
	}
	#offers{
		
		font-family:arial;
		margin-right:30px;
		 color:white;
            	text-shadow:0px 0px 10px #94c82f;
            	text-decoration: none;
	}
	</style>
	</head>

	<body>
		<div id="main">
            <div id="menu">
                <ul>
                    <li><a href="#" id="a1">HOME</a></li>
                    <li><a href="#" id="a2">MOVIES</a></li>
                    <li><a href="#" id="a3">VIDEOS</a></li>
                    <li><a href="#" id="a4">2016</a></li>
                </ul>
            </div>
            <div id="logo">
                <img src="logo.png" height="100%" width="100%"/>
            </div>
            <div id="search">
                <table border="0">
                    <tr>
			<td>
				<a href="#" id="offers">OFFERS</a>
			</td>
			<td>
				<a href="#" id="gifts">GIFTS</a>
			</td>
                        <td>
                            <input type="text" placeholder="SEARCH"/>
                        </td>
                        <td>
                            <a href="" id=""><img src="Login.png" height="30px" width="30px"/></a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

	
	</body>
</html>