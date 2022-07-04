
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
          background-color: skyblue;
          
        }
        .logo{
            display: flex;
            justify-content: flex-end;
            
        }
        .center{
            text-align: center;
        }
        .form{
            border: 2px solid black;
        }
     
        .detail{
            width: 75%;
            margin: auto;
        }
        
    </style>
</head>

<body>


    <div class="container">


        <h1 style="text-align:center;">We are suggested to fill up this form</h1>
        <?php
        include 'connectdatabase.php';
        //Giving the query to data base to select all that is present in kyc form
        $query="SELECT * FROM registerkyc"; 
        $result=mysqli_query($conn, $query);
        if ($result->num_rows > 0){
            //Converting into associative array to fetch the data

           while($row=mysqli_fetch_assoc($result)){
            //Storing data into the variable 
            $firstname=$row['firstname'];
            $middlename=$row['middlename'];
            $lastname=$row['lastname'];
            $nationality=$row['nationality'];
            $dataofbirth=$row['dateofbirth'];
            $gender=$row['gender'];
            $martialstatus=$row['martialstatus'];
            $totalfamily=$row['totalfamilymember'];
            $currentprovience=$row['currentprovience'];
            $currentdistrict=$row['currentdistrict'];
            $currentmunicipality=$row['currentmunicipality'];
            $currentwardno=$row['currentwardno'];
            $permanentprovience=$row['pemanentprovience'];
            $permanentdistrict=$row['permanentdistrict'];
            $permanentmunicipality=$row['permanentmunicipality'];
            $permanentwardno=$row['permanentwardno'];
            $phonenumber=$row['phonenumber'];
            $emailaddress=$row['email'];
            
        }  
    }       
        ?>


        <div class="form">
            <h1 class="center">User KYC</h1>
            <!--Post is used to store all the data in the database -->
            <form action="detail.php" method="POST">
                <div class="detail">
                    <div>
                   <h2> A. Personal Details</h2>
                    <input type="text" placeholder="First name" name="firstname" value="<?php echo $firstname?>">
                    <input type="text" placeholder="Middle Name" name="middlename" value="<?php echo $middlename?>">
                    <input type="text" placeholder="Last Name" name="lastname" value="<?php echo $lastname?>"><br>
                </div> 

                  <p> Nationality <input type="text" name="nationality" id="" value="<?php echo $nationality?>"></p>
                   <p> Date of Birth <input type="text" name="dataofbirth" value="<?php echo $dataofbirth?>"></p>
                    <div class="space">
                    
                           <p> Gender <input type="text" name="gender" value="<?php echo $gender?>"></p>
                           <p> Martial Status <input type="text" name="martialstatus" value="<?php echo $martialstatus?>"></p>

                        Total family Member <input type="text" name="totalfamily" value="<?php echo $totalfamily ?>">
                    </div> 
                   <h2> B.Address</h2>
                <h4>Current Address</h4>
                    Provience <input type="text" name="currentprovience" value="<?php echo $currentprovience?>">
                    District <input type="text" name="currentdistrict" value="<?php echo $currentdistrict?>"> 
                   <p> Municipality / Rural Municipality <input type="text" name="currentmunicipality" value="<?php echo $currentmunicipality?>">
                    Ward NO. <input type="text" name="currentwardno" value="<?php echo $currentwardno?>"></p>
                  

                    <h4>Permanent Address </h4>
                    <p>Provience <input type="text" name="permanentprovience" value="<?php echo $permanentprovience?>">
                    District <input type="text" name="permanentdistrict" value="<?php echo $permanentdistrict?>"><p>
                    Municipality / Rural Municipality <input type="text" name="permanentmunicipality" value="<?php echo $permanentmunicipality?>">
                    Ward NO. <input type="text" name="permanentwardno" value="<?php echo $permanentwardno?>">
                   <h2> C.Contact Deatils</h2>
                   <p> Phone Number <input type="text" name="phonenumber" value="<?php echo $phonenumber?>"></p>
                    E-mail address <input type="text" name="emailaddress" value="<?php echo $emailaddress?>"> <br>
                </div>
             
                <a name="submit" id="" class="btn btn-primary" href="dashboard.php" role="button">print</a>
               
               
               


                
        </div>
        </form>
        
    </div>
</body>

</html>