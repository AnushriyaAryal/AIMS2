<?

//To moke sucure that no user can directly go to any other page without using email and password
if(isset($_SESSION['Name']))
{

}else{
    echo header('location: index.php');
}
?>