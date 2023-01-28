<?php
require_once("includes/app.php");
$section = "home";
if(isset($_GET["section"])) {
    $section = $_GET["section"];
}
require_once("sections/$section/index.php");



/*
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



CREATE TABLE users(
    email VARCHAR(50) UNIQUE,
    name VARCHAR(50) UNIQUE,
    pass VARCHAR(100)
);
*/
?>
