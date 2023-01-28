<?php
require_once("includes/posts.php");
$portada = ob_portada();
$smarty->assign("PORTADA", $portada);

$new_posts = ob_new_posts();
$smarty->assign("NEW_POSTS", $new_posts);

$smarty->display("home/index.html");

// mensaje
?>