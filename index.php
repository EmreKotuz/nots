<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title></title>
  <meta name="Generator" content="teknoEk.com/Bilgiler">
  <meta name="CocoaVersion" content="2022.6">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <a href="https:teknoek.com" style="color: white;" class="navbar-brand col-md-12">tekno<b style="color:#2ECC71;">Ek.com</b></a>
    <hr>
    <?php
    require_once '../admin/pages/inc-functions.php';
    $cek = $db->prepare("SELECT * FROM khaber ORDER BY id DESC");
    $cek->execute();
    while ($row = $cek->fetch(PDO::FETCH_ASSOC)) {
    ?>
      <div style="background-color: <?= $row['renk'] ?>;" class="serviceBox">
        <div class="icon" style="--i:<?= $row['renk'] ?> ">
          <ion-icon name="<?= $row['icon'] ?>"></ion-icon>
        </div>
        <a style="text-decoration:none" href="notDetay.php?id=<?= $row['id'] ?>?detay=<?= $row['baslik'] ?>">
          <div class="content">
            <span><b><?= $row['baslik'] ?></b></span>
            <p style="height:100px; word-wrap: break-word;"><?= $row['aciklama'] ?></p>
          </div>
        </a>
      </div>
    <?php }   ?>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>