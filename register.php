
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

   <!-- Giving the structure for the kyc form -->
    <div class="container">


        <h1 style="text-align:center;">We are suggested to fill up this form</h1>


        <div class="form">
            <h1 class="center">User KYC</h1>
            <form action="detail.php" method="POST">
                <div class="detail">
                    <div>
                   <h2> A. Personal Details</h2>
                    <input type="text" placeholder="First name" name="firstname">
                    <input type="text" placeholder="Middle Name" name="middlename">
                    <input type="text" placeholder="Last Name" name="lastname"><br>
                </div> 

                  <p> Nationality <input type="text" name="nationality" id=""></p>
                   <p> Date of Birth <input type="text" name="dataofbirth"></p>
                    <div class="space">
                    
                           <p> Gender <input type="text" name="gender"></p>
                           <p> Martial Status <input type="text" name="martialstatus"></p>

                        Total family Member <input type="text" name="totalfamily">
                    </div> 
                   <h2> B.Address</h2>
                <h4>Current Address</h4>
                    Provience <input type="text" name="currentprovience">
                    District <input type="text" name="currentdistrict"> 
                   <p> Municipality / Rural Municipality <input type="text" name="currentmunicipality">
                    Ward NO. <input type="text" name="currentwardno"></p>
                  

                    <h4>Permanent Address </h4>
                    <p>Provience <input type="text" name="permanentprovience">
                    District <input type="text" name="permanentdistrict"><p>
                    Municipality / Rural Municipality <input type="text" name="permanentmunicipality">
                    Ward NO. <input type="text" name="permanentwardno">
                   <h2> C.Contact Deatils</h2>
                   <p> Phone Number <input type="text" name="phonenumber"></p>
                    E-mail address <input type="text" name="emailaddress"> <br>
                </div>
             
                <input type="Submit" id="button" value="submit" name="submit">


                
        </div>
        </form>

    </div>
</body>

</html>