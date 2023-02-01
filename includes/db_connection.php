<?php
require_once("config.php");
$host = "localhost";
$user = "stlab";
$pass = "acoer1cstadb";
$db_name = "stlab";
$mysqli = new mysqli($host, $user, $pass, $db_name);
if($mysqli->error) {
    echo $mysqli->error;
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