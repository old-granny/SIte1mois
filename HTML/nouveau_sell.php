<!DOCTYPE html>

<html lang="">

<head>
    <title>selling</title>
    <link rel="stylesheet" href="../CSS/sellingCSS/stylesheet_sell.css?v=2" type="text/css" />
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="body">
    <!--Montre les image-->

    <div class="DIV_ALL_IMAGES_INPUT">

        <div class="div_total_image1" id="div_total_image1">
            <div class="div_button_delete1" id="div_button_delete_num1">
                <button class="buttonDelete1" onclick="fonction_delete1()" id="buttonDelete1"><img src="../CSS/images_pour_site/x-icon-white-20.jpg" alt="" class="imageDelete1"></button> 
            </div>
            <div class="div_style_image_1"><img src="../CSS/images_pour_site/ImageBlache.PNG" alt=" " id="image_1" class="style_image_1" onmouseover="MouseOver1()" onmouseout="MouseOut()" name="images1"></div>
        </div>

        <div class="div_total_image2" id="div_total_image2">
            <div class="div_button_delete2" id="div_button_delete_num2">
                <button class="buttonDelete2" onclick="fonction_delete2()" id="buttonDelete2"><img src="../CSS/images_pour_site/x-icon-white-20.jpg" alt="" class="imageDelete2" ></button> 
            </div>
            <div class="div_style_image_2"><img src="../CSS/images_pour_site/ImageBlache.PNG" alt=" " id="image_2" class="style_image_2" onmouseover="MouseOver2()" onmouseout="MouseOut()" name="images2"></div>
        </div>


        <div class="div_total_image3" id="div_total_image3">
            <div class="div_button_delete3" id="div_button_delete_num3">
                <button class="buttonDelete3" onclick="fonction_delete3()" id="buttonDelete3"><img src="../CSS/images_pour_site/x-icon-white-20.jpg" alt="" class="imageDelete3"></button> 
            </div>
            <div class="div_style_image_3"><img src="../CSS/images_pour_site/ImageBlache.PNG" alt=" " id="image_3" class="style_image_3" onmouseover="MouseOver3()" onmouseout="MouseOut()" name="images3"></div>
        </div>

        <div class="div_total_image4" id="div_total_image4">
            <div class="div_button_delete4" id="div_button_delete_num4">
                <button class="buttonDelete4" onclick="fonction_delete4()" id="buttonDelete4"><img src="../CSS/images_pour_site/x-icon-white-20.jpg" alt="" class="imageDelete4"></button> 
            </div>
            <div class="div_style_image_4"><img src="../CSS/images_pour_site/ImageBlache.PNG" alt=" " id="image_4" class="style_image_4" onmouseover="MouseOver4()" onmouseout="MouseOut()"></div>
        </div>

        <div class="div_total_image5" id="div_total_image5">
            <div class="div_button_delete5" id="div_button_delete_num5">
                <button class="buttonDelete5" id="buttonDelete5" onclick="fonction_delete5()"><img src="../CSS/images_pour_site/x-icon-white-20.jpg" alt="" class="imageDelete5"></button> 
            </div>
            <div class="div_style_image_5"><img src="../CSS/images_pour_site/ImageBlache.PNG" alt=" " id="image_5" class="style_image_5" onmouseover="MouseOver5()" onmouseout="MouseOut()"></div>
        </div>

        <div class="div_total_image6" id="div_total_image6">
            <div class="div_button_delete6" id="div_button_delete_num6">
                <button class="buttonDelete6" onclick="fonction_delete6()" id="buttonDelete6"><img src="../CSS/images_pour_site/x-icon-white-20.jpg" alt="" class="imageDelete6"></button> 
            </div>
            <div class="div_style_image_6"><img src="../CSS/images_pour_site/ImageBlache.PNG" alt=" " id="image_6" class="style_image_6" onmouseover="MouseOver6()" onmouseout="MouseOut()"></div>
        </div>

        <div class="div_total_image7" id="div_total_image7">
            <div class="div_button_delete7" id="div_button_delete_num7">
                <button class="buttonDelete7" onclick="fonction_delete7()" id="buttonDelete7"><img src="../CSS/images_pour_site/x-icon-white-20.jpg" alt="" class="imageDelete7"></button> 
            </div>
            <div class="div_style_image_7"><img src="../CSS/images_pour_site/ImageBlache.PNG" alt=" " id="image_7" class="style_image_7" onmouseover="MouseOver7()" onmouseout="MouseOut()"></div>
        </div>

        <div class="div_total_image8" id="div_total_image8">
            <div class="div_button_delete8" id="div_button_delete_num8">
                <button class="buttonDelete8" onclick="fonction_delete8()" id="buttonDelete8"><img src="../CSS/images_pour_site/x-icon-white-20.jpg" alt="" class="imageDelete8"></button> 
            </div>
            <div class="div_style_image_8"><img src="../CSS/images_pour_site/ImageBlache.PNG" alt=" " id="image_8" class="style_image_8" onmouseover="MouseOver8()" onmouseout="MouseOut()"></div>
        </div>

        <div class="div_total_image9" id="div_total_image9">
            <div class="div_button_delete9" id="div_button_delete_num9">
                <button class="buttonDelete9" onclick="fonction_delete9()" id="buttonDelete9"><img src="../CSS/images_pour_site/x-icon-white-20.jpg" alt="" class="imageDelete9"></button> 
            </div>
            <div class="div_style_image_9"><img src="../CSS/images_pour_site/ImageBlache.PNG" alt=" " id="image_9" class="style_image_9" onmouseover="MouseOver9()" onmouseout="MouseOut()"></div>
        </div>

        <div class="div_total_image10" id="div_total_image10">
            <div class="div_button_delete10" id="div_button_delete_num10">
                <button class="buttonDelete10" onclick="fonction_delete10()" id="buttonDelete10"><img src="../CSS/images_pour_site/x-icon-white-20.jpg" alt="" class="imageDelete10"></button> 
            </div>
            <div class="div_style_image_10"><img src="../CSS/images_pour_site/ImageBlache.PNG" alt=" " id="image_10" class="style_image_10" onmouseover="MouseOver10()" onmouseout="MouseOut()"></div>
        </div>



        <button id="showLists" style="position:relative ; top: 700px" onclick="show_lists()">show Lists</button>
    </div>
    <!--Montrer les images-->

    <!--Input-->
    

    <form class="form" action="sellphp.php" method="post" enctype="multipart/form-data">
        <div id="div_input_1" class="input_1" name="Fichier_1"></div>
        <div id="div_input_2" class="input_2" name="Fichier_2"></div>
        <div id="div_input_3" class="input_3" name="Fichier_3"></div>
        <div id="div_input_4" class="input_4" name="Fichier_4"></div>
        <div id="div_input_5" class="input_5" name="Fichier_5"></div>
        <div id="div_input_6" class="input_6" name="Fichier_6"></div>
        <div id="div_input_7" class="input_7" name="Fichier_7"></div>
        <div id="div_input_8" class="input_8" name="Fichier_8"></div>
        <div id="div_input_9" class="input_9" name="Fichier_9"></div>
        <div id="div_input_10" class="input_10" name="Fichier_10"></div>
        <input type="text" placeholder="Name" name="nom" class="nom">
        <input type="text" placeholder="Usage" name="usage" class="utilisation">
        <input type="number" placeholder="price" name="prix" class="prix">
        <input type="text" placeholder="how you want to sell" name="typedevente" class="typeDeVente">
        <input type="text" placeholder="Description" name="description" class="description">
        <button type="submit" class="buttonSubmit" name="submit">Sumbit</button>

    </form>

    <!--Input-->

    <!--Images En gros-->
    <div class="Div_imageGros">
        <img src="../CSS/images_pour_site/ImageBlache.PNG" class="imageGros" id="imageGros">
    </div>  
    <!--Images En gros-->
<script src="../Javascripts/Selling.js?v=1"></script>
<script src="../Javascripts/HandleGrosImage.js?v=1"></script>


</body>

</html>