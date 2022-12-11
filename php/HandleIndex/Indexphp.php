<?php 
    session_start();
    if (isset($_SESSION["username"])){echo $_SESSION["username"];
    }
    
    if ($_GET) {      
        if (isset($_GET['bouton_log_out'])) {
            select();
        }
    }

    function select()
    {
       echo "The select function is called.";
    }

?>

