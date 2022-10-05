<?php

function getTab($url){
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL,$url );
    
    curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
    
    $authorization = "Authorization: Bearer keyDNpzJwq1L9nspB";
    
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json', $authorization));
    
    //Forcer le certificat ssl
    $certificate = "C:\wamp64\cacert.pem";
    curl_setopt($curl, CURLOPT_CAINFO, $certificate);
    curl_setopt($curl, CURLOPT_CAPATH, $certificate);


    $resultat= curl_exec($curl);
    
    curl_close($curl);
    //décodage du json récupérer pour etre exploiter
    $resultat = json_decode($resultat);

    // création tableau 
    echo '<table>';
    echo '<tr>';
    echo '<th>' . 'Marque' . '</th>';
    echo '<th>' . 'Modèle' . '</th>';
    echo '<th>' . 'Moteur' . '</th>';
    echo '<th>' . 'Prix' . '</th>';
    echo '<th>' . 'Etat' . '</th>';
    echo '<th>' . 'Type' . '</th>';
    echo '<th>' . 'Annee' . '</th>';
    echo '<th>' . 'Action Modifier' . '</th>';
    echo '</tr>';

    // remplissage tableau suivant la requête
    // chaque élement de "fields" récupérer est placer dans une case du tableau
    foreach($resultat->records as $res){ 
        echo '<tr>';
        echo '<td value="'. $res->fields->MarquesV[0] .'">' . $res->fields->MarquesV[0] . '</td>';   
        echo '<td value="'. $res->fields->Modele . '">' . $res->fields->Modele . '</td>';
        echo '<td value="'. $res->fields->TypeV[0] . '">' . $res->fields->TypeV[0] . '</td>';
        echo '<td value="'. $res->fields->Prix . '">' . $res->fields->Prix . '</td>';
        echo '<td value="'. $res->fields->Etat . '">' . $res->fields->Etat . '</td>';
        echo '<td value="'. $res->fields->Type_de_vehicules . '">' . $res->fields->Type_de_vehicules . '</td>';
        echo '<td value="'. $res->fields->Annee . '">' . $res->fields->Annee . '</td>';
        ?>
        <td>
            <button onclick="getdata(this, '<?= $res->id ?>')" id="btn_modif"class="btn btn-primary" type="button" data-toggle="modal" data-target="#modifier">Modifier</button>
        </td>
        <td>' .'<button onclick="supprimer()"class="btn btn-primary" id="btn_supp">Supprimer</button>' .'</td>';
        <?php
        echo '</tr>';
    }
    echo '</table>';

}
// Affiche la liste des véhicules electriques. Liste triée par ordre alphabétique des marques
function getElectrique(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Marques&sort%5B0%5D%5Bdirection%5D=asc&view=Vehicules_electriques");
}

// Affiche la liste des véhicules thermiques. Liste triée par ordre alphabétique des marques
function getThermique(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Marques&sort%5B0%5D%5Bdirection%5D=asc&view=Vehicules_thermiques");
}

// Affiche la liste des véhicules hybrides. Liste triée par ordre alphabétique des marques
function getHybride(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Marques&sort%5B0%5D%5Bdirection%5D=asc&view=Vehicules_hybrides" );
}
// Affiche la liste des véhicules coutant moins de 10000€. Liste triée par ordre alphabétique des marques
function get10k(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Marques&sort%5B0%5D%5Bdirection%5D=asc&view=10k" );
}
// Affiche la liste des véhicules coutant entre 10000 et 30000€. Liste triée par ordre alphabétique des marques
function get1030k(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Marques&sort%5B0%5D%5Bdirection%5D=asc&view=1030k" );
}
// Affiche la liste des véhicules coutant plus de 30000€. Liste triée par ordre alphabétique des marques
function get30k(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Marques&sort%5B0%5D%5Bdirection%5D=asc&view=30k" );
}
// Affiche la liste des motos. Liste triée par ordre alphabétique des marques
function getMotos(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Marques&sort%5B0%5D%5Bdirection%5D=asc&view=Motos" );
}
// Affiche la liste des voitures. Liste triée par ordre alphabétique des marques
function getVoitures(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Marques&sort%5B0%5D%5Bdirection%5D=asc&view=Voiture" );
}
// Affiche la liste de tous les véhicules. Liste triée par ordre alphabétique des marques
function getAll(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?view=Grid_view" );
}
// Affiche la liste des voitures créée entre 2004 et 2009. Liste triée par ordre croissant des années
function getVoitures49(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Annee&sort%5B0%5D%5Bdirection%5D=asc&view=DatesortieV49a" );
}
// Affiche la liste des voitures créée entre 2010 et 2019. Liste triée par ordre croissant des années
function getVoitures1019(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Annee&sort%5B0%5D%5Bdirection%5D=asc&view=DatesortieV1019a" );
}
// Affiche la liste des voitures créée après 2020. Liste triée par ordre croissant des années
function getVoitures2022(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Annee&sort%5B0%5D%5Bdirection%5D=asc&view=DatesortieV2022a" );
}
// Affiche la liste des motos créée entre 2004 et 2009. Liste triée par ordre croissant des années
function getmoto49(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Annee&sort%5B0%5D%5Bdirection%5D=asc&view=moto49m" );
}
// Affiche la liste des motos créée entre 2010 et 2019. Liste triée par ordre croissant des années
function getmoto1019(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Annee&sort%5B0%5D%5Bdirection%5D=asc&view=moto1019m" );
}
// Affiche la liste des voitures créée après 2020. Liste triée par ordre croissant des années
function getmoto2022(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Annee&sort%5B0%5D%5Bdirection%5D=asc&view=moto2022m" );
}

?>
<!-- lien bootsrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<!-- lien bootsrap  -->

<!-- modale pour afficher les donées  -->
<div class="modal fade" id="modifier" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form enctype="multipart/form-data" method="POST">
        <div class="form-group">
            <label >Entrer la Marque</label>
            <input type="text" class="form-control" id="Marque"  placeholder="Entrer la Marque">
        </div>

        <div class="form-group">
            <label >Entrer la Modèle</label>
            <input type="text" class="form-control" id="Modele"  placeholder="Entrer la Modèle">
        </div>

        <div class="form-group">
            <label >Entrer la Moteur</label>
            <input type="text" class="form-control" id="Moteur"  placeholder="Entrer la Moteur">
        </div>

        <div class="form-group">
            <label >Entrer la Prix</label>
            <input type="text" class="form-control" id="Prix"  placeholder="Entrer la Prix">
        </div>

        <div class="form-group">
            <label >Entrer la Etat</label>
            <input type="text" class="form-control" id="Etat"  placeholder="Entrer la Etat">
        </div>

        <div class="form-group">
            <label >Entrer la Type</label>
            <input type="text" class="form-control" id="Type"  placeholder="Entrer la Type">
        </div>

        <div class="form-group">
            <label >Entrer la Annee</label>
            <input type="text" class="form-control" id="Annee"  placeholder="Entrer la Annee">
            <input type="hidden" id="id">
        </div>
       
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="postdata()" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- modale pour afficher les donées  -->

<script>
     const API_KEY='keyfjX9CsC0bAcN1H';
     const URl= `https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?api_key=${API_KEY}`;
    function getdata(obj, id){
        document.getElementById("Marque").value = (obj.parentNode).parentNode.children.item(0).getAttribute('value') 
        document.getElementById("Modele").value = (obj.parentNode).parentNode.children.item(1).getAttribute('value')
        document.getElementById("Moteur").value = (obj.parentNode).parentNode.children.item(2).getAttribute('value')   
        document.getElementById("Prix").value = (obj.parentNode).parentNode.children.item(3).getAttribute('value')
        document.getElementById("Etat").value = (obj.parentNode).parentNode.children.item(4).getAttribute('value')
        document.getElementById("Type").value = (obj.parentNode).parentNode.children.item(5).getAttribute('value')
        document.getElementById("Annee").value = (obj.parentNode).parentNode.children.item(6).getAttribute('value')
        document.getElementById('id').value = id
    }

    function postdata(){
        const API_KEY='keyfjX9CsC0bAcN1H';
        const URL= `https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?api_key=${API_KEY}`;
        let data = { 
            'records':[{
                "id": document.getElementById("id").value,
                'fields':{
                    //'marque':document.getElementById("Marque").value,
                    'Modele':document.getElementById('Modele').value,
                    //'Type':document.getElementById('Moteur').value,
                    'Prix'  :parseFloat(document.getElementById('Prix').value),
                    'Etat'  :document.getElementById('Etat').value,
                    'Type_de_vehicules'  :document.getElementById('Type').value,
                    'Annee' :parseInt(document.getElementById('Annee').value),
                }
            }]
        
         }
         console.log(data)
                fetch(URL,{
            method: 'PATCH',
            headers: {'Content-Type': 'application/json'},
            body:JSON.stringify(data),
            })
            .then((response)=>{
            if(response.ok){
                response.json().then((data) => {    
                console.log(data);
                })
            }else{
                console.log('Erreur statut !=200');
            }
            }).catch((error) =>{
            console.log(`Erreur: ${error.message}`);
            })
    }

    //Supprimer des véhicule 
    function supprimer(){
        fetch('https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules/reccLiRxbk8aaJYOW', {
            method: 'DELETE',
             headers: {
                 'Authorization': 'Bearer keyV98BwrIVFyJoWQ'
    }
}); 
    document.location.reload();
}
</script>
