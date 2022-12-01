
<link rel="stylesheet" href="../CSS/accountCSS/account.css" type="text/css" />
    <div class="top">
        <?php 
            require "../php/showInfosForAccountPage.php";
            require "../HTML/base_de_html/top.php"
        ?>
    </div>
<body class="body">
    <div class="infos">
        <?php
        echo "<p class=\"name\">Your account name is: $name</p>" ;
        
        echo "<p class=\"name\">Your account email is: $mail </p>";
        
        echo "<p class=\"name\">Your account phone is:$phone </p>";
        ?>
    </div>
</body>

