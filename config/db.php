<?php
$conn = new mysqli("localhost", "root", "1234", "php_crud");

if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
}
?>