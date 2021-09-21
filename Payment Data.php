<?php
        $con = mysqli_connect('localhost','root','','movie magic');
        
        $query = "select * from temp_payment";
        
        $res = mysqli_query($con,$query);
        
        if($res)
        {
            while($data=mysqli_fetch_array($res))
            {
                $cid=$data['cid'];
                $mid=$data['mid'];
                $tid=$data['tid'];
                $seat=$data['seat'];
                $price=$data['price'];
            }
            
            $total=$price*$seat;
            
            $query = "insert into payment(cid,mid,ticket,tid,total) values($cid,$mid,$seat,$tid,$total)";
            
            $res = mysqli_query($con,$query);
            
            header("location:Payment Script.php");
        }
?>