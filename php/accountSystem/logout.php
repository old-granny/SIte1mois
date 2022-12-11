<?php
    $cookie_name = "usrid";
    if(isset($_COOKIE[$cookie_name])) {
        setcookie($cookie_name, "", time()-3600, '/');
        header("Location: Index.php");
       }
      header("Location: ../../HTML/Index.php");
       