<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Selection</title>
    <style>
        *{
	margin: 0;
	padding: 0;
	font-family: century Gothic;
}
header{
	background: #212121;
	width: 100%;
	height: 80px;
	position:relative ;
	border-radius: 20px;
}
main{
	width: 100%;
	height: 100%;
	background-image: url(bg.jpg);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
    margin-top:15px;
}
ul{
	float: right;
	list-style-type: none;
	margin-top: 30px;
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
	position:relative;
	top: 0;
	margin-left:-85px;
	float:left;
	width: 110px;
	height: 95px;
}
.main{
	max-width: 1200px;
	margin: auto;
}
        /* Add some basic styling for clarity */
        .card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 250px;
            height: 250px;
            margin-left: 45px;
            display: inline-block;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        h2 {
            text-align: center;
            color: black;
	        font-size: 40px;
	        text-shadow: 2px 2px 2px #000;
	        font-family: cursive;
	        display: flex;
	        justify-content: center;
	 }

        .card img {
            max-width: 100%; /* Ensure the image does not exceed the width of the card */
            max-height: 90%; /* Adjust the height as needed */
            border-radius: 8px; /* Add rounded corners for a nicer look */
            display: inline-block; /* Remove any default inline spacing */
            margin: auto;
        }
        .checkout-btn{
            position:absolute;
            top:130px;
            margin-left: 1200px;
            color:black;
            font-size: 15px;
            font-weight:500;
            width:6%;
            height:30px;
            background:white;
        }
        #cart {
            border: 1px solid #333;
            padding: 10px;
            margin-top: 20px;
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
    <li><a href="pizza.php">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li class="active"><a href="menu.php">MENU</a></li> 
            <li ><a href="contact.html">CONTACT</a></li>
            <li><a href="logout.php">LOGOUT</a></li>
    </ul>
  </div>
</header>
<main>
    <h2>VEG PIZZA</h2>

    <form action="checkout.php" method="post">
    <input type="submit" class="checkout-btn" value="Checkout">
        <?php
        // Assume you have an array of cards with associated image paths
        session_start();
        $cards = array(
            "MEXICAN GREEN WAVE" => "mexican green wave.jpg",
            "DELUX VEGGIE" => "delux veggie.jpg",
            "PEPPY PANEER" => "peppy paneer.jpg",
            "DOUBLE CHEESE MARGHERITA" => "d cheese margherita.jpg",
            "VEG EXTRAVANCA" => "veg extravanca.jpg",
            "CHEESE TOMATO" => "cheese tomato.png",
            "TOMATO " => "tomato pizza.png",
            "PRIME CHEESY" => "PrimeCheesy.jpg"
        );

        // Loop through the cards and display them with checkboxes
        foreach ($cards as $card => $imagePath) {
            echo '<div class="card">';
            echo '<label><input type="checkbox" name="items[]" value="' . $card . '">'; // Add checkboxes
            echo '<img src="' . $imagePath . '" alt="' . $card . '">' . $card . '</label></div>';
        }
        ?>
       
    </form>
    <script>
        // JavaScript function to add selected card to the cart
        function addToCart(card) {
            // Create a new div element
            var cartItem = document.createElement("div");

            // Set the content of the div to the selected card
            cartItem.innerHTML = card;

            // Append the new div to the cart
            document.getElementById("cart").appendChild(cartItem);
        }
    </script>
    </main>
</body>
</html>
