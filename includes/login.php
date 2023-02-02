<?php
require_once("db_connection.php");

$email = $_POST["email"];
$pass = $_POST["pass"];
if(empty($email) or empty($pass)) {
    echo "campos vacios";
} else {
    $result = $mysqli->query("SELECT name FROM users WHERE email='$email' AND pass=PASSWORD('$pass')");
    if($mysqli->affected_rows == 1) {
        $user = $result->fetch_assoc()["name"];
        $_SESSION["USER"] = $user;
        echo "success";
    } else {
        echo "email o contraseña incorrecta";
    }
}
?>