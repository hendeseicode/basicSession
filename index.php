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

if(isset($_SESSION["username"])){
  require "admin.php";
}else{
  require "login.php";
}

?>
