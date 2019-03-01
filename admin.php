<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>  <?=$user["username"]?> - Admin Panel </title>
  </head>
  <body>
    <h1 style='color : <?= $user["favorite_color"]?>'>
      Hoşgeldiniz <?= $user["username"]?>
    </h1>
    <a href="logout.php"> Çıkış Yap </a>
    <h3> Kullanıcı Hakkında Kısa Bilgi </h3>
    <p>
      <?=$user["bio"]?>
    </p>
  </body>
</html>
