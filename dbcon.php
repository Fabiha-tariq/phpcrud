<?php
// server/ hostname
$conn = new mysqli("localhost","root","","demo");
if ($conn->connect_error) {
    die("Connection Failed". $conn->connect_error);
}

?>