<?php
require_once("includes/posts.php");
$id = $_GET["id"];
$post = ob_post($id);
$smarty->assign("POST", $post);

$m_views = ob_m_views();
$smarty->assign("MV_POSTS", $m_views);

$aside = ob_posts_aside();
$smarty->assign("POSTSASIDE", $aside);

$smarty->display("post/index.html");
?>