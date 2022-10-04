<?php
$resultat=0;

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
    foreach($resultat->records as $res){ 
        echo '<tr>';
        echo '<th>' . $res->fields->MarquesV[0] . '</th>';   
        echo '<th>' . $res->fields->Modele . '</th>';
        echo '<th>' . $res->fields->TypeV[0] . '</th>';
        echo '<th>' . $res->fields->Prix . '</th>';
        echo '<th>' . $res->fields->Etat . '</th>';
        echo '<th>' . $res->fields->Type_de_vehicules . '</th>';
        echo '<th>' . $res->fields->Annee . '</th>';
        echo '</tr>';
    }
    echo '</table>';

}

function getElectrique(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Marques&sort%5B0%5D%5Bdirection%5D=asc&view=Vehicules_electriques");
}

function getThermique(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Marques&sort%5B0%5D%5Bdirection%5D=asc&view=Vehicules_thermiques");
}

function getHybride(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Marques&sort%5B0%5D%5Bdirection%5D=asc&view=Vehicules_hybrides" );
}

function get10k(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Marques&sort%5B0%5D%5Bdirection%5D=asc&view=10k" );
}

function get1030k(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Marques&sort%5B0%5D%5Bdirection%5D=asc&view=1030k" );
}

function get30k(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Marques&sort%5B0%5D%5Bdirection%5D=asc&view=30k" );
}

function getMotos(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Marques&sort%5B0%5D%5Bdirection%5D=asc&view=Motos" );
}

function getVoitures(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Marques&sort%5B0%5D%5Bdirection%5D=asc&view=Voiture" );
}

function getAll(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Marques&sort%5B0%5D%5Bdirection%5D=asc&view=Grid_view" );
}
function getVoitures49(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Annee&sort%5B0%5D%5Bdirection%5D=asc&view=DatesortieV49a" );
}
function getVoitures1019(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Annee&sort%5B0%5D%5Bdirection%5D=asc&view=DatesortieV1019a" );
}
function getVoitures2022(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Annee&sort%5B0%5D%5Bdirection%5D=asc&view=DatesortieV2022a" );
}
function getmoto49(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Annee&sort%5B0%5D%5Bdirection%5D=asc&view=moto49m" );
}
function getmoto1019(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Annee&sort%5B0%5D%5Bdirection%5D=asc&view=moto1019m" );
}
function getmoto2022(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?sort%5B0%5D%5Bfield%5D=Annee&sort%5B0%5D%5Bdirection%5D=asc&view=moto2022m" );
}
?>
