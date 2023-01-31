<?php
require_once("db_connection.php");
$url = $_POST["url"];

$array = explode("/", $url);
$id = $array[4];
if(empty($id)) {
    $stmt = $mysqli->prepare("UPDATE site SET views=views+1 WHERE name='stlab'");
    $stmt->execute();
    return "success";
} else {
    $stmt = $mysqli->prepare("UPDATE posts SET views=views+1 WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return "success";
}
?>