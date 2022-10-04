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
    echo '</tr>';

    // remplissage tableau suivant la requête
    // chaque élement de "fields" récupérer est placer dans une case du tableau
    foreach($resultat->records as $res){ 
        echo '<tr>';
        echo '<td>' . $res->fields->MarquesV[0] . '</td>';   
        echo '<td>' . $res->fields->Modele . '</td>';
        echo '<td>' . $res->fields->TypeV[0] . '</td>';
        echo '<td>' . $res->fields->Prix . '</td>';
        echo '<td>' . $res->fields->Etat . '</td>';
        echo '<td>' . $res->fields->Type_de_vehicules . '</td>';
        echo '<td>' . $res->fields->Annee . '</td>';
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
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Marques&sort%5B0%5D%5Bdirection%5D=asc&view=Grid_view" );
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
