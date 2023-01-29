<?php
if(!isset($_SESSION["USER"])) {
    header("location: $URLBASE");
}

$smarty->assign("POSTSASIDE", "NULL");

$smarty->display("publicar/index.html");
?>