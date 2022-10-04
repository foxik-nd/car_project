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
  <a class="navbar-brand" href="index.php">
    <img src="logoI.png" width="30" height="30" class="d-inline-block align-top" alt="">Concession IPSSI
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="Index.php" >Les vehicules <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="AddCar.php">Ajouter un véhicule</a>
    </div>
  </div>
  </nav>
</header>

<h2>Découvrir les Véhicules de la concession IPSSI</h2>
    <div class="container">
    <div class="ContainerPost">
    <h3>Quels véhicules souhaitez vous voir ?</h3>
    <form method="post" id="FormAll">
    <input type="submit" name="buttonAll" value="Tous les véhicules"/>
    </form>
    <h4>Types de véhicule</h4>
        <form method="post" id="FormType">
            <input type="submit" name="buttonVoitures" value="Voitures"/>
            <input type="submit" name="buttonMotos" value="Motos"/>
        </form>
        <h4>Types de moteurs</h4>
        <form method="post" id="FormMoteur">
            <input type="submit" name="buttonThermiques" value="Véhicules thermiques"/>
            <input type="submit" name="buttonHybrides" value="Véhicules hybrides"/>
            <input type="submit" name="buttonElectriques" value="Véhicules électriques"/>
        </form>
        <h4>Prix</h4>
        <form method="post" id="FormTarif">
            <input type="submit" name="button10k" value="Inférieur à 10000€"/>
            <input type="submit" name="button1030k" value="Entre 10000€ et 30000€"/>
            <input type="submit" name="button30k" value="Supérieur à 30000€"/>
        </form>
        <h4>Date de sortie des voitures</h4>
        <form method="post" id="FormAV">
            <input type="submit" name="button49a" value="Véhicules 2004-2009"/>
            <input type="submit" name="button1019a" value="Véhicules 2010-2019"/>
            <input type="submit" name="button2022a" value="Véhicules 2020-2022"/>
        </form>
        <h4>Date de sortie des motos</h4>
        <form method="post" id="FormAM">
            <input type="submit" name="button49m" value="moto 2004-2009"/>
            <input type="submit" name="button1019m" value="moto 2010-2019"/>
            <input type="submit" name="button2022m" value="moto 2020-2022"/>
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
if(isset($_POST['button49a'])) {
    getVoitures49();
}
if(isset($_POST['button1019a'])) {
    getVoitures1019();
}
if(isset($_POST['button2022a'])) {
    getVoitures2022();
}
if(isset($_POST['button49m'])) {
    getmoto49();
}
if(isset($_POST['button1019m'])) {
    getmoto1019();
}
if(isset($_POST['button2022m'])) {
    getmoto2022();
}
?>
<footer>
    <div class="containerF">
        <div class="row">
            <div class="col-sm">
                <div id="ipssi">
                    <a><img src="logoI.png" width="30" height="30" class="d-inline-block align-top"/></a>
                    <p>Ce projet à été réaliser par des éleves d'<a id="LinkIPSSI" href="https://ecole-ipssi.com/"><strong>IPSSI</strong></a></p>
                    <p>le 3 et 4 octobre</p>
                </div>
            </div>
            <div class="col-sm">
                <div id="nous">
                    <ul>
                        <li>Robin LANDAIS</li>
                        <li>Mohammed OUAHHABI</li>
                        <li>Nicolas DESFORGES</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
 </footer>

</body>
</html>