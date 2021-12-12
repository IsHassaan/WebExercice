<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/services.module.css?v=<?php echo time(); ?>">
    <title>Services</title>
</head>
<body>
<?php
include 'navbar.php'
?>

<div class="services">

  <div class="services_home">
    <img src="../assets/devlogo.png" alt="">
    <div class="main_text">
            <h1>Nos services</h1>
            <p> Découvrez nos services et apprenez en plus sur nos méthodes de travail. Restez informé à propos de notre travail et de nos nouveautés.</p>
    </div>
  </div>



<div class="services_tabs">
    <h1>Nos services</h1>
   <div class="all_tabs">
        <div class="tabs">
            <h2>ReactJS</h2>
            <p>Utilisez ReactJS et déployez votre application à partir d'un Framework en constante évolution.</p>
            <a href="Reactjs_Services.php">En savoir plus</a>
        </div>
        <div class="tabs">
            <h2>NodesJS/SQL</h2>
            <p>Mettez en place des interactions avec vos utilisateurs et créez une application web dynamique.</p>
            <a href="NodeJSMYSQL_services">En savoir plus</a>
        </div>
        <div class="tabs">
            <h2>Web Design</h2>
            <p>Affichez votre contenue autour d'un design unique et délivrez une expérience unique aux utilisateurs.</p>
            <a href="design_services.php">En savoir plus</a>
        </div>
   </div>
</div>

</div>
<?php
include 'contact.php'
?>
</body>
</html>