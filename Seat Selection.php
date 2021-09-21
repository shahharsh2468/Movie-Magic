<?php
    session_start();

    $noseat=$_POST['nt'];

    $mid=$_GET['mid'];

    $tid=$_GET['tid'];
?>


<html>
	<head>
	<style>
	body{
            	margin: 0;
		background-color:#222;
		background:url('seat.jpg');
		background-size:100% 100%;
		
        }
        #main{
            height: 60px;
            width: 100%;
            background-color: #222222;
            position: fixed;
            z-index: -1;
		box-shadow:0px 1px 5px #94c82f;
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
	#seats{
		position:absolute;
		top:50%;
		left:50%;
		transform:translate(-50%,-50%);
	}
	.seat{
		height:45px;
		width:45px;
		background-color:white;
		border-radius:50%;
		text-align:center;
		line-height:45px;
		font-family:arial;
		font-size:15px;
		transition:all .5s;
	}
        #continue{
           height:40px;
		width:100px;
		background-color:white;
		border-radius:40px;
		text-align:center;
		line-height:45px;
		font-family:arial;
		font-size:15px;
        //margin-left: 100px;
        }
	.seat:hover{
		background-color:#94c82f;
		color:white;
		box-shadow:0px 0px 1px 3px #94c82f,
			inset 0px 0px 1px 5px #222;
	}
	.sofa{
		height:40px;
		width:100px;
		background-color:white;
		border-radius:40px;
		text-align:center;
		line-height:40px;
		font-family:arial;
		font-size:15px;
		transition:all .5s;
	}
	.sofa:hover{
		background-color:#94c82f;
		color:white;
		box-shadow:0px 0px 1px 3px #94c82f,
			inset 0px 0px 1px 5px #222; 
	}
	.ser{
		color:#94c82f;
		font-family:arial;
		font-size:15px;
	}	
	#blackLayer{
		height:100%;
		width:100%;
		background-color:#222;
		opacity:0.7;
		position:absolute;
		z-index:-1;
	}
	</style>	
    <script src="jquery-1.10.2.min.js">
    </script>
    <script>
        $(document).ready(function(){
           va=document.getElementById('ns').value;
 
            counter=1;
            sff1=0;
            sff2=0;
            sff3=0;
            sff4=0;
            sff5=0;
            sff6=0;
            af1=0;
            af2=0;
            af3=0;
            af4=0;
            af5=0;
            af6=0;
            af7=0;
            af8=0;
            af9=0;
            af10=0;
            af11=0;
            af12=0;
            bf1=0;
            bf2=0;
            bf3=0;
            bf4=0;
            bf5=0;
            bf6=0;
            bf7=0;
            bf8=0;
            bf9=0;
            bf10=0;
            bf11=0;
            bf12=0;
            cf1=0;
            cf2=0;
            cf3=0;
            cf4=0;
            cf5=0;
            cf6=0;
            cf7=0;
            cf8=0;
            cf9=0;
            cf10=0;
            cf11=0;
            cf12=0;
            df1=0;
            df2=0;
            df3=0;
            df4=0;
            df5=0;
            df6=0;
            df7=0;
            df8=0;
            df9=0;
            df10=0;
            df11=0;
            df12=0;
            ef1=0;
            ef2=0;
            ef3=0;
            ef4=0;
            ef5=0;
            ef6=0;
            ef7=0;
            ef8=0;
            ef9=0;
            ef10=0;
            ef11=0;
            ef12=0;
            ff1=0;
            ff2=0;
            ff3=0;
            ff4=0;
            ff5=0;
            ff6=0;
            ff7=0;
            ff8=0;
            ff9=0;
            ff10=0;
            ff11=0;
            ff12=0;
                $("#sf1").click(function(){
                    if(sff1==0)
                    {
                        if(counter<=va)
                        {
                            $("#sf1").css('background-color','#94c82f'); 
                            counter++;
                        }
                        sff1=1;
                    }
                    
                });
                $("#sf2").click(function(){
                    if(sff2==0)
                    {
                        if(counter<=va)
                        {
                            $("#sf2").css('background-color','#94c82f');  
                            counter++;
                        }
                     sff2=1;
                    }
                });
                $("#sf3").click(function(){
                    if(sff3==0)
                    {
                        if(counter<=va)
                        {
                            $("#sf3").css('background-color','#94c82f');  
                            counter++;
                        }
                     sff3=1;
                    }
                });
                $("#sf4").click(function(){
                    if(sff4==0)
                    {
                        if(counter<=va)
                        {
                            $("#sf4").css('background-color','#94c82f');  
                            counter++;
                        }
                    sff4=1;
                    }
                });
                $("#sf5").click(function(){
                    if(sff5==0)
                    {
                        if(counter<=va)
                        {
                            $("#sf5").css('background-color','#94c82f');  
                            counter++;
                        }
                        sff5=1;
                    }
                });
                $("#sf6").click(function(){
                    if(sff6==0)
                    {
                        if(counter<=va)
                        {
                            $("#sf6").css('background-color','#94c82f');  
                            counter++;
                        }
                        sff6=1;
                    }
                });
                
                $("#af1").click(function(){
                    if(af1==0)
                    {
                        if(counter<=va)
                        {
                            $("#af1").css('background-color','#94c82f'); 
                            counter++;
                        }
                        af1=1;
                    } 
                });
                $("#af2").click(function(){
                    if(af2==0)
                    {
                        if(counter<=va)
                        {
                            $("#af2").css('background-color','#94c82f'); 
                            counter++;
                        }
                        af2=1;
                    } 
                });
                $("#af3").click(function(){
                    if(af3==0)
                    {
                        if(counter<=va)
                        {
                            $("#af3").css('background-color','#94c82f'); 
                            counter++;
                        }
                        af3=1;
                    } 
                });
                $("#af4").click(function(){
                    if(af4==0)
                    {
                        if(counter<=va)
                        {
                            $("#af4").css('background-color','#94c82f'); 
                            counter++;
                        }
                        af4=1;
                    } 
                });
                
                $("#af5").click(function(){
                    if(af5==0)
                    {
                        if(counter<=va)
                        {
                            $("#af5").css('background-color','#94c82f'); 
                            counter++;
                        }
                        af5=1;
                    } 
                });
                $("#af6").click(function(){
                    if(af6==0)
                    {
                        if(counter<=va)
                        {
                            $("#af6").css('background-color','#94c82f'); 
                            counter++;
                        }
                        af6=1;
                    } 
                });
                $("#af7").click(function(){
                    if(af7==0)
                    {
                        if(counter<=va)
                        {
                            $("#af7").css('background-color','#94c82f'); 
                            counter++;
                        }
                        af7=1;
                    } 
                });
                $("#af8").click(function(){
                    if(af8==0)
                    {
                        if(counter<=va)
                        {
                            $("#af8").css('background-color','#94c82f'); 
                            counter++;
                        }
                        af8=1;
                    } 
                });
                $("#af9").click(function(){
                    if(af9==0)
                    {
                        if(counter<=va)
                        {
                            $("#af9").css('background-color','#94c82f'); 
                            counter++;
                        }
                        af9=1;
                    } 
                });
                $("#af10").click(function(){
                    if(af10==0)
                    {
                        if(counter<=va)
                        {
                            $("#af10").css('background-color','#94c82f'); 
                            counter++;
                        }
                        af10=1;
                    } 
                });
                $("#af11").click(function(){
                    if(af11==0)
                    {
                        if(counter<=va)
                        {
                            $("#af11").css('background-color','#94c82f'); 
                            counter++;
                        }
                        af11=1;
                    } 
                });
                $("#af12").click(function(){
                    if(af12==0)
                    {
                        if(counter<=va)
                        {
                            $("#af12").css('background-color','#94c82f'); 
                            counter++;
                        }
                        af12=1;
                    } 
                });
                $("#bf1").click(function(){
                    if(bf1==0)
                    {
                        if(counter<=va)
                        {
                            $("#bf1").css('background-color','#94c82f'); 
                            counter++;
                        }
                        bf1=1;
                    } 
                });
                $("#bf2").click(function(){
                    if(bf2==0)
                    {
                        if(counter<=va)
                        {
                            $("#bf2").css('background-color','#94c82f'); 
                            counter++;
                        }
                        bf2=1;
                    } 
                });
                $("#bf3").click(function(){
                    if(bf3==0)
                    {
                        if(counter<=va)
                        {
                            $("#bf3").css('background-color','#94c82f'); 
                            counter++;
                        }
                        bf3=1;
                    } 
                });
                $("#bf4").click(function(){
                    if(bf4==0)
                    {
                        if(counter<=va)
                        {
                            $("#bf4").css('background-color','#94c82f'); 
                            counter++;
                        }
                        bf4=1;
                    } 
                });
                
                $("#bf5").click(function(){
                    if(bf5==0)
                    {
                        if(counter<=va)
                        {
                            $("#bf5").css('background-color','#94c82f'); 
                            counter++;
                        }
                        bf5=1;
                    } 
                });
                $("#bf6").click(function(){
                    if(bf6==0)
                    {
                        if(counter<=va)
                        {
                            $("#bf6").css('background-color','#94c82f'); 
                            counter++;
                        }
                        bf6=1;
                    } 
                });
                $("#bf7").click(function(){
                    if(bf7==0)
                    {
                        if(counter<=va)
                        {
                            $("#bf7").css('background-color','#94c82f'); 
                            counter++;
                        }
                        bf7=1;
                    } 
                });
                $("#bf8").click(function(){
                    if(bf8==0)
                    {
                        if(counter<=va)
                        {
                            $("#bf8").css('background-color','#94c82f'); 
                            counter++;
                        }
                        bf8=1;
                    } 
                });
                $("#bf9").click(function(){
                    if(bf9==0)
                    {
                        if(counter<=va)
                        {
                            $("#bf9").css('background-color','#94c82f'); 
                            counter++;
                        }
                        bf9=1;
                    } 
                });
                $("#bf10").click(function(){
                    if(bf10==0)
                    {
                        if(counter<=va)
                        {
                            $("#bf10").css('background-color','#94c82f'); 
                            counter++;
                        }
                        bf10=1;
                    } 
                });
                $("#bf11").click(function(){
                    if(bf11==0)
                    {
                        if(counter<=va)
                        {
                            $("#bf11").css('background-color','#94c82f'); 
                            counter++;
                        }
                        bf11=1;
                    } 
                });
                $("#bf12").click(function(){
                    if(bf12==0)
                    {
                        if(counter<=va)
                        {
                            $("#bf12").css('background-color','#94c82f'); 
                            counter++;
                        }
                        bf12=1;
                    } 
                });
            
                $("#cf1").click(function(){
                    if(cf1==0)
                    {
                        if(counter<=va)
                        {
                            $("#cf1").css('background-color','#94c82f'); 
                            counter++;
                        }
                        cf1=1;
                    } 
                });
                $("#cf2").click(function(){
                    if(cf2==0)
                    {
                        if(counter<=va)
                        {
                            $("#cf2").css('background-color','#94c82f'); 
                            counter++;
                        }
                        cf2=1;
                    } 
                });
                $("#cf3").click(function(){
                    if(cf3==0)
                    {
                        if(counter<=va)
                        {
                            $("#cf3").css('background-color','#94c82f'); 
                            counter++;
                        }
                        cf3=1;
                    } 
                });
                $("#cf4").click(function(){
                    if(cf4==0)
                    {
                        if(counter<=va)
                        {
                            $("#cf4").css('background-color','#94c82f'); 
                            counter++;
                        }
                        cf4=1;
                    } 
                });
                
                $("#cf5").click(function(){
                    if(cf5==0)
                    {
                        if(counter<=va)
                        {
                            $("#cf5").css('background-color','#94c82f'); 
                            counter++;
                        }
                        cf5=1;
                    } 
                });
                $("#cf6").click(function(){
                    if(cf6==0)
                    {
                        if(counter<=va)
                        {
                            $("#cf6").css('background-color','#94c82f'); 
                            counter++;
                        }
                        cf6=1;
                    } 
                });
                $("#cf7").click(function(){
                    if(cf7==0)
                    {
                        if(counter<=va)
                        {
                            $("#cf7").css('background-color','#94c82f'); 
                            counter++;
                        }
                        cf7=1;
                    } 
                });
                $("#cf8").click(function(){
                    if(cf8==0)
                    {
                        if(counter<=va)
                        {
                            $("#cf8").css('background-color','#94c82f'); 
                            counter++;
                        }
                        cf8=1;
                    } 
                });
                $("#cf9").click(function(){
                    if(cf9==0)
                    {
                        if(counter<=va)
                        {
                            $("#cf9").css('background-color','#94c82f'); 
                            counter++;
                        }
                        cf9=1;
                    } 
                });
                $("#cf10").click(function(){
                    if(cf10==0)
                    {
                        if(counter<=va)
                        {
                            $("#cf10").css('background-color','#94c82f'); 
                            counter++;
                        }
                        cf10=1;
                    } 
                });
                $("#cf11").click(function(){
                    if(cf11==0)
                    {
                        if(counter<=va)
                        {
                            $("#cf11").css('background-color','#94c82f'); 
                            counter++;
                        }
                        cf11=1;
                    } 
                });
                $("#cf12").click(function(){
                    if(cf12==0)
                    {
                        if(counter<=va)
                        {
                            $("#cf12").css('background-color','#94c82f'); 
                            counter++;
                        }
                        cf12=1;
                    } 
                });
            
                $("#df1").click(function(){
                    if(df1==0)
                    {
                        if(counter<=va)
                        {
                            $("#df1").css('background-color','#94c82f'); 
                            counter++;
                        }
                        df1=1;
                    } 
                });
                $("#df2").click(function(){
                    if(df2==0)
                    {
                        if(counter<=va)
                        {
                            $("#df2").css('background-color','#94c82f'); 
                            counter++;
                        }
                        df2=1;
                    } 
                });
                $("#df3").click(function(){
                    if(df3==0)
                    {
                        if(counter<=va)
                        {
                            $("#df3").css('background-color','#94c82f'); 
                            counter++;
                        }
                        df3=1;
                    } 
                });
                $("#df4").click(function(){
                    if(df4==0)
                    {
                        if(counter<=va)
                        {
                            $("#df4").css('background-color','#94c82f'); 
                            counter++;
                        }
                        df4=1;
                    } 
                });
                
                $("#df5").click(function(){
                    if(df5==0)
                    {
                        if(counter<=va)
                        {
                            $("#df5").css('background-color','#94c82f'); 
                            counter++;
                        }
                        df5=1;
                    } 
                });
                $("#df6").click(function(){
                    if(df6==0)
                    {
                        if(counter<=va)
                        {
                            $("#df6").css('background-color','#94c82f'); 
                            counter++;
                        }
                        df6=1;
                    } 
                });
                $("#df7").click(function(){
                    if(df7==0)
                    {
                        if(counter<=va)
                        {
                            $("#df7").css('background-color','#94c82f'); 
                            counter++;
                        }
                        df7=1;
                    } 
                });
                $("#df8").click(function(){
                    if(df8==0)
                    {
                        if(counter<=va)
                        {
                            $("#df8").css('background-color','#94c82f'); 
                            counter++;
                        }
                        df8=1;
                    } 
                });
                $("#df9").click(function(){
                    if(df9==0)
                    {
                        if(counter<=va)
                        {
                            $("#df9").css('background-color','#94c82f'); 
                            counter++;
                        }
                        df9=1;
                    } 
                });
                $("#df10").click(function(){
                    if(df10==0)
                    {
                        if(counter<=va)
                        {
                            $("#df10").css('background-color','#94c82f'); 
                            counter++;
                        }
                        df10=1;
                    } 
                });
                $("#df11").click(function(){
                    if(df11==0)
                    {
                        if(counter<=va)
                        {
                            $("#df11").css('background-color','#94c82f'); 
                            counter++;
                        }
                        df11=1;
                    } 
                });
                $("#df12").click(function(){
                    if(df12==0)
                    {
                        if(counter<=va)
                        {
                            $("#df12").css('background-color','#94c82f'); 
                            counter++;
                        }
                        df12=1;
                    } 
                });
            
                $("#ef1").click(function(){
                    if(ef1==0)
                    {
                        if(counter<=va)
                        {
                            $("#ef1").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ef1=1;
                    } 
                });
                $("#ef2").click(function(){
                    if(ef2==0)
                    {
                        if(counter<=va)
                        {
                            $("#ef2").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ef2=1;
                    } 
                });
                $("#ef3").click(function(){
                    if(ef3==0)
                    {
                        if(counter<=va)
                        {
                            $("#ef3").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ef3=1;
                    } 
                });
                $("#ef4").click(function(){
                    if(ef4==0)
                    {
                        if(counter<=va)
                        {
                            $("#ef4").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ef4=1;
                    } 
                });
                
                $("#ef5").click(function(){
                    if(ef5==0)
                    {
                        if(counter<=va)
                        {
                            $("#ef5").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ef5=1;
                    } 
                });
                $("#ef6").click(function(){
                    if(ef6==0)
                    {
                        if(counter<=va)
                        {
                            $("#ef6").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ef6=1;
                    } 
                });
                $("#ef7").click(function(){
                    if(ef7==0)
                    {
                        if(counter<=va)
                        {
                            $("#ef7").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ef7=1;
                    } 
                });
                $("#ef8").click(function(){
                    if(ef8==0)
                    {
                        if(counter<=va)
                        {
                            $("#ef8").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ef8=1;
                    } 
                });
                $("#ef9").click(function(){
                    if(ef9==0)
                    {
                        if(counter<=va)
                        {
                            $("#ef9").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ef9=1;
                    } 
                });
                $("#ef10").click(function(){
                    if(ef10==0)
                    {
                        if(counter<=va)
                        {
                            $("#ef10").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ef10=1;
                    } 
                });
                $("#ef11").click(function(){
                    if(ef11==0)
                    {
                        if(counter<=va)
                        {
                            $("#ef11").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ef11=1;
                    } 
                });
                $("#ef12").click(function(){
                    if(ef12==0)
                    {
                        if(counter<=va)
                        {
                            $("#ef12").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ef12=1;
                    } 
                });
            
                $("#ff1").click(function(){
                    if(ff1==0)
                    {
                        if(counter<=va)
                        {
                            $("#ff1").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ff1=1;
                    } 
                });
                $("#ff2").click(function(){
                    if(ff2==0)
                    {
                        if(counter<=va)
                        {
                            $("#ff2").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ff2=1;
                    } 
                });
                $("#ff3").click(function(){
                    if(ff3==0)
                    {
                        if(counter<=va)
                        {
                            $("#ff3").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ff3=1;
                    } 
                });
                $("#ff4").click(function(){
                    if(ff4==0)
                    {
                        if(counter<=va)
                        {
                            $("#ff4").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ff4=1;
                    } 
                });
                
                $("#ff5").click(function(){
                    if(ff5==0)
                    {
                        if(counter<=va)
                        {
                            $("#ff5").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ff5=1;
                    } 
                });
                $("#ff6").click(function(){
                    if(ff6==0)
                    {
                        if(counter<=va)
                        {
                            $("#ff6").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ff6=1;
                    } 
                });
                $("#ff7").click(function(){
                    if(ff7==0)
                    {
                        if(counter<=va)
                        {
                            $("#ff7").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ff7=1;
                    } 
                });
                $("#ff8").click(function(){
                    if(ff8==0)
                    {
                        if(counter<=va)
                        {
                            $("#ff8").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ff8=1;
                    } 
                });
                $("#ff9").click(function(){
                    if(ff9==0)
                    {
                        if(counter<=va)
                        {
                            $("#ff9").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ff9=1;
                    } 
                });
                $("#ff10").click(function(){
                    if(ff10==0)
                    {
                        if(counter<=va)
                        {
                            $("#ff10").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ff10=1;
                    } 
                });
                $("#ff11").click(function(){
                    if(ff11==0)
                    {
                        if(counter<=va)
                        {
                            $("#ff11").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ff11=1;
                    } 
                });
                $("#ff12").click(function(){
                    if(ff12==0)
                    {
                        if(counter<=va)
                        {
                            $("#ff12").css('background-color','#94c82f'); 
                            counter++;
                        }
                        ff12=1;
                    } 
                });
                
        });
    </script>
	</head>
	<body>
        <form>
            <input type="hidden" value="<?php echo $noseat;?>" id="ns"/>
        </form>
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

	<div id="seats">
		<table border="0" cellspacing="20">
			<tr align="center">
				<td><div class="ser"/>S</td>
				<td colspan="2"><div class="sofa" id="sf1"/>1</td>
				<td colspan="2"><div class="sofa" id="sf2"/>2</td>
				<td></td>
				<td colspan="2"><div class="sofa" id="sf3"/>3</td>
				<td colspan="2"><div class="sofa" id="sf4"/>4</td>
				<td></td>
				<td colspan="2"><div class="sofa" id="sf5"/>5</td>
				<td colspan="2"><div class="sofa" id="sf6"/>6</td>
	
			</tr>
			<tr>
				<td><div class="ser"/>A</td>
				<td><div class="seat" id="af1"/>1</td>
				<td><div class="seat" id="af2"/>2</td>
				<td><div class="seat" id="af3"/>3</td>
				<td><div class="seat" id="af4"/>4</td>
				<td></td>
				<td><div class="seat" id="af5"/>5</td>
				<td><div class="seat" id="af6"/>6</td>
				<td><div class="seat" id="af7"/>7</td>
				<td><div class="seat" id="af8"/>8</td>
				<td></td>
				<td><div class="seat" id="af9"/>9</td>
				<td><div class="seat" id="af10"/>10</td>
				<td><div class="seat" id="af11"/>11</td>
				<td><div class="seat" id="af12"/>12</td>
			</tr>
			<tr>
				<td><div class="ser"/>B</td>
				<td><div class="seat" id="bf1"/>1</td>
				<td><div class="seat" id="bf2"/>2</td>
				<td><div class="seat" id="bf3"/>3</td>
				<td><div class="seat" id="bf4"/>4</td>
				<td></td>
				<td><div class="seat" id="bf5"/>5</td>
				<td><div class="seat" id="bf6"/>6</td>
				<td><div class="seat" id="bf7"/>7</td>
				<td><div class="seat" id="bf8"/>8</td>
				<td></td>
				<td><div class="seat" id="bf9"/>9</td>
				<td><div class="seat" id="bf10"/>10</td>
				<td><div class="seat" id="bf11"/>11</td>
				<td><div class="seat" id="bf12"/>12</td>
			</tr>
			<tr>
				<td><div class="ser"/>C</td>
				<td><div class="seat" id="cf1"/>1</td>
				<td><div class="seat" id="cf2"/>2</td>
				<td><div class="seat" id="cf3"/>3</td>
				<td><div class="seat" id="cf4"/>4</td>
				<td></td>
				<td><div class="seat" id="cf5"/>5</td>
				<td><div class="seat" id="cf6"/>6</td>
				<td><div class="seat" id="cf7"/>7</td>
				<td><div class="seat" id="cf8"/>8</td>
				<td></td>
				<td><div class="seat" id="cf9"/>9</td>
				<td><div class="seat" id="cf10"/>10</td>
				<td><div class="seat" id="cf11"/>11</td>
				<td><div class="seat" id="cf12"/>12</td>
			</tr>
			<tr>
				<td><div class="ser"/>D</td>
				<td><div class="seat" id="df1"/>1</td>
				<td><div class="seat" id="df2"/>2</td>
				<td><div class="seat" id="df3"/>3</td>
				<td><div class="seat" id="df4"/>4</td>
				<td></td>
				<td><div class="seat" id="df5"/>5</td>
				<td><div class="seat" id="df6"/>6</td>
				<td><div class="seat" id="df7"/>7</td>
				<td><div class="seat" id="df8"/>8</td>
				<td></td>
				<td><div class="seat" id="df9"/>9</td>
				<td><div class="seat" id="df10"/>10</td>
				<td><div class="seat" id="df11"/>11</td>
				<td><div class="seat" id="df12"/>12</td>
			</tr>
			<tr>
				<td><div class="ser"/>E</td>
				<td><div class="seat"  id="ef1"/>1</td>
				<td><div class="seat" id="ef2"/>2</td>
				<td><div class="seat" id="ef3"/>3</td>
				<td><div class="seat" id="ef4"/>4</td>
				<td></td>
				<td><div class="seat" id="ef5"/>5</td>
				<td><div class="seat" id="ef6"/>6</td>
				<td><div class="seat" id="ef7"/>7</td>
				<td><div class="seat" id="ef8"/>8</td>
				<td></td>
				<td><div class="seat" id="ef9"/>9</td>
				<td><div class="seat" id="ef10"/>10</td>
				<td><div class="seat" id="ef11"/>11</td>
				<td><div class="seat" id="ef12"/>12</td>
			</tr>
			<tr>
				<td><div class="ser"/>F</td>
				<td><div class="seat"  id="ff1"/>1</td>
				<td><div class="seat" id="ff2"/>2</td>
				<td><div class="seat" id="ff3"/>3</td>
				<td><div class="seat" id="ff4"/>4</td>
				<td></td>
				<td><div class="seat" id="ff5"/>5</td>
				<td><div class="seat" id="ff6"/>6</td>
				<td><div class="seat" id="ff7"/>7</td>
				<td><div class="seat" id="ff8"/>8</td>
				<td></td>
				<td><div class="seat" id="ff9"/>9</td>
				<td><div class="seat" id="ff10"/>10</td>
				<td><div class="seat" id="ff11"/>11</td>
				<td><div class="seat" id="ff12"/>12</td>
			</tr>
			
            <tr>
                <td colspan="15" align="center">
                    <div id="continue"><a href="payment.php" style="color:black; text-shadow:none;">continue</a></div>
                </td>
            </tr>
				

		</table>
	</div>
	<?php
        $con = mysqli_connect('localhost','root','','movie magic');
                     
        $query = "update temp_payment set seat=$noseat";
            
        $res = mysqli_query($con,$query);
        
    ?>
	</body>
</html>