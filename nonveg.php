<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Selection</title>
    <style>
        /* Add some basic styling for clarity */
        .card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 100px;
            height: 150px;
            display: inline-block;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        h2 {
            text-align: center;
        }

        .card img {
            max-width: 100%; /* Ensure the image does not exceed the width of the card */
            max-height: 80%; /* Adjust the height as needed */
            border-radius: 8px; /* Add rounded corners for a nicer look */
        }

        #cart {
            border: 1px solid #333;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Available Cards</h2>

    <form action="checkout.php" method="post">
        <?php
        // Assume you have an array of cards with associated image paths
        $cards = array(
            "Vijith" => "pizza.jpg",
            "Card B" => "vegpizza.jpg",
            "Card C" => "nonveg.jpg",
            "Card D" => "newabout.jpg",
            "Anjitha" => "anjitha.jpg"
        );

        // Loop through the cards and display them with checkboxes
        foreach ($cards as $card => $imagePath) {
            echo '<div class="card">';
            echo '<label><input type="checkbox" name="items[]" value="' . $card . '">'; // Add checkboxes
            echo '<img src="' . $imagePath . '" alt="' . $card . '">' . $card . '</label></div>';
        }
        ?>
        <input type="submit" value="Checkout">
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
</body>
</html>
