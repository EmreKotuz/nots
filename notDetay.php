<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title></title>
  <meta name="Generator" content="Kısa, net bilgiler">
  <meta name="CocoaVersion" content="2022.6">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="detayStyle.css">

</head>

<body>
  <?php
  require_once '../admin/pages/inc-functions.php';
  ?>
  <?php
  @$id = $_GET["id"];
  $cek = $db->prepare("select * from khaber where id = :id");
  $cek->bindValue(":id", $id, PDO::PARAM_INT);
  $cek->execute();
  $row = $cek->fetch(PDO::FETCH_ASSOC);
  ?>
  <div class="container">
    <a href="https://teknoek.com" style="color: white;" class="navbar-brand col-md-12">tekno<b style="color:#2ECC71;">Ek.com</b></a>
    <div style="background-color: <?= $row['renk'] ?>" class="serviceBox">
      <div class="content">
        <h2><?= $row['baslik'] ?></h2>
        <p><?= $row['aciklama'] ?></p>
        <?php
        if ($row["link"] != "") {
          $yaziLinki = "Link > ";
        } else {
          $yaziLinki = "";
        }
        ?>
        <p><a style="color: black;" href="<?= $row["link"] ?>"><?= $yaziLinki ?></p>
        <a href="https://not.teknoek.com" style="color: <?= $row['renk'] ?>; background-color: #3f3f52; margin-bottom:3%;" class="btn btn-light" >Ana Sayfa</a>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6537190103014639" crossorigin="anonymous"></script>
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6537190103014639" data-ad-slot="6451076985" data-ad-format="auto" data-full-width-responsive="true"></ins>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>
    </div>
  </div>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>