<?php
require 'C:\xampp\htdocs\SIte1mois\php\dbconn.php';
require 'C:\xampp\htdocs\SIte1mois\php\TrouverListsFichierPourUpload.php';

$nom = $_POST['nom'];
$usage = $_POST['usage'];
$prix = $_POST['prix'];
$type_de_vente = $_POST['typedevente'];
$description = $_POST['description'];

//Creer premiere images
$premiere_images = $fichier_pour_voir_nom[0];


//mettre tout les fichier ensemble
unset($fichier_pour_voir_nom[0]);
$fichier_together = implode(", ",$fichier_pour_voir_nom );


$query = "INSERT INTO `sellinginfos` (`Nom_Premiere_image`,`images`, `price`, `utilisation`, `nom`, `description_objet`, `selltype`, `id_images`) VALUES ('$premiere_images','$fichier_together', '$prix', '$usage', '$nom','$description', '$type_de_vente', NULL)";

//check si le nom already exist
$selectnom = mysqli_query($conn, "SELECT * FROM sellinginfos WHERE nom = '".$_POST['nom']."'");
if(mysqli_num_rows($selectnom)) {
    exit('This name is already used');
}else{
mysqli_query($conn,$query);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      if (isset($_COOKIE['NumberOfInput'])) {
        unset($_COOKIE['NumberOfInput']);
        setcookie('NumberOfInput', '', time() - 3600); // empty value and old timestamp
    }
      header("Location: ../HTML/Index.php");
    $conn->close();
}

