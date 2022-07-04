<?php
    include 'connectdatabase.php';
    session_start();
    include 'secureuser.php';
    $name=$_POST['name'];
    $product=$_POST['price'];
    
    $query="INSERT INTO productdetail(productname, productdiscription) VALUES ('$name','$product')";
   
    $result=mysqli_query($conn,$query);
   
    if($result){
       header("Location: dashboard.php");
    }

?>
