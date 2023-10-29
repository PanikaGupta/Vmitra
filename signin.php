
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="stylel.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body{
            overflow-x: hidden;
            
        }
        input:focus{
            background-color: rgb(221, 246, 255);
        }
        input:blur{
            background-color: red;
        }
        div.main{
            padding: 8px;
            width:43vw;
            margin:1vw auto 2vw 26.5vw;
            border: 2px solid rgb(36, 23, 42);
        }
        input{
             
             padding: 15px;
             border: none;
             background: #f1f1f1;
             margin-bottom: 20px;
             /* display: inline-block; */
             margin-left: 3px;
             width: 41vw;
        
             

             
            
             
        }
        

        button{
            background-color: #333;
            padding: 15px;
            text-align: center;
            width: 41.9vw;
            border:none;
            margin-top: 15px;
            color:white;
        
        }
        label{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: bold;
            margin-left:2px;

            
        }
        #regiter{
            text-align: center;
            background-color: aliceblue;
            height: 30px;
            margin-top:20px ;
        }
        *{
    box-sizing:border-box ;
    margin:0;
    font-family: Arial, Helvetica, sans-serif;
    /* margin-top: 30px; */
    
}
.link{
    text-decoration: none;
    color: white;
    padding: 15px;

}
.link1{
    text-decoration: none;
    color: white;
    padding: 2px;

}
.navbar{
    height: 60px;
    width: 100%;
    background-color: #333;
    color: white;
    padding: 5px;
    display: flex;
    overflow: hidden;
    top:0;
    position: fixed;
    z-index:9999;
}
.last {
    height: 60px;
    width: 100%;
    background-color: #333;
    color: white;
    padding: 5px;
    text-align: center;
    padding-top: 25px;
    bottom:0;
    left: 0;
    right: 0;
    }
.nav-logo{
    height: 50px;
    width: 100px;
    margin-right: 200px;
    
}
.logo{
    background-image: url("#");
    background-size: cover;
    height:50px;
    width: 100%;
    

    
}
.box{
    height: 250px;
    width: 500px;
    border:4px solid #17113f;
    background-color:#cbe6cf;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 80px;
    margin-bottom: 130px;
}
.border{
    border:2px solid transparent;
}
.border:hover{
    border:3px solid white;
}
.icons{
    text-align: center;
    margin: 6px;
    height: 50px;
    min-width: 100px;
    max-width: auto;
    padding-top: 12px;
    padding-right: 3px;
    padding-left: 3px;
}
.nav-user{
    display: flex;
    text-align: center;
    margin-left:180px ;
    
    width: 110px;
    padding-right: 8px;
    padding-left: 3px;
    padding-top: 15px;
    
}
.sign{
    height: 50px;
    min-width: auto;
    
    
}
.header{
    padding: 40px 20px;
}
        #regiter{
            text-align: center;
            background-color: aliceblue;
            height: 30px;
            margin-top: 5px;
        }
        
        
    </style>
</head>
<body>
<script>
        function validate(){
            var Regname= /^[A-Za-z]+$/;
            
            var firstname=document.getElementById("fn").value;
            var lastname=document.getElementById("ln").value;
            // var email=document.getElementById("email").value;
            var num=document.getElementById("phone").value;
            var dotpos=email.lastIndexOf(".");
            var pass=document.getElementById("pass").value;
            var cpass=document.getElementById("cpass").value;
            var atpos=email.indexOf("@");
            if(!Regname.test(firstname)){
                alert("Enter alphabets only");
                return false;
            }
            else if(!Regname.test(lastname)){
                alert("Enter a non digit last name");
                return false;
            }
            
            // else if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length){
            //     alert("Enter a valid emailid");
            //     return false;
            // }
            
            else if(num.length!=10){
                alert("Enter a 10 digit number");
                return false;
            }
            else if(pass!=cpass){
                alert("Confirm password is not same as password");
                return false;
            }
            

            else
            {
                return true;
                
            }
            

        }
    </script>
    <header >
        <div class="navbar">
            <div class="nav-logo border">
                <div class="logo"></div>
            </div>
            <div class="nav-home border">
                <p class="icons"><a href="first.html" class="link">HOME</a></p>
            </div>
            <!-- <div class="nav-items border">
                <p class="icons"><a href="index.php" class="link">EQUIPMENTS</a></p>
            </div> -->
            <div class="nav-contact border">
                <p class="icons"><a href="login.php" class="link">BOOK</a></p>
            </div>
            <div class="nav-users border">
                <p class="icons">USERS</p>
            </div>
            <div class="nav-user border" >
                <i class="fa-regular fa-user" style="margin-left:13px"></i><pre> </pre>
                <p class="sign"><a href="login.php" class="link1">LOGIN</a></p>
            </div>
            <div class="nav-login border" >
                <p class="icons"><a href="signin.php" class="link">REGISTER</a></p>
            </div>
        </div>
    </header>
    <?php
       if($_SERVER['REQUEST_METHOD'] =='POST'){
        $fname=$_POST['fname'];
        // $mname=$_POST['mname'];
        $lname=$_POST['lname'];
        $phone=$_POST['phone'];
        $c_id=$_POST['c_id'];
        $pass=$_POST['pass'];
        $cpass=$_POST['cpass'];
        // Set your connection variables
          // Set your connection variables
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "htm";

// Create connection
$conn =mysqli_connect($servername,$username, $password, $db_name);

// Check connection
if (!$conn) {
    die("sorry Connection failed: ".mysqli_connect_error());
}
else{
    echo 'conneted';

// Insert into appropriate table

$hash = password_hash($pass,PASSWORD_DEFAULT);
$sql1="SELECT c_id FROM vendors WHERE c_id='$c_id'";
$result1=mysqli_query($conn,$sql1);
$num = mysqli_num_rows($result1);
if($num==1){
    echo "<script>alert('This mail already exist')</script>";

}
else{

$sql="INSERT INTO `vendors` (`c_id`, `c_fname`, `c_lname`, `c_phone`, `password`, `cpass`) VALUES ('$c_id', '$fname', '$lname', '$phone', '$hash', '$hash')";
$result=mysqli_query($conn,$sql);
// If the connection is successful, run the query
if ($result) {
    echo "<script>alert('Record inserted successfully!')</script>";
    ;

// If the query is not successful, display the error message
}
else {
    echo "Error:";
    mysql_error($conn);
}
}
       }

}


?>
     
        
    <h1 style="text-align: center;margin-top:100px;">REGISTER</h1>
    <div class="main">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" onsubmit="return validate()">
    <label for="c_id">Customer Id*(this will be your user id):</label><br>
    <input type="number" name="c_id" id="c_id" placeholder="Enter your customer id" required><br>
    <label for="fname">First name:</label><br>
    <input type="text" name="fname" id="fn" placeholder="Enter your first name" required><br>
    <label for="lname">Last name:</label><br>
    <input type="text" name="lname" id="ln" placeholder="Enter your last name" required><br>
    <label for="phone">Phone number:</label><br>
    <input type="number" name="phone" id="phone" placeholder="Enter your phone number" required><br>
    <label for="pass">Password:</label><br>
    <input type="password" name="pass" id="pass" placeholder="Password" required><br>
    <label for="cpass">Confirm password:</label><br>
    <input type="password" name="cpass" id="cpass" placeholder="Confirm Password" required><br>
    <button type="submit"><b>SUBMIT</b></button>
    <p id="regiter">Already have an account? <a href="login.php" class="nav-login">Login</a></p>
    </form>
</div>
<footer class="last">
        <p>All rights are reserved | Design & Developed by- Team impecables</p>
    </footer>
</body>
</html>