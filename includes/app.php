<?php
session_start();
date_default_timezone_set("America/Santiago");
require_once("libs/Smarty.class.php");
//$URLBASE = "http://localhost/stlab";
$URLBASE = "http://localhost:8003";
$smarty = new SMARTY;
$smarty->assign("URLBASE", $URLBASE);
if(isset($_SESSION["USER"])) {
    $smarty->assign("USER", $_SESSION["USER"]);
} else {
    $smarty->assign("USER", "NONE");
}
?>