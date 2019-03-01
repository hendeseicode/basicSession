<?php

if(isset($_POST["username"])){
  if($_POST["username"] == $user["username"] && $_POST["password"] == $user["password"]){
    $_SESSION["username"] = $user["username"];
    require "admin.php";
    exit;
  }else{
    echo "kullanıcı adı ve/veya şifre hatalı";
  }
}

?>
<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Giriş Yap! </title>
  </head>
  <body>
    <hr>
    <form class="" action="" method="post">
      <input type="text" name="username" placeholder="Kullanıcı Adı">
      <br>
      <input type="text" name="password" placeholder="******">
      <br>
      <input type="submit" value="Giriş Yap">
    </form>
  </body>
</html>
