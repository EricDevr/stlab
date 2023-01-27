<?php
require_once("db_connection.php");

$email = $_POST["email"];
$pass = $_POST["pass"];
if(empty($email) or empty($pass)) {
    echo "campos vacios";
} else {
    
}
?>