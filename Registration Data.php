<?php
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $contact = $_POST['phone'];

    $con = mysqli_connect('localhost','root','','movie magic');

    if($con)
        echo "Connected";
    else
        echo "Not Connected";

    if($pass==$cpass)
    {    
        $query = "insert into registration(name,email,password,contact) values('$name','$email','$pass','$contact')";

        $res = mysqli_query($con,$query);

        if($res)
            header('location:User Login.php');
        else
            header('location:Registration.php?flag=1');
    }
    else
    {
        header('location:Registration.php?flag=0');
    }
?>