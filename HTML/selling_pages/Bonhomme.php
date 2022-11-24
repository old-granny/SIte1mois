

<?php

require 'C:\xampp\htdocs\SIte1mois\php\dbconn.php';

//pour trouver tout avec le nom 
$nom_page = basename($_SERVER['PHP_SELF']);

//sql

//sql pour infos
$sql_pour_chercher_tout = "SELECT price, utilisation, description_objet, selltype FROM sellinginfos WHERE nom='".$nom_page."'";
$resulta_pour_trouver_infos = mysqli_query($conn, $sql_pour_chercher_tout);
//sql pour images
$sql_des_images = "SELECT images FROM sellinginfos WHERE nom='".$nom_page."'";
$resulta_pour_les_images = mysqli_query($conn, $sql_des_images);


//Les infos

 $infos_sell = mysqli_fetch_assoc($resulta_pour_trouver_infos);

echo "Nom: ", substr($nom_page, 0, -4), "<br>"; 

 $prix = $infos_sell["price"];
 echo "le prix  :", $prix , "<br>";
 

 $utilisation = $infos_sell["utilisation"];
 echo "l'utilisaton: ", $utilisation, "<br>";


 $description_objet = $infos_sell["description_objet"];
 echo "La description: ", $description_objet, "<br>";


 $type_de_vente = $infos_sell["selltype"];
 echo "La type de vente est: ", $type_de_vente, "<br>";

 //Les images

 //vas separer chacune des images dans db et vas cree une array a base de string differente
 $delimiter = ',';
 $infos_images = explode($delimiter,str_replace(' ', '',implode(mysqli_fetch_assoc($resulta_pour_les_images))));
 $infos_images_pas_pour_dernier = $infos_images;
 
 
//printer les images dans la page

$array_comme_dummy_first_image = [];
foreach($infos_images as $images_a_printer) {

    //trier entre first_images et images

    $supported_file = array(
        'gif',
        'jpg',
        'jpeg',
        'png'
 );
    //allez chercjer tout les fichier dans first_images
    $files_pour_first = glob("../first_images/*.*");
    foreach ($files_pour_first as $image){
   
        $premiereImage = substr($image,16);

        //printe finale dans la page pour premier
        if ($premiereImage == $images_a_printer && !in_array($images_a_printer, $array_comme_dummy_first_image)){
            echo '<img src="..\\first_images\\'.$images_a_printer.'"  alt="Random image" style="width: 125px; height:125px ;"/>' . "<br /><br />";
            array_push($array_comme_dummy_first_image,$images_a_printer);
        }
    }

}
//Vas print toute les autre images qui ne sont pas de first_image
foreach( $infos_images_pas_pour_dernier as $images_a_printer_pas_pour_first) {
    $image_correct = $images_a_printer_pas_pour_first;
    //vas chercher dans images tout les images
    $files = glob("../images/*.*");

    for ($i = 0; $i < count($files); $i++) {
        $image_de_image = $files[$i];     
        if (substr($image_de_image, 10) == $image_correct)  
            echo '<img src="' . $image_de_image . '" alt="Random image" style="width: 125px; height:125px ;"/>' . "<br /><br />";
    

    }
}


?>

<html>
<a href="..\Index.php">Go back home</a>
<button>rajouter au panier</button>
<button>acheter</button>
</html>