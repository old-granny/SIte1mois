<?php
$cookies = $_COOKIE['shopping_carte'];
$cookie = [];
$attente = "";
$longueur = strlen($cookies) - 1;
for($cpt = 0; $cpt <= $longueur;$cpt++){
    if($cookies[$cpt] == ","){
        array_push($cookie, $attente);
        $attente = "";
    }
    if($cookies[$cpt] != ","){
        $attente .= $cookies[$cpt];
    }
    if($cpt == $longueur){
        array_push($cookie, $attente);
    }
}

