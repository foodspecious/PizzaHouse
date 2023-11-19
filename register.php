<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        *{
	margin: 0;
	padding: 0;
	font-family: 'Poppins', sans-serif;
}
    header{
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
	color:white;
	font-weight: 600 ;
	padding: 5px 20px;
	border: 1px solid transparent;
	transition: 0.6s ease;
	border-radius: 20px;
}
ul li a:hover{
	background-color:white;
	color:black;
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
    height: 450px;
    background:transparent;
    border:2px solid white ;
    border-radius :20px;
    backdrop-filter:blur(20px);
    box-shadow:0 0 30px black ;
    display:flex;
    justify-content:center;
    align-items:center;
    

}
 .wrapper .register-form{
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
 .register-form h2{
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
           font-weight:400;
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
.registermsg{
    position:absolute;
    top:510px;
    left:580px;
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
<header>
  <div class="main">
    <div class="logo">
      <img src="logo.png">
    </div>
    <ul>
      <li><a href="login.php">Login</a></li>
      <li class="active"><a href="register.php">Register</a></li>
    </ul>
  </div>
</header>
<main>
    <div class="wrapper">
    <div class="register-form">
    <h2>Register</h2>
    <form action="" method="POST">
        <div class="input-box">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        </div>
        <div class="input-box">
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        </div>
        <div class="input-box">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        </div>
        <button name="submit" class="btn">Register</button>
        <!-- <input type="submit" value="Register"> -->
        Already have an account?
        <a class="register-login-linka" href="login.php">Login</a></p>
        </form>
    </div>
  </div>
    <?php
// Connect to the database (Replace with your database credentials)
$db = mysqli_connect("localhost", "root", "", "pizza");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Get user input
if (isset($_POST['submit'])){
$username = $_POST['username'];
$password = hash("sha256", $_POST["password"]);
$email = $_POST['email'];

// Insert user data into the database
$sql = "INSERT INTO user_details(username, password, email) VALUES ('$username', '$password', '$email')";

if ($db->query($sql) === TRUE) {
    echo"<p class=registermsg>Registration successful</p>";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
}
$db->close();
?>

</main>
</body>
</html>
