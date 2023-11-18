<html>
<head>
	<?php
	session_start(); ?>
  <title>pizza</title>
  <style>
    *{
	margin: 0;
	padding: 0;
	font-family: century Gothic;
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

main{
	width: 100%;
	height: 100%;
	background-image: url(pizza.jpg);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}


h1{
	color: white;
	font-size: 60px;
	text-shadow: 2px 2px 2px #000;
	font-family: cursive;
	display: flex;
	justify-content: center;
	text-align: center;
}
ul{
	float: right;
	list-style-type: none;
	margin-top: 10px;
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
	background-color:white;
	color: black;
}
.logo img{
	position: fixed;
	top: 0;
	left: 0;
	float:left;
	width: 90px;
	height: 75px;
}
.main{
	max-width: 1200px;
	margin: auto;
}
.title{
	position:absolute;
	top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
  </style>
</head>
<body>
<header>
  <div class="main">
    <div class="logo">
      <img src="logo.png">
    <ul>
      <li class="active"><a href="pizza.php">HOME</a></li>
      <li><a href="about.html">ABOUT</a></li>
      <li><a href="menu.php">MENU</a></li> 
      <li><a href="contact.html">CONTACT</a></li>
	  <li><a href="logout.php">LOGOUT</a></li>
    </ul>
  </div>
</div>
</header>
<main>
  <div class="title">
    <h1>Pizza House</h1>
   </div>
   </main>
</body>
</html>
