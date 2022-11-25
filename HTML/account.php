<link rel="stylesheet" href="../CSS/accountCSS/account.css" type="text/css" />
    <div class="top">
        <?php 
            require "../HTML/base_de_html/top.php"
        ?>
    </div>
<?php


$nomducooki = "usrid";
$cookieid = $_COOKIE[$nomducooki];

require 'C:\xampp\htdocs\SIte1mois\php\dbconn.php';

//name
$get_name_sql = "SELECT usr FROM usrinfos WHERE usr_id = $cookieid";
$resulta_name = mysqli_query($conn, $get_name_sql);
$name_array = mysqli_fetch_array($resulta_name, MYSQLI_ASSOC);
$name = implode($name_array);

//mail
$get_mail_sql = "SELECT usrmail FROM usrinfos WHERE usr_id = $cookieid";
$resulta_mail = mysqli_query($conn, $get_mail_sql);
$mail_array = mysqli_fetch_array($resulta_mail, MYSQLI_ASSOC);
$mail = implode($mail_array);

//phone
$get_phone_sql = "SELECT phonenumber FROM usrinfos WHERE usr_id = $cookieid";
$resulta_phone = mysqli_query($conn, $get_phone_sql);
$phone_array = mysqli_fetch_array($resulta_phone, MYSQLI_ASSOC);
$phone = implode($phone_array);





?>
<body class="body">
    <div class="infos">
        <?php
        echo "<p class=\"name\">Your account name is: $name</p>" ;
        
        echo "<p class=\"name\">Your account email is: $mail </p>";
        
        echo "<p class=\"name\">Your account phone is:$phone </p>";
        ?>
    </div>
</body>

