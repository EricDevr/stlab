<?php
require_once("app.php");
$image = $_FILES["image-u"];
$name = str_replace(" ","-",$_POST["name-u"]);
if(empty($image["name"]) or empty($name)) {
    echo "campos vacios";
} else {
    $tmp_name = $image["tmp_name"];
    $type = str_replace("image/",".", $image["type"]);
    $folder = "../static/images/";
    $name_image = $name.$type;
    if(move_uploaded_file($tmp_name, $folder.$name_image)) {
        echo $URLBASE."/static/images/".$name_image;
    } else {
        echo "errorui";
    }
}

?>