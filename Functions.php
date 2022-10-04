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
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?view=Vehicules_electriques");
}

function getThermique(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?view=Vehicules_thermiques");
}

function getHybride(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?view=Vehicules_hybrides" );
}

function get10k(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?view=10k" );
}

function get1030k(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?view=1030k" );
}

function get30k(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?view=30k" );
}

function getPeugot(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?view=Peugeot" );
}

function getMotos(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?view=Motos" );
}

function getVoitures(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?view=Voiture" );
}

function getAll(){
    getTab("https://api.airtable.com/v0/appLN11hnK1L9xW5Z/Vehicules?view=Grid_view" );
}
?>
