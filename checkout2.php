<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
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
body{
    background-image: url(bg.jpg);
}
main{
	width: 100%;
	height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
    margin-top: 150px;
    

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
       
        table {
            margin-top: 20px;
            color: white;
            border-collapse: collapse;
            width: 50%;
        }

        table, th, td {
            border: 1px solid white;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #212121;
        }

        h2 {
            margin-bottom: 20px;
        }
        .checkout-head{
            position: relative;
            margin-bottom: 10px;
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
<div class="checkout-head"><h1>CHECKOUT</h1></div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizza";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

$usr_name = $_SESSION["username"];
$cart_items = $_POST["items"];

$items_in_cart_string = implode(", ", $cart_items);

if (isset($_POST['items'])) {
    $sql = "UPDATE user_details SET cart='$items_in_cart_string' WHERE username='$usr_name'";
    $result = mysqli_query($conn, $sql);

    if ($conn->query($sql) === TRUE) {
        echo "cart saved";
        $sql1 = "select cart from user_details where username = '$usr_name';";
        $result = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_assoc($result);
        echo " for $usr_name &nbsp;";
        echo $row["cart"];
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
    }
    

        // Fetch cart items and prices
        $sql1 = "SELECT cart FROM user_details WHERE username = '$usr_name'";
        $result1 = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_assoc($result1);
        $cart_items = explode(", ", $row["cart"]);

        echo "<table>
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                </tr>";

        $totalPrice = 0;

        foreach ($cart_items as $item) {
            // Fetch the price from your $cards array or database
            $price = 100; // Replace this with the actual price retrieval logic

            echo "<tr>
                    <td>$item</td>
                    <td>Rs" . number_format($price, 2) . "</td>
                </tr>";

            $totalPrice += $price;
        }

        echo "</table>";
        echo "<h2>Total Price: Rs" . number_format($totalPrice, 2) . "</h2>";
   
$conn->close();
?>
</main>
</body>
</html>
