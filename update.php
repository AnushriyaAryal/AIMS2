<?php 
//connecting to the database
include 'connectdatabase.php';
session_start();
include 'secureuser.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Implementation</title>
</head>
<body>

    <h1>Product Name</h1>
  
 
       <?php
        if(isset($_GET['id'])){
        $id=$_GET['id'];  
        $select_query="Select * from productdetail where id = $id";  
        $result=mysqli_query($conn, $select_query);
        $row=mysqli_fetch_assoc($result); 
        $name=$row['productname'];
        $product=$row['productdiscription'];
        
                                  

        }
            
        ?>
        
        <?php
        //Giving the bollen value wether the form is submitter or not
        if(isset($_POST['submitted']))
        {  
            //Storing the give value in variable
            $name=$_POST['name'];
            $product=$_POST['price'];
            //Giving the query to the data base
            $update_query="UPDATE productdetail SET productname='$name', productdiscription ='$product' where id=$id";
           //Connecion to the dataase
            $update_result=mysqli_query($conn, $update_query);
          
            if($update_result){
                header("Location:dashboard.php");
            }
            else{
                echo " Not updated";
            }
            
        }
        ?>

<form action="#" method="POST">
        <label for="">Name:
        <input type="text" name="name" value="<?php echo $name?>">
        </label><br>
        <label for="">Discription:<br>
        

<input type="text" style= "width:200px; height:50px; border:1px solid black;" name="price" value="<?php echo $product?>">
</div>
       
        
        </label>
        <br>
        <button type="submit" name='submitted'>Submit</button>
    

    
</body>
</html>