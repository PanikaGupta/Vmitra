<?php
session_start();

 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="stylel.css?v=<?php echo time(); ?>" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
    <style>
        /* body{ 
          font: 14px sans-serif;
          text-align: center; 
        } */
        #welcome{
          text-align:center;
          font:14px;
          background-color:grey;
          border:2px solid black;
          width:750px;
          padding:4px;
          margin-left:280px;
        }
        button{
            background-color: #333;
            padding: 15px;
            text-align: center;
            width: 225px;
            border:none;
            margin-top: 15px;
            color:white;
            display: block;
            margin-left: auto;
            margin-right: auto;
            /* width: 40%; */
        
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
    background-color:#333;
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
#product1{
    text-align:center;
}
#product1 .pro-container{
     display: flex; 
    justify-content: space-between;
    padding-top: 20px;
    flex-wrap:wrap;
    
}
#product1 .pro{
    width:23%;
    min-width:150px;
    padding:10px 12px;
    border: 1px solid #cbe6cf;
    border-radius:23px;
    cursor: pointer;
    box-shadow: 20px 20px 30px rgba(0,0,0,0.02) ;
    margin:15px 0;
    transition: 0.2s ease ;
    position: relative;

}
#product1 .pro:hover{
    box-shadow: 20px 20px 30px rgba(0,0,0,0.08);
}
#product1 .pro img{
    height: 65%;
    width:80%;
    border-radius:18px;
}
#product1 .pro .des{
    text-align: center;
    padding: 10px 0;
}
#product1 .pro .des .span{
    color:#606063;
    font-size: 12px;
}
#product1 .pro .des h5{
    padding-top: 7px;
    color:#1a1a1a;
    font-size: 14px;
}
#product1 .pro i{
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 50px;
    background-color: #cfcfd4;
    color: rgb(21, 46, 37);
    border:1px solid rgb(16, 12, 12);
    bottom: 20px;
    right:10px;
    position: absolute;


}
.lab-img{
    margin-top: 100px;
    height: 60vh;
    width: 95vw;
    text-align: center;
    align-items: center;
    margin-left: 30px;

    
}
body{
            overflow-x: hidden;
            
        }
        input,select:focus{
            background-color: rgb(221, 246, 255);
        }
        input,select:blur{
            background-color: red;
        }
        div.main{
            padding: 8px;
            width:auto;
            margin:5vw 1vw 1vw 1vw;
            border: 2px solid rgb(36, 23, 42);
            background-color:#ADD8E6;
            
        }
        input,select{
             
             padding: 15px;
             border: none;
             background: #f1f1f1;
             margin-bottom: 20px;
             /* display: inline-block; */
             margin-left: 3px;
             margin-right:70px;
             width: 14vw;
             
        
             

             
            
             
        }
        

        button{
            background-color: #333;
            padding: 15px;
            text-align: center;
            width: 8vw;
            border:none;
            margin-top: 15px;
            color:white;
        
        }
        label{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: bold;
            margin-left:2px;
            margin-right:5px
            
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
<header >
        <div class="navbar">
            <div class="nav-logo border">
                <div class="logo"></div>
            </div>
            <div class="nav-home border">
                <p class="icons"><a href="first.html" class="link">HOME</a></p>
            </div>
            <div class="nav-items border">
                <p class="icons"><a href="" class="link">BOOK</a></p>
            </div>
            <div class="nav-contact border">
                <p class="icons"><a class="link1" href="track.html">TRACK</p>
            </div>
            <div class="nav-user border" >
                <!-- <i class="fa-regular fa-user" style="margin-left:13px"></i><pre> </pre> -->
                <p class="sign"><a class="link" href="logout.php">LOGOUT</a></p>
            </div>
            <!-- <div class="nav-user border">

    </div> -->
            <div class="nav-login border" >
                <p class="icons"><a href="signin.php" class="link">REGISTER</a></p>
            </div>
        </div>
    </header>
    <h2 id="welcome" style="margin-top:65px">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h2>
    <!-- <div class="box" style="margin-left:400px"> -->
    <!-- <p style="text-align:center;padding:25px"><b>CLICK HERE</b></p> -->
    <!-- <button type="submit" onclick="document.location='bookindex.php'">BOOK NOW</button>  <button type="submit" onclick="document.location='booking_info.php'">YOUR BOOKINGS</button> -->
    <section id="product1" class="header">
        <div class="pro-container">
            <div class="pro">
                <img src="imageshop.jpg" alt="image">
                <p>50Rs.</p>
                <div class="des">
                    <span>Utensils</span>
                    <h5>Hawkers</h5>

                </div>
                <a href="#" ><i class="fa-regular fa-bookmark"></i></a>
            </div>
            <div class="pro">
                <img src="imageshop.jpg" alt="image">
                <div class="des">
                    <span>chips</span>
                    <h5>general store</h5>
                </div>
                <a href="#" ><i class="fa-regular fa-bookmark"></i></a>
            </div>
            <div class="pro">
                <img src="imageshop.jpg" alt="image">
                <div class="des">
                    <span>Clothes</span>
                    <h5>live long NGO</h5>
                </div>
                <a href="#" ><i class="fa-regular fa-bookmark"></i></a>
            </div>
            <div class="pro">
                <img src="imageshop.jpg" alt="image">
                <div class="des">
                    <span>chips</span>
                    <h5>General Store</h5>
                </div>
                <a href="#" ><i class="fa-regular fa-bookmark"></i></a>
            </div>
            <div class="pro">
                <img src="imageshop.jpg" alt="image">
                <div class="des">
                    <span>Rice</span>
                    <h5>General Store</h5>
                </div>
                <a href="#" ><i class="fa-regular fa-bookmark"></i></a>
            </div>
            <div class="pro">
                <img src="imageshop.jpg" alt="image">
                <div class="des">
                    <span>potatoes</span>
                    <h5>hawkers</h5>
                </div>
                <a href="#" ><i class="fa-regular fa-bookmark"></i></a>
            </div>
            <div class="pro">
                <img src="imageshop.jpg" alt="image">
                <div class="des">
                    <span>handmade pots</span>
                    <h5>uddeshya NGO</h5>
                </div>
                <a href="#" ><i class="fa-regular fa-bookmark"></i></a>
            </div>
            <div class="pro">
                <img src="imageshop.jpg" alt="image">
                <div class="des">
                    <span>tomatoes</span>
                    <h5>hawkers</h5>
                </div>
                <a href="#" ><i class="fa-regular fa-bookmark"></i></a>
            </div>
            
        </div>

    </section>
    
    

        
    </div>
    <footer class="last">
        <p>All rights are reserved | Design by- Team impecables</p>
    </footer>
</body>
</html>