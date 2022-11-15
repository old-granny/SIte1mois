<?php

$lists = $_COOKIE["lists"];
print_r($lists);


$juste_fichier =array();
for ($w = 0; $w <= 10; $w++){
  if (($lists[$w])== '*'){
       
        break;
        
    }
    else{
        array_push($juste_fichier, $lists[$w]);
    }
}


$target_dir = "images/";
$target_dir_first_images = "first_images/";

$target_dir_page = "C:\\xampp\\htdocs\\SIte1mois\\HTML\\selling_pages";


$size_bon = count($juste_fichier)-1;
$nom_pour_page = $_POST['nom'] .= ".php";

echo $nom_pour_page;
$target_file_page = $target_dir_page . basename($nom_pour_page);
$target_file_array1 = $target_dir_first_images . basename($juste_fichier[0]);

$pour_cree_pages = 0;

for ($y = 0; $y <= $size_bon; $y++){

  $target_file_array = $target_dir . basename($juste_fichier[$y]);
  

  
  echo "<br>";
  
  // Check if image file is a actual image or fake image
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file_array,PATHINFO_EXTENSION));

  
  if(isset($_POST["submit"])) {
    $check = getimagesize($juste_fichier[$y]);
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
    
      move_uploaded_file($juste_fichier[0], $target_file_array1 );
      
     
      


      if (move_uploaded_file($juste_fichier[$y], $target_file_array) ) {
      
        echo "The file ". htmlspecialchars( basename($juste_fichier[$y])). " has been uploaded.";
        $pour_cree_pages = $pour_cree_pages+1;

        
        
       
        
        
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }



    
}

    echo "<br>", $pour_cree_pages;
    if ($pour_cree_pages > 0) {
      //cree page

      $whole_php_data_from_page_vente = file_get_contents('C:\\xampp\\htdocs\\SIte1mois\\php\\page_vente.php');
      $la_page = fopen("C:\\xampp\\htdocs\\SIte1mois\\HTML\\selling_pages\\$nom_pour_page", 'x');
      fwrite($la_page, $whole_php_data_from_page_vente);
      

      echo "<br> Once";
      header("Location: Index.php");
        
    }
    
    





