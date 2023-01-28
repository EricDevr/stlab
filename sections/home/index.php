<?php
require_once("includes/posts.php");
$portada = ob_portada();
$smarty->assign("PORTADA", $portada);

$smarty->display("home/index.html");
?>