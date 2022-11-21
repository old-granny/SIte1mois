<?
    echo "Number : $chiffreInput :  ";
    $chiffreInput = TrouverQuelleListsAvecnbInput();
    if($chiffreInput == 1){
        $fichier_pour_upload = [
        $_FILES["fichier1"]["tmp_name"]
        ];

        $fichier_pour_voir_nom = [
            $_FILES["fichier1"]["name"]
        ];
        

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
        echo("Hello");

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
            echo("Hello");
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
        echo("Hello");

    } 

    
    function TrouverQuelleListsAvecnbInput(){
        $numbers = [];
        for($x = 1;$x != 11; $x++){
            $html = file_get_contents('../HTML/nouveau_sell.php');
            $input = "input" + $x;
            if(str_contains($html, $input)){
                array_push($numbers, $x);
            }
        
            
        }
        rsort($numbers);
        return $numbers[0];
        
    }

  
  