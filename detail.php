<?php
//Connection to the database
include("connectdatabase.php");
//storing the value of data in variable
$id=$_GET['id'];
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$nationality=$_POST['nationality'];
$dataofbirth=$_POST['dataofbirth'];
$gender=$_POST['gender'];
$martialstatus=$_POST['martialstatus'];
$totalfamily=$_POST['totalfamily'];
$currentprovience=$_POST['currentprovience'];
$currentdistrict=$_POST['currentdistrict'];
$currentmunicipality=$_POST['currentmunicipality'];
$currentwardno=$_POST['currentwardno'];
$permanentprovience=$_POST['permanentprovience'];
$permanentdistrict=$_POST['permanentdistrict'];
$permanentmunicipality=$_POST['permanentmunicipality'];
$permanentwardno=$_POST['permanentwardno'];
$phonenumber=$_POST['phonenumber'];
$emailaddress=$_POST['emailaddress'];

$query="INSERT INTO registerkyc(firstname, middlename, lastname, nationality, dateofbirth, gender, martialstatus, totalfamilymember, currentprovience, currentdistrict, currentmunicipality, currentwardno, pemanentprovience, permanentdistrict, permanentmunicipality, permanentwardno, phonenumber, email) VALUES ('$firstname',' $middlename','$lastname','$nationality','$dataofbirth','$gender','$martialstatus','$totalfamily','$currentprovience','$currentdistrict','$currentmunicipality','$currentwardno','$permanentprovience','$permanentdistrict','$permanentmunicipality','$permanentwardno ','$phonenumber','$emailaddress')";
$result=mysqli_query($conn,$query);
if($result){
    header("location: print.php?id=$id");
}
?>