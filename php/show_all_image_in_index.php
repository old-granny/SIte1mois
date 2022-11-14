<?php
require 'C:\xampp\htdocs\SIte1mois\php\dbconn.php';
     $files = glob("first_images/*.*");
     for ($i=0; $i<count($files); $i++)
      {
        $image = $files[$i];
        $supported_file = array(
                'gif',
                'jpg',
                'jpeg',
                'png'
         );

         $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
         if (in_array($ext, $supported_file)) {

            //trouver nom de page avec nom de l'image
            $nom_de_page = substr($image,13);
            
            $sql_pour_trouver_nom_de_page = "SELECT nom FROM sellinginfos WHERE Nom_Premiere_image='$nom_de_page'";
            $resulta = mysqli_query($conn, $sql_pour_trouver_nom_de_page);               
            $nom_pour_cree_page =substr(json_encode(mysqli_fetch_assoc($resulta)),8,-2) ; 

            echo $nom_pour_cree_page, "<br>" ;

              //cree liens pour pages de vente
              echo '<a href="selling_pages/'.$nom_pour_cree_page.'"> <img src="'.$image .'" alt="Random image" style="width: 200px; height:200px;" /></a>'."<br /><br />";
             //echo $image;
             
            } else {
                continue;
            }
          }
        
       ?>

       
	   