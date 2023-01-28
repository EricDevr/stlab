<?php
if(!isset($_SESSION["USER"])) {
    header("location: $URLBASE");
}
$smarty->display("publicar/index.html");
?>