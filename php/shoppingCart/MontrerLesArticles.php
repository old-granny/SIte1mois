<?php 
require 'gettingCookiesForShoopingCart.php';
require 'C:\xampp\htdocs\SIte1mois\php\dbconn.php';

$position = 0;
foreach($cookie as $id){

    $sql_pour_trouver_nom_page =  "SELECT nom FROM sellinginfos WHERE id_images='$id'";
    $resulta_pour_trouver_nom_page = mysqli_query($conn, $sql_pour_trouver_nom_page);
    $nom_array = mysqli_fetch_array($resulta_pour_trouver_nom_page, MYSQLI_ASSOC);
    $nomPage = implode($nom_array);
    $nom = substr($nomPage, 0 , -4);



    $sql_pour_trouver_first_image =  "SELECT Nom_Premiere_image FROM sellinginfos WHERE id_images='$id'";
    $resulta_pour_trouver_first_image = mysqli_query($conn, $sql_pour_trouver_first_image);
    $first_image_array = mysqli_fetch_array($resulta_pour_trouver_first_image, MYSQLI_ASSOC);
    $first_image = implode($first_image_array);

    echo"<div class=\"ranger$position\"><h2 class=\"nom\">$nom</h2><a href=\"../../SIte1mois/HTML/selling_pages/$nomPage \"> <img class=\"img$position\"src=\"../HTML/first_images/$first_image\"></img> </a></div>";
    $position++;
}

