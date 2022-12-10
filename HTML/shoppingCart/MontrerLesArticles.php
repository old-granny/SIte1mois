<?php 
require "../../SIte1mois/HTML/shoppingCart/gettingCookiesForShoopingCart.php";
require "../../SIte1mois/php/dbconn.php";

foreach($cookie as $id){
    $sql_pour_trouver_nom_page =  "SELECT nom FROM sellinginfos WHERE id_images='$id'";
    $resulta_pour_trouver_nom_page = mysqli_query($conn, $sql_pour_trouver_nom_page);
    $nom_array = mysqli_fetch_array($resulta_pour_trouver_nom_page, MYSQLI_ASSOC);
    $nom = implode($nom_array);
    echo"<a href=\"../../SIte1mois/HTML/shoppingCart/selling_pages/$images_infos\">link</a>";
}

