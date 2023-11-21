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
	position:relative;
}

main{
	width: 100%;
	height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
	background-image: url(bg.jpg);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
    margin-top: -100px;
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
	margin-left:-80px;
	float:left;
	width: 100px;
	height: 80px;
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
            height: 310px;
            margin-left: 45px;
            display: inline-block;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top:90px;
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

        .veg-pizza-head{
            position: absolute;
            margin-top:-770px;
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
    <div class="veg-pizza-head"><h2>VEG PIZZA</h2></div>

    <form action="checkout.php" method="post">
    <input type="submit" class="checkout-btn" value="Checkout">
        <?php
        // Assume you have an array of cards with associated image paths
        session_start();
            $cards = array(
                "MEXICAN GREEN WAVE" => array("image" => "mexican green wave.jpg", "price" => 150),
                "DELUX VEGGIE" => array("image" => "delux veggie.jpg", "price" => 150),
                "PEPPY PANEER" => array("image" => "peppy paneer.jpg", "price" => 150),
                "DOUBLE CHEESE MARGHERITA" => array("image" => "d cheese margherita.jpg", "price" => 150),
                "VEG EXTRAVAGANZA" => array("image" => "veg extravanca.jpg", "price" => 150),
                "CHEESE TOMATO" => array("image" => "cheese tomato.png", "price" => 150),
                "TOMATO" => array("image" => "tomato pizza.png", "price" => 150),
                "PRIME CHEESY" => array("image" => "PrimeCheesy.jpg", "price" => 150)
            );
            

        // Loop through the cards and display them with checkboxes
        foreach ($cards as $card => $data) {
            echo '<div class="card">';
            echo '<label><input type="checkbox" name="items[]" value="' . $card . '">'; // Add checkboxes
            echo '<img src="' . $data["image"] . '" alt="' . $card . '">' . $card . '<br>';
            echo 'Price: Rs' . number_format($data["price"], 2) . '</label>';
            
            // Add hidden input field for the price
            echo '<input type="hidden" name="prices[' . $card . ']" value="' . $data["price"] . '">';
            
            echo '</div>';
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
