<?php

require 'C:\xampp\htdocs\SIte1mois\php\handleMiseEnVente\TrouverListsFichierPourUpload.php';

$juste_fichier =array();
for ($w = 0; $w <= 10; $w++){
  if (empty($fichier_pour_upload[$w])){
        //print_r($fichier_bof);
        break;
        
    }
    
    else{
        array_push($juste_fichier, $fichier_pour_upload[$w]);
        //break;
        
    }
}


$target_dir = "images/";
$target_dir_first_images = "first_images/";

$target_dir_page = "C:\\xampp\\htdocs\\SIte1mois\\HTML\\selling_pages";

$size_bon = count($juste_fichier)-1;
$nom_pour_page = $_POST['nom'] .= ".php";
$target_file_page = $target_dir_page . basename($nom_pour_page);
$target_file_array1 = $target_dir_first_images . basename($fichier_pour_voir_nom[0]);
$pour_cree_pages = 0;

for ($y = 1; $y <= $size_bon; $y++){

  $target_file_array = $target_dir . basename($fichier_pour_voir_nom[$y]);
  // Check if image file is a actual image or fake image
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file_array,PATHINFO_EXTENSION));

  
  if(isset($_POST["submit"])) {
    $check = getimagesize($fichier_pour_upload[$y]);
    if($check !== false) {
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    }
      // if everything is ok, try to upload file
     else {
      move_uploaded_file($fichier_pour_upload[0], $target_file_array1 );
      if (move_uploaded_file($fichier_pour_upload[$y], $target_file_array) ) {      
        echo "The file ". htmlspecialchars( basename( $fichier_pour_voir_nom[$y])). " has been uploaded.";
        $pour_cree_pages = $pour_cree_pages+1;
   
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }   
}
    echo "<br>", $pour_cree_pages;
    if ($pour_cree_pages > 0) {
      //cree page

      $whole_php_data_from_page_vente = file_get_contents('C:\\xampp\\htdocs\\SIte1mois\\php\\handleMiseEnVente\\page_vente.php');
      $la_page = fopen("C:\\xampp\\htdocs\\SIte1mois\\HTML\\selling_pages\\$nom_pour_page", 'x');
      fwrite($la_page, $whole_php_data_from_page_vente);
      

      echo "<br> Once";
      //header("Location: Index.php");
        
    }
