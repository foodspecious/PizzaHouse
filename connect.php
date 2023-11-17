<?php


$db = new mysqli("localhost","root", "", "pizza");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>