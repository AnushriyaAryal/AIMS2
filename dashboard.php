<?php 
/* include help to connect the database and session_start help to secure that no user can directly enter
to without using login and password*/
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
    <a name="" id="" class="btn btn-primary" href="register.php" role="button">Fill Kyc form</a>
    <p class="form-text text-muted">
        you are login as <?php echo $_SESSION['Name']?>
    </p>

    <form action="add.php" method="POST">
        <label for="">Name:
        <input type="text" name="name">
        </label><br>
        <label for="">Discription:<br>
        <textarea id="" name="price" rows="4" cols="50"></textarea>
    
        </label>
        <br>
        <input type="Submit" value="submit" name="submit">
    </form>
    
    <br>  
    <table border= "2px solid black;">
        <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Dispcription</th> 
           <th>Status</th>
        </tr>

        <?php
       //Giving the query to the database
        $query="Select * from productdetail";
        $result=mysqli_query($conn, $query);
        if($result){
            //storing the value in i 
            $i=0;
            while($row=mysqli_fetch_assoc($result)){
                //it helps to increase the i by 1
                $i++;
                $id=$row['id'];
                $name=$row['productname'];
                $product=$row['productdiscription'];           
        ?>

        <tr>
        <!-- echo help to display the result -->>
        <td><?php echo $i?></td>
        <td><?php echo $name?></td>
        <td><?php echo $product?></td>
        <td>
            <a href="update.php?id=<?php echo $id?>">Update</a>
            <a href="delete.php?id=<?php echo $id?>">Delete</a>
        </td>
        </tr>
    <?php
    }
}
?>


    </table>

<button><a name="" id="" class="btn btn-primary" href="logout.php" role="button">Logout</a></button>
    
</body>
</html>