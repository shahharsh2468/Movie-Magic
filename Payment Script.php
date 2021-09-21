<html>
    <head>
    
    </head>
    
    <body>
        <?php
            $con = mysqli_connect('localhost','root','','movie magic');
        
            $query = "select * from temp_payment";
        
            $res = mysqli_query($con,$query);   
        
            while($data=mysqli_fetch_array($res))
            {
                
        ?>
        
        <table border="1">
            <tr>
                <td>
                    Movie :
                </td>
                <td>
                    <?php 
                        $mid=$data['mid'];
                        $query2 = "select * from now_available where id=$mid";
                        $res2 = mysqli_query($con,$query2);
                        
                        while($data2=mysqli_fetch_array($res2))
                        {
                            echo $data2['name'];
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <Td>
                    Time :
                </Td>
                <td>
                    <?php 
                        $tid=$data['tid'];
                        $query3 = "select * from time_table where id=$tid";
                        $res3 = mysqli_query($con,$query3);
                        
                        while($data3=mysqli_fetch_array($res3))
                        {
                            echo $data3['duration'];
                        }
                    ?>
                </td>
            </tr>
            
            <tr>
                <Td>
                    Seat :
                </Td>
                <td>
                    <?php 
                        $seat=$data['seat'];
                       
                        echo $seat;
                       
                    ?>
                </td>
            </tr>
            <tr>
                <Td>
                    Total :
                </Td>
                <td>
                    <?php 
                        $seat=$data['seat'];
                        $price = $data['price'];
                        echo $seat*$price;
                       
                    ?>
                </td>
            </tr>

        </table>
        <?php
            }
        ?>
    </body>
</html>