<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Concession IPSSI</title>
    <meta charset="UTF-8">
    <!-- insertion du css et bootstrap -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<header>
<!-- navbar -->
<nav class="navbar fixed-top navbar-expand-lg" style="background-color: #150cd2">
  <a class="navbar-brand" href="Index.php">
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
<!-- Container mot de passe et bouton valider -->


<div class="containerAdd" style="margin:10%;">
  <table>
    <tr>
      <th>Moteur</th>
      <th>Marque</th>
      <th>Modèle</th>
      <th>Prix</th>
      <th>Annee</th>
      <th>Etat</th>
      <th>Type</th>
      <th></th>
    </tr>
    <tr>
      <td>
        <select name="moteurs" id="FieldMoteur" style="border-radius:8px; border: 2px solid #150cd2; padding:4.5%;" >
          <option value="recntyRPWMQBGzzaT">Thermique</option>
          <option value="recoa32F847uAeB2N">Hybride</option>
          <option value="recohOXVDrltOpg3y">Electrique</option>
        </select>
      </td>
      <td>
        <select name="marque" id="FieldMarque" style="border-radius:8px; border: 2px solid #150cd2; padding:4.5%;">
          <option value="recOrrHKLZcLqHNKo">Aprilia</option>
          <option value="recE2nDDtHuGKCLTw">BMW</option>
          <option value="recuppuyZFiPdNZjV">Energica</option>
          <option value="recY6j5DOliJfOxSX">Harley Davidson</option>
          <option value="recAbiBQ0Po1yO5KO">Honda</option>
          <option value="recjWiK7vav7x5PEh">Mercedes</option>
          <option value="recI6leubd5GOEUQo">Peugeot</option>
          <option value="recH3jAaZbWuzYumv">Renault</option>
          <option value="rec7OGXKXDPDAO9uX">Suzuki</option>
          <option value="recYYwgCmsPYrOONs">Tesla</option>
          <option value="rececBeyGzmdZ613o">Toyota</option>
          <option value="recKj6MJTgMOfmjRk">Yamaha</option>
        </select>
      </td>
      <form name='NewCar' id="NewCar" method="post" required>
      <td><input type="text" class="form-control" name="FieldModele" id="FieldModele" placeholder="Texte" required></td>
      <td><input type="text" class="form-control" name="FieldPrix" id="FieldPrix" placeholder="Prix" required></td>
      <td><input type="text" class="form-control" name="FieldAnnee" id="FieldAnnee" placeholder="Entier"required></td>
      <td>
        <select name="etat" id="FieldEtat"style="border-radius:8px; border: 2px solid #150cd2; padding:3.5%;">
          <option value="Neuf">Neuf</option>
          <option value="Occasion bon état">Occasion bon état</option>
          <option value="Occasion mauvais état">Occasion mauvais état</option>
        </select>
      </td>
      <td>
        <select name="Type" id="FieldType" style="border-radius:8px; border: 2px solid #150cd2; padding:7%;">
          <option value="Moto">Voiture</option>
          <option value="Voiture">Moto</option>
        </select>
      </td>
      <td><input type="submit" class="form-control" id="Creer" value="Créer"></td>
      </form>

    </tr>
  </table>
</div>


<script> 

  const API_KEY='keyDNpzJwq1L9nspB';
  const URL= `https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?api_key=${API_KEY}`;

  const formulaire = document.getElementById('NewCar');
  
  formulaire.addEventListener('submit', (e)=>{
    e.preventDefault();
    let newCar = {
      'records' : [{
        'fields' : {
          'Modele' : document.getElementById('FieldModele').value,
          'Marques' :[
            document.getElementById('FieldMarque').value,
          ],
          'Type' : [
            document.getElementById('FieldMoteur').value,
          ],
          'Prix' : parseFloat(document.getElementById('FieldPrix').value),
          'Etat' : document.getElementById('FieldEtat').value,
          'Type_de_vehicules' : document.getElementById('FieldType').value,
          'Annee' : parseInt(document.getElementById('FieldAnnee').value),
        }
      }]
    }
    fetch(URL,{
    method: 'POST',
    headers: {'Content-Type': 'application/json'},
    body:JSON.stringify(newCar),
    })
    .then((response)=>{
      if(response.ok){
        response.json().then((NewCar) => {
          console.log(NewCar);
          document.location.reload();
        })
      }else{
        console.log('Erreur statut !=200');
      }
    }).catch((error) =>{
      console.log(`Erreur: ${error.message}`);
    })
  })



</script>
<footer style="position:fixed; bottom:0; width: 100%;">
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