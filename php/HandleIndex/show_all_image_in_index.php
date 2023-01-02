<?php
$ranger = 1;
$colonne = 1;
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
            $nom_pour_cree_page = substr(json_encode(mysqli_fetch_assoc($resulta)),8,-2) ; 

            $sql_pour_chercher_tout = "SELECT price FROM sellinginfos WHERE Nom_Premiere_image='$nom_de_page'";
            $resulta_pour_trouver_infos = mysqli_query($conn, $sql_pour_chercher_tout);
            $infos_sell = mysqli_fetch_assoc($resulta_pour_trouver_infos);
            $prix = $infos_sell["price"];

            $sql_pour_trouver_id =  "SELECT id_images FROM sellinginfos WHERE Nom_Premiere_image='$nom_de_page'";
            $resulta_pour_trouver_id = mysqli_query($conn, $sql_pour_trouver_id);
            $id_infos = mysqli_fetch_assoc($resulta_pour_trouver_id); 
            $id = $id_infos["id_images"];
            

            $nomPourPresenter = substr($nom_pour_cree_page,0, -4);

            echo "<div class=colonne$colonne> <div class=ranger$ranger>", "<h4>$nomPourPresenter</h4>", "<br>" , '<a href="selling_pages/'.$nom_pour_cree_page.'"> <img src="'.$image .'" alt="Random image" class="images"/></a> <button onclick="AddToCart('.$id.') , montrerNombreArticle()"> add to shopping cart</button> '."<h5 style=\" position: relative; left : 160px; top: -35px;\">$prix : price </h5> <br/><br/></div></div>";
            $ranger++;
            if($ranger == 5){
              $colonne++;
              $ranger = 1;
            }
            } else {
                continue;
            }
          }
        
       ?>

       
	   