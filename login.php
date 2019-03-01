<?php

if(isset($_POST["username"])){
  if($_POST["username"] == $user["username"] && $_POST["password"] == $user["password"]){

    $_SESSION["username"] = $user["username"];
    // iki dk yani 120 sn işlem yapmazsa oturumu sonlandırmak kontrolü için
    $_SESSION["time"] = time() + 5;

    //  10 sn lik bir cookie oluştu
    setcookie("cookie" , "user" , time() + 10);

    // sonlandırmak istesem
    // cookie amacı kullanıcı taraflı veri tutmak
    // bağlantı kesilse de cookie browserda kalır
    // setcookie("cookie" , "user" , time() - 10);

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
