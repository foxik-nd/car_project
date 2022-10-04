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
<div class="container">
<h4>Entrer le mot de passe</h4>
        <form method="post">
            <input type="text" name="MDP"/>
            <input type="submit" name="Valider" />
        </form>
</div>
<?php
$resultat=0;
include 'Functions.php';
if(isset($_POST['Valider']) && ($_POST['MDP']=="IPSSI")) {
    header("Location: https://airtable.com/shrXG9QO1vjvW2KPH");
}
