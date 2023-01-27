<?php
require_once("libs/Smarty.class.php");
$URLBASE = "http://localhost/stlab";
$smarty = new SMARTY;
$smarty->assign("URLBASE", $URLBASE);
if(isset($_SESSION["USER"])) {
    $smarty->assign("USER", $_SESSION["USER"]);
} else {
    $smarty->assign("USER", "NONE");
}
?>