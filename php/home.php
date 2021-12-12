<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.module.css?v=<?php echo time(); ?>">
    <title>My Portfolio</title>
</head>
<body>
<?php
include 'navbar.php'
?>

<div class="home">
  <div class="home_text">
  <h1>Créez votre propre application web.</h1>
    <p>Déployez votre propre application et partagez 
      vos idées et projets au monde entier et sur toutes les plateformes</p>
    <a href="services.php">Découvrir</a>
  </div>
  <img src="../assets/IOS-App-Development.png" alt="">
</div>
<?php
include 'contact.php'
?>
</body>
</html>