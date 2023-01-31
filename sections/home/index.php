<?php
require_once("includes/posts.php");
$portada = ob_portada();
$smarty->assign("PORTADA", $portada);

$new_posts = ob_new_posts();
$smarty->assign("NEW_POSTS", $new_posts);

$m_views_posts = ob_m_views();
$smarty->assign("MV_POSTS", $m_views_posts);

$aside = ob_posts_aside();
$smarty->assign("POSTSASIDE", $aside);

$postsinternet = ob_posts_views_cate("Internet");
$smarty->assign("POSTSVIEWSINTERNET", $postsinternet);

$postsmisce = ob_posts_views_cate("Miscelaneos");
$smarty->assign("POSTSVIEWSMISCE", $postsmisce);

$smarty->display("home/index.html");

// mensaje
?>