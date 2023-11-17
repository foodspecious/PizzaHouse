<?php
// Assume you have a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizza";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start(); //kebab

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['items']) && !empty($_POST['items'])) {
        $userId = $_SESSION['id']; // Replace with your actual user identification method

        // Escape user inputs for security
        $selectedItems = array_map([$conn, 'real_escape_string'], $_POST['items']);

        // Insert selected items into the database
        foreach ($selectedItems as $selectedItem) {
            $sql = "INSERT INTO user_details (id, selected_item) VALUES ('$userId', '$selectedItem')";
            $conn->query($sql);
        }

        echo "Selected items have been successfully added to the database.";
    } else {
        echo "No items selected for checkout.";
    }
}

$conn->close();
?>
