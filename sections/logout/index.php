<?php
require_once("./includes/app.php");
session_destroy();
header("location: $URLBASE");
?>