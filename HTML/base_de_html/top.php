<!DOCTYPE html>
<html>

    <title></title>
    <head>
        <link rel="stylesheet" href="../CSS/topCSS/top.css?v=1" type="text/css"/>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    </head>
    <nav class="">
        <div class="navegation">
            <div class="homeLinkDiv">
                <a href="C:\xampp\htdocs\SIte1mois\HTML\Index.php" class="homeLink">Home</a>
            </div>

            

            <div class="login">          
                <a href="login.php" class="loginLink">login</a>
            </div>

        

            <div class="account">
                <a href="account.php" class="accountLink">account</a>
            </div>

        

            <div class="selling" >
                <a href="sell.php" class="sellLink">Sell?</a>        
            </div>

            <div class="selling_nouveau">
                <a href="nouveau_sell.php" class="nouveausellingLink">Sell_nouveau?</a>        
            </div>

            

            <div class="wallet">
                <a href="wallet.php" class="walletLink">your wallet</a>
            </div>
        </div>
    </nav>
    <br>
    <div class="div_logout">
        <?php 
            $cookie_name = "usrid";
            if(isset($_COOKIE[$cookie_name])) { ?>
                <form action="../php/logout.php" method="post">
                    <button name="bouton_log_out">Logout</button>
                </form>
        <?php } ?>   
    </div>  
</html>