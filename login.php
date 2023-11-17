<!DOCTYPE html>
<html>
<?php
     $db = mysqli_connect("localhost","root", "", "pizza");

// if ($db->connect_error) {
//     die("Connection failed: " . $db->connect_error);
// }
     
     // Login logic
     if (isset($_POST['submit'])) {
         $username = $_POST['username'];
         $password = $_POST['password'];
         
        
         $password = hash('sha256', $password); // Hash password

         echo "<script>console.log('" . $password . "');</script>";
     
         $query = "SELECT * FROM user_details WHERE username='$username' AND password='$password'";
         $result = $db->query($query);

        //  echo var_dump($result);
     
         if ($result->num_rows == 1) {
            echo "<script>console.log('INSIDE IF');</script>";
             $_SESSION['username'] = $username;
             header("Location:pizza.html");
             exit();
         } else {
            echo "<p class=loginmsg>User not found</p>";
         }
     }

     ?>
<head>
    <title>Login</title>
    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

 *{
	margin: 0;
	padding: 0;
	font-family: 'Poppins', sans-serif;
}
    .header{
	background: #212121;
	width: 100%;
	height: 40px;
	position: fixed;
	border-radius: 5px;
    padding: 10px;
    top: 0;
    z-index: 1000;
}
ul{
	float: right;
	list-style-type: none;
	margin-top: 10px;
    margin-right: 20px;
}
ul li{
	display: inline-block;
}
ul li a{
	text-decoration: none;
	color: white;
	font-weight: 600 ;
	padding: 5px 20px;
	border: 1px solid transparent;
	transition: 0.6s ease;
	border-radius: 20px;
}
ul li a:hover{
	background-color:white;
	color: black;
}
ul li.active a{
	background-color: white;
	color: black;
}
.logo img{
	position: fixed;
	top: 0;
	left: 0;
	float:left;
	width: 90px;
	height: 70px;
}
.main{
	max-width: 1200px;
    margin:0px;
	
}
.wrapper{
    position: relative;
    width: 350px;
    height: 380px;
    background:transparent;
    border:2px solid white ;
    border-radius :20px;
    backdrop-filter:blur(20px);
    box-shadow:0 0 30px black ;
    display:flex;
    justify-content:center;
    align-items:center;
    

}
 .wrapper .login-form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align:center;
            margin-top:10px;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            background-color: transparent;
            
 }
 .login-form h2{
    color: black;
	font-size: 40px;
	text-shadow: 2px 2px 2px #000;
	display: flex;
	justify-content: center;
	text-align: center;
 }
        .input-box{
          width:100% ;
          position: relative;
          height:50px;
          border-bottom:2px solid black;
          margin-bottom:10px;
          margin:30px 0;
        }
        
        .input-box input{
           width:100%;
           height:150%;
           background:transparent;
           border:none;
           outline:none;
           font-weight: 400;
           margin-left: 5px;
           
        }
        .input-box label{
            position:absolute;
            top:30%;
            left:5px;
            transform: translateY(-50%);
            font-size:1em;
            color:black;
            font-weight:500;
            pointer-events:none;
            transition:.5s;
        }
        .input-box input:focus~label,
        .input-box input:valid~label{
            top:-5px;
        }
        .btn{
            width:100%;
            height: 45px;
            background:black;
            border:none;
            outline:none;
            border-radius:6px;
            cursor:pointer;
            font-size:1em;
            color:white;
            font-weight:500;
        }
       
        main{
            display:flex;
            min-height:100vh;
            align-items:center;
            justify-content:center;
	        width: 100%;
	        height: 100%;
            background-image: url(background.jpg);
            background-size: cover;
            background-position: center;
	        background-repeat: no-repeat;
}
.loginmsg{
    position:absolute;
    top:445px;
    left:530px;
    padding:10px;
}

.register-login-link{
    color: white;
    text-decoration: none;
}

.register-login-link:hover{
    text-decoration: underline;
}

    </style>
</head>
<body>
<div class="header">
  <div class="main">
    <div class="logo">
      <img src="logo.png">
    </div>
    <ul>
      <li class="active"><a href="login.php">Login</a></li>
      <li><a href="register.php">Register</a></li>
    </ul>
  </div>
</div>
<main>
    <div class="wrapper">
<div class="login-form">
    <h2>Login</h2>
    <form action="" method="POST">
        <div class="input-box">
        <label for="username">Username</label>
        <input type="text" name="username" required><br>
        </div>
        <div class="input-box">
        <label for="password">Password</label>
        <input type="password" name="password" required><br>
        </div>
        <button name="submit" class="btn">Login</button>
        <!-- <input type="submit" name="submit" value="Login"> -->
        Don't have an account?
        <a class="register-login-link" href="register.php">Register</a>
        
    </form>
</div>
</div>


    </main>
</body>
</html>
