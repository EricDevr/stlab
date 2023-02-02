<?php
require_once("app.php");
require_once("db_connection.php");

$category = $_POST["category"];
$image = $_FILES["image"];
$title = $_POST["title"];
$content = $_POST["content"];
$user = $_SESSION["USER"];
if(empty($image["name"]) or empty($title) or empty($content)) {
    echo "campos vacios";
} else {
    $img = upload_image($title,$image);
    if($img == "err") {
        echo "error al subir la imagen";
    } else {
        $title = str_replace(" ","-",$title);
        $content = htmlspecialchars($content);

        $car = array("[img=","]","[");
        $rem = array("<img src=",">","<");
        $content = str_replace($car, $rem, $content);
        $result = upload_post($category,$user,$img,$title,$content);
        if($result == "success") {
            echo "success";
        }else {
            echo "error al subir el post: ".$result;
        }
    }
}

function upload_image($title,$image) {
    $title = str_replace(" ","-",$title);
    $type = str_replace("image/",".", $image["type"]);
    $tmp_name = $image["tmp_name"];
    $folder = "../static/images/";
    $name = $title.$type;
    if(move_uploaded_file($tmp_name, $folder.$name)) {
        return $name;
    } else {
        return "err";
    }
}

function upload_post($category,$user,$image,$title,$content) {
    global $mysqli;
    $mysqli->query("INSERT INTO posts(category,image,user,title,content)VALUES('$category','$image','$user','$title','$content')");
    if($mysqli->error) {
        return $mysqli->error;
    } else {
        return "success";
    }
}
?>