<!DOCTYPE html>
<html>

    <title></title>
    <head>
        <link rel="stylesheet" href="../../../SIte1mois/CSS/topCSS/top.css?v=2" type="text/css"/>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <script src="../../../SIte1mois/Javascripts/top/top.js?v=1"></script>
        

    </head>
    <nav class="box_for_navigation">
        <div class="box_navigation">

            <div class="div_home">
                <a href="../../../SIte1mois/HTML/Index.php" class="home">Home</a>
            </div>

            <div class="div_login">          
                <a href="../../../SIte1mois/HTML/login.php" class="login">login</a>
            </div>

            <div class="div_selling">
                <a href="../../../SIte1mois/HTML/nouveau_sell.php" class="selling">Selling</a>        
            </div>

            

            <div class="div_wallet">
                <a href="../../../SIte1mois/HTML/wallet.php" class="wallet">your wallet</a>
            </div>

            <div class="div_research">
                <form action="">
                    <input type="text" class="research" placeholder="Want to buy?">
                </form>
            </div>

           <div class="div_shoppingCart">
                <button class="buttonPourShoppingCart" onclick="buttonClick()"><img src="../../../SIte1mois/CSS/images_pour_site/panierShopping.png" class="imageShopping"></button>
               
            <div class="div_number_item">
                <p class="numberOfItems" id="numberOfItem"></p>
            </div>

            <div>

                <form action="../../../SIte1mois/php/deletingCookies.php">
                    <button onclick="DeleteAllCookies()" style="position: absolute; left:-300px;top:0px;z-index:3;" type="submit">DeleteAllCookies</button>
                </form>
            </div>
           </div>

            <?php 
                $cookie_name_userid = "usrid";
                if(isset($_COOKIE[ $cookie_name_userid])) { ?>
                    <div class="div_logout">
                        <form action="../../../SIte1mois/php/accountSystem/logout.php" method="post" class="form_button">
                            <button name="bouton_log_out" class="button">logout</button>
                        </form>
                    </div>  
                    <div class="div_account">
                        <a href="account.php" class="account">account</a>
                    </div>
            <?php } ?>   
   
        </div>
    </nav>
</html>