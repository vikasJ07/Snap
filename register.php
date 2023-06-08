<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="laptop data";

    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error)
    {
      die("connection fail");
    }   

    $name=$_POST['name'];
    $email=$_POST['email'];
    
    $sql="INSERT INTO `aksh data` (`sr`, `name`, `email`) VALUES (NULL, '$name', '$email')";

    if($conn->query($sql)==true)
    {
      echo "new record added";
    }
    else
    {
      echo "Error";
    }
    $conn->close();
    
    ?>