<?php
require_once("config.php");
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "stlab";
$mysqli = new mysqli($host, $user, $pass, $db_name);
if($mysqli->connect_errno) {
    echo $mysqli->connect_errno;
}


/*

CREATE TABLE posts(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
image VARCHAR(100),
user VARCHAR(50),
title VARCHAR(300),
content LONGTEXT,
views INT DEFAULT 0,
date DATETIME DEFAULT NOW()
);

*/
?>