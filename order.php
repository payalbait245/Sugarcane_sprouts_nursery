<?php
    $server="localhost";
    $username="root";
    $pass="";
    $dbname="devi";

    $conn=mysqli_connection($server,$username,$pass,$dbname);

    if(!$conn){
        die("Error".mysqli_connection_error());
    }
    else{
        if($_POST){
            $name=$_POST["name"]
            $mail=$_POST["email"]
            $product=$_POST["product"]
            $quantity=$_POST["quantity"]

            $sql="INSERT INTO order(name, email, product, quantity) VALUES('$name','$email',$product','$quantity')";
            $result=mysqli_query($conn,$sql);
        }
        if(mysqli_query($conn,$sql)){
            echo "New record created successfully";
        }
        else{
            echo "Error:".$sql."<br>";
            mysqli_error($conn);
        }
    }
?>