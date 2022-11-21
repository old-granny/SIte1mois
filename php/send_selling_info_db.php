<?
require 'C:\xampp\htdocs\SIte1mois\php\dbconn.php';
require 'C:\xampp\htdocs\SIte1mois\php\TrouverListsFichierPourUpload.php';

$nom = $_POST['nom'];
$usage = $_POST['usage'];
$prix = $_POST['prix'];
$type_de_vente = $_POST['typedevente'];
$description = $_POST['description'];

//faire liste pour envoyer db

$juste_fichier_send_db =array();
for ($w = 0; $w <= 10; $w++){
  if (empty($fichier_pour_voir_nom[$w])){
        //print_r($fichier_bof);
        break;
        
    }
    
    else{
        array_push($juste_fichier_send_db, $fichier_pour_voir_nom[$w]);
        //break;
        
    }
}
//mettre tout les fichier ensemble
$fichier_together = implode(", ",$juste_fichier_send_db );
$premiere_images = $fichier_pour_voir_nom[0];
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
      header("Location: ../HTML/Index.php");
    $conn->close();
}