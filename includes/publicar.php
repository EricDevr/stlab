<?php
require_once("app.php");
require_once("db_connection.php");

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

        
        $car = array("&lt;","&gt;","&quot;");
        $rem = array("<",">","\"");

        $content = str_replace($car, $rem, $content);
        $result = upload_post($user,$img,$title,$content);
        if($result == "success") {
            echo "success";
        }else {
            echo "error al subir el post";
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

function upload_post($user,$image,$title,$content) {
    global $mysqli;
    $stmt = $mysqli->prepare("INSERT INTO posts(image,user,title,content)VALUES(?,?,?,?)");
    $stmt->bind_param("ssss", $image, $user, $title, $content);
    $stmt->execute();
    $stmt->get_result();
    if($stmt->error) {
        return "err";
    } else {
        return "success";
    }
}
?>