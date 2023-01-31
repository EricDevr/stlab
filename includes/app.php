<?php
require_once("config.php");
require_once("libs/Smarty.class.php");
$smarty = new SMARTY;
$smarty->assign("URLBASE", $URLBASE);
if(isset($_SESSION["USER"])) {
    $smarty->assign("USER", $_SESSION["USER"]);
} else {
    $smarty->assign("USER", "NONE");
}
?>