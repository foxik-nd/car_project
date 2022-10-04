<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Concession IPSSI</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
    <h1 class="titre">Concession IPSSI</h1>
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

</body>

<footer>
        <div id="ipssi">
            <a><img src="" alt="logo ipssi" class="logo_ipssi"/></a>
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


</html>