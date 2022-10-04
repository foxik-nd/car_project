<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Concession IPSSI</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<header>
<nav class="navbar sticky-top navbar-expand-lg" style="background-color: #150cd2">
  <a class="navbar-brand" href="#">
    <img src="logoI.png" width="30" height="30" class="d-inline-block align-top" alt="">Concession IPSSI
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Les vehicules <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Ajouter un véhicule</a>
    </div>
  </div>
  </nav>
</header>

    <h2>Découvrir les Véhicules de la concession IPSSI</h2>
    <div class="container">
    <div class="ContainerPost">
    <h3>Quels véhicules souhaitez vous voir ?</h3>
    <form method="post">
    <input type="submit" name="buttonAll" value="Tous les véhicules"/>
    </form>
    <h4>Types de véhicule</h4>
        <form method="post">
            <input type="submit" name="buttonVoitures" value="Voitures"/>
            <input type="submit" name="buttonMotos" value="Motos"/>
        </form>
        <h4>Types de moteurs</h4>
        <form method="post">
            <input type="submit" name="buttonThermiques" value="Véhicules thermiques"/>
            <input type="submit" name="buttonHybrides" value="Véhicules hybrides"/>
            <input type="submit" name="buttonElectriques" value="Véhicules électriques"/>
        </form>
        <h4>Prix</h4>
        <form method="post">
            <input type="submit" name="button10k" value="Inférieur à 10000€"/>
            <input type="submit" name="button1030k" value="Entre 10000€ et 30000€"/>
            <input type="submit" name="button30k" value="Supérieur à 30000€"/>
        </form>
    </div>
    </div>



<?php
$resultat=0;
include 'Functions.php';
if(isset($_POST['buttonAll'])) {
    getAll();
}
if(isset($_POST['buttonVoitures'])) {
    getVoitures();
}
if(isset($_POST['buttonMotos'])) {
    getMotos();
}
if(isset($_POST['buttonThermiques'])) {
    getThermique();
}
if(isset($_POST['buttonHybrides'])) {
    getHybride();
}
if(isset($_POST['buttonElectriques'])) {
    getElectrique();
}
if(isset($_POST['button10k'])) {
    get10k();
}
if(isset($_POST['button1030k'])) {
    get1030k();
}
if(isset($_POST['button30k'])) {
    get30k();
}
?>
<footer>
        <div id="ipssi">
            <a><img src="logoI.png" img src="logoI.png" width="30" height="30" class="d-inline-block align-top"/></a>
            <p>Ce projet à été réaliser par des éleves d'<a href="https://ecole-ipssi.com/"><strong>IPSSI</strong></a></p>
            <p>le 3 et 4 octobre</p>
        </div>
        <div id="nous">
          <h3>Les auteurs du site</h3>
            <div id="liste_auteurs">
             <ul>
               <li>Robin LANDAIS</li>
               <li>Mohammed OUAHHABI</li>
               <li>Nicolas DESFORGES</li>
             </ul>
           </div>
        </div>
 </footer>


</body>


</html>