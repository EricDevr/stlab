<?php
require_once("db_connection.php");

$email = $_POST["email"];
$pass = $_POST["pass"];
if(empty($email) or empty($pass)) {
    echo "campos vacios";
} else {
    $stmt = $mysqli->prepare("SELECT name FROM users WHERE email=? AND pass=PASSWORD(?)");
    $stmt->bind_param("ss", $email, $pass);
    $stmt->execute();
    $result = $stmt->get_result();
    if($stmt->affected_rows == 1) {
        $user = $result->fetch_assoc()["name"];
        $_SESSION["USER"] = $user;
        echo "success";
    } else {
        echo "email o contraseña incorrecta";
    }
}
?>