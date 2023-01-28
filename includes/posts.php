<?php
require_once("db_connection.php");

function ob_portada() {
    global $mysqli;
    $stmt = $mysqli->prepare("SELECT image,title,date FROM posts ORDER BY date DESC LIMIT 1");
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    $result["date"] = ob_tiempo_transcurrido($result["date"]);
    return $result;
}


function ob_tiempo_transcurrido($post_date) {
  $tiempo_post = new DateTime($post_date);
  $tiempo_ac = new DateTime(date("Y-m-d H:i:s"));
  $diff = $tiempo_post->diff($tiempo_ac);
  switch($diff) {
    case $diff->y >= 1:
      return ($diff->y == 1) ? "hace 1 año":"hace ".$diff->y." años";
      break;
    case $diff->m >= 1:
      return ($diff->m == 1) ? "hace 1 mes":"hace ".$diff->m." meses";
      break;
    case $diff->d >= 1:
      return ($diff->d == 1) ? "hace 1 dia":"hace ".$diff->d." dias";
      break;
    case $diff->h >= 1:
      return ($diff->h == 1) ? "hace 1 hora":"hace ".$diff->h." horas";
      break;
    case $diff->i >= 1:
      return ($diff->i == 1) ? "hace 1 minuto":"hace ".$diff->i." minutos";
      break;
    default:
      return "hace unos instantes";
  }
}
?>