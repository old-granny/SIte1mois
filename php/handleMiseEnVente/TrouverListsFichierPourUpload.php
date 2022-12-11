<?php
    
    $chiffreInput = $_COOKIE['NumberOfInput'];
    
    if($chiffreInput == 1){
        $fichier_pour_upload = [ 
        $_FILES["fichier1"]["tmp_name"]
        ];

        $fichier_pour_voir_nom = [
            $_FILES["fichier1"]["name"]
        ];
        global $fichier_pour_upload, $fichier_pour_voir_nom;
        
        
        }
    if($chiffreInput == 2){
        $fichier_pour_upload = [
            $_FILES["fichier1"]["tmp_name"],
            $_FILES["fichier2"]["tmp_name"]
        ];
        $fichier_pour_voir_nom = [
            $_FILES["fichier1"]["name"],
            $_FILES["fichier2"]["name"]
        ];
        global $fichier_pour_upload, $fichier_pour_voir_nom;
    }
    if($chiffreInput == 3){
        $fichier_pour_upload = [
            $_FILES["fichier1"]["tmp_name"],
            $_FILES["fichier2"]["tmp_name"],
            $_FILES["fichier3"]["tmp_name"]
        ];
        $fichier_pour_voir_nom = [
            $_FILES["fichier1"]["name"],
            $_FILES["fichier2"]["name"],
            $_FILES["fichier3"]["name"]
            ];
            global $fichier_pour_upload, $fichier_pour_voir_nom;
            
    } 
    if($chiffreInput == 4){
        $fichier_pour_upload = [
            $_FILES["fichier1"]["tmp_name"],
            $_FILES["fichier2"]["tmp_name"],
            $_FILES["fichier3"]["tmp_name"],
            $_FILES["fichier4"]["tmp_name"]
        ];
        $fichier_pour_voir_nom = [
            $_FILES["fichier1"]["name"],
            $_FILES["fichier2"]["name"],
            $_FILES["fichier3"]["name"],
            $_FILES["fichier4"]["name"]
        ];
        global $fichier_pour_upload, $fichier_pour_voir_nom;
        

    } 
    if($chiffreInput == 5){
      $fichier_pour_upload = [
          $_FILES["fichier1"]["tmp_name"],
          $_FILES["fichier2"]["tmp_name"],
          $_FILES["fichier3"]["tmp_name"],
          $_FILES["fichier4"]["tmp_name"],
          $_FILES["fichier5"]["tmp_name"]
      ];
      $fichier_pour_voir_nom = [
          $_FILES["fichier1"]["name"],
          $_FILES["fichier2"]["name"],
          $_FILES["fichier3"]["name"],
          $_FILES["fichier4"]["name"],
          $_FILES["fichier5"]["name"]

      ];
      global $fichier_pour_upload, $fichier_pour_voir_nom;
      

  } 
  if($chiffreInput == 6){
    $fichier_pour_upload = [
        $_FILES["fichier1"]["tmp_name"],
        $_FILES["fichier2"]["tmp_name"],
        $_FILES["fichier3"]["tmp_name"],
        $_FILES["fichier4"]["tmp_name"],
        $_FILES["fichier5"]["tmp_name"],
        $_FILES["fichier6"]["tmp_name"]
    ];
    $fichier_pour_voir_nom = [
        $_FILES["fichier1"]["name"],
        $_FILES["fichier2"]["name"],
        $_FILES["fichier3"]["name"],
        $_FILES["fichier4"]["name"],
        $_FILES["fichier5"]["name"],
        $_FILES["fichier6"]["name"]

    ];
    global $fichier_pour_upload, $fichier_pour_voir_nom;
    

} 
if($chiffreInput == 7){
    $fichier_pour_upload = [
        $_FILES["fichier1"]["tmp_name"],
        $_FILES["fichier2"]["tmp_name"],
        $_FILES["fichier3"]["tmp_name"],
        $_FILES["fichier4"]["tmp_name"],
        $_FILES["fichier5"]["tmp_name"],
        $_FILES["fichier6"]["tmp_name"],
        $_FILES["fichier7"]["tmp_name"]
    ];
    $fichier_pour_voir_nom = [
        $_FILES["fichier1"]["name"],
        $_FILES["fichier2"]["name"],
        $_FILES["fichier3"]["name"],
        $_FILES["fichier4"]["name"],
        $_FILES["fichier5"]["name"],
        $_FILES["fichier6"]["name"],
        $_FILES["fichier7"]["name"]

    ];
    global $fichier_pour_upload, $fichier_pour_voir_nom;
    

} 
if($chiffreInput == 8){
    $fichier_pour_upload = [
        $_FILES["fichier1"]["tmp_name"],
        $_FILES["fichier2"]["tmp_name"],
        $_FILES["fichier3"]["tmp_name"],
        $_FILES["fichier4"]["tmp_name"],
        $_FILES["fichier5"]["tmp_name"],
        $_FILES["fichier6"]["tmp_name"],
        $_FILES["fichier7"]["tmp_name"],
        $_FILES["fichier8"]["tmp_name"]
    ];
    $fichier_pour_voir_nom = [
        $_FILES["fichier1"]["name"],
        $_FILES["fichier2"]["name"],
        $_FILES["fichier3"]["name"],
        $_FILES["fichier4"]["name"],
        $_FILES["fichier5"]["name"],
        $_FILES["fichier6"]["name"],
        $_FILES["fichier7"]["name"],
        $_FILES["fichier8"]["name"]
    ];
    global $fichier_pour_upload, $fichier_pour_voir_nom;
} 
if($chiffreInput == 9){
    $fichier_pour_upload = [
        $_FILES["fichier1"]["tmp_name"],
        $_FILES["fichier2"]["tmp_name"],
        $_FILES["fichier3"]["tmp_name"],
        $_FILES["fichier4"]["tmp_name"],
        $_FILES["fichier5"]["tmp_name"],
        $_FILES["fichier6"]["tmp_name"],
        $_FILES["fichier7"]["tmp_name"],
        $_FILES["fichier8"]["tmp_name"],
        $_FILES["fichier9"]["tmp_name"]

    ];
    $fichier_pour_voir_nom = [
        $_FILES["fichier1"]["name"],
        $_FILES["fichier2"]["name"],
        $_FILES["fichier3"]["name"],
        $_FILES["fichier4"]["name"],
        $_FILES["fichier5"]["name"],
        $_FILES["fichier6"]["name"],
        $_FILES["fichier7"]["name"],
        $_FILES["fichier8"]["name"],
        $_FILES["fichier9"]["name"]
    ];
    global $fichier_pour_upload, $fichier_pour_voir_nom;
} 
if($chiffreInput == 10){
    $fichier_pour_upload = [
        $_FILES["fichier1"]["tmp_name"],
        $_FILES["fichier2"]["tmp_name"],
        $_FILES["fichier3"]["tmp_name"],
        $_FILES["fichier4"]["tmp_name"],
        $_FILES["fichier5"]["tmp_name"],
        $_FILES["fichier6"]["tmp_name"],
        $_FILES["fichier7"]["tmp_name"],
        $_FILES["fichier8"]["tmp_name"],
        $_FILES["fichier9"]["tmp_name"],
        $_FILES["fichier10"]["tmp_name"]

    ];
    $fichier_pour_voir_nom = [
        $_FILES["fichier1"]["name"],
        $_FILES["fichier2"]["name"],
        $_FILES["fichier3"]["name"],
        $_FILES["fichier4"]["name"],
        $_FILES["fichier5"]["name"],
        $_FILES["fichier6"]["name"],
        $_FILES["fichier7"]["name"],
        $_FILES["fichier8"]["name"],
        $_FILES["fichier9"]["name"],
        $_FILES["fichier10"]["name"]

    ];
    global $fichier_pour_upload, $fichier_pour_voir_nom;
    

} 
 
