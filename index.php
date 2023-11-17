<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<div class="login-form">
    <h2>Login</h2>
    <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" name="submit" value="Login"> <!-- Added name attribute to the submit button -->
    </form>

    <?php
    // Connect to the database (Replace with your database credentials)
    $db = new mysqli("localhost", "root", "", "pizza");

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    if (isset($_POST['submit'])) { // Check if the form is submitted
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check user credentials
        $sql = "SELECT * FROM user_details WHERE username = '$username'";
        $result = $db->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                // Start a session and store user information
                session_start();
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];

                echo "Login successful";
                // Redirect to another page if needed
                header("Location: pizza.html");
                exit();
            } else {
                echo "Incorrect password";
            }
        } else {
            echo "User not found";
        }
    }

    $db->close();
    ?>
</body>
</html>
