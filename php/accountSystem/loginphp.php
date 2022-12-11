<?php 


require 'C:\xampp\htdocs\SIte1mois\php\dbconn.php';

$usercheck = mysqli_query($conn, "SELECT * FROM usrinfos WHERE usr = '".$_POST['usr']."' AND password ='".$_POST['password']."' LIMIT 1");
if (mysqli_num_rows($usercheck) ==1){
    session_start();
    $usr = $_SESSION["username"] = $_POST['usr'];
    //echo $usr;
    $mysql = "SELECT usr_id FROM usrinfos WHERE usr = '".$_POST['usr']."'";
    $resulta = mysqli_query($conn, $mysql );
    //cree array
    $reponse = mysqli_fetch_array($resulta, MYSQLI_ASSOC);
    //transformer array to string
    $reponse1 = implode($reponse);
    $id_values = intval($reponse1);
    echo $id_values;
    setcookie("usrid", $id_values , time()+86400*30, '/');
    header("Location: ../../HTML/Index.php");


}else{
    echo "wrong combination";
}
?>