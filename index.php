<?php
session_start();

$user = [
  "username" => "nasrbilisim",
  "password" => "123456",
  "favorite_color" => "darkblue",
  "bio" =>    "nasrbilisim medium'da bir blog sayfasıdır, yazılımda <br>
              temel noktaları es geçmeden, sırf taklide düşmeden <br>
              şuurlu bir kodlamayı hedefler <br>
              ve anlatmaya çalışır <br>",
];

if(isset($_SESSION["time"]) && time() > $_SESSION["time"]){
  session_destroy();
  header("Location:session_cancelled.php");
}else{
  // bir işlem yaptıysa 2 dk daha uzat
  $_SESSION["time"] = time() + 2;
}

if(isset($_SESSION["username"])){
  require "admin.php";
}else{
  require "login.php";
}

?>
