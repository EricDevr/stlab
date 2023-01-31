<?php
require_once("includes/posts.php");
$id = $_GET["id"];
$post = ob_post($id);
$smarty->assign("POST", $post);

$m_views = ob_m_views();
$smarty->assign("MV_POSTS", $m_views);

$aside = ob_posts_aside();
$smarty->assign("POSTSASIDE", $aside);

$postsinternet = ob_posts_views_cate("Internet");
$smarty->assign("POSTSVIEWSINTERNET", $postsinternet);

$postsmisce = ob_posts_views_cate("Miscelaneos");
$smarty->assign("POSTSVIEWSMISCE", $postsmisce);

$smarty->display("post/index.html");
?>