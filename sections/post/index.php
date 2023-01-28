<?php
require_once("includes/posts.php");
$id = $_GET["id"];
$post = ob_post($id);
$smarty->assign("POST", $post);

$smarty->display("post/index.html");
?>