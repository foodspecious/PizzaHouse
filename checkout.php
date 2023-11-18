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

session_start();

$usr_name = $_SESSION["username"];

$sql_query = "select id from user_details where username='$usr_name'";

$cart_items = $_POST["items"];



$items_in_card_string = "";

foreach($cart_items as $cart_item){
    $items_in_card_string = $items_in_card_string . ", " . $cart_item;
}

$items_in_card_string = ltrim($items_in_card_string, ",");

echo "<br>" . $items_in_card_string;

if(isset($_POST['items'])){
 $sql = "update user_details set cart='$items_in_card_string' where username='$usr_name'";

$s = mysqli_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
    echo "cart saved";
    $sql1 = "select cart from user_details where username = '$usr_name';";
    $result = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($result);
    echo "$usr_name";
    echo $row["cart"];
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
}


$conn->close();
?>