<?php
include 'connectdatabase.php';
session_start();
include 'secureuser.php';
?>
<?php



if(isset($_GET['id'])){
    $id=$_GET['id'];
    //it delete all the data accoring to the given id
    $query= "DELETE FROM productdetail WHERE id = $id";
    $result=mysqli_query($conn, $query);
    if($result){
        header("Location: dashboard.php");
    }
    
}



?>