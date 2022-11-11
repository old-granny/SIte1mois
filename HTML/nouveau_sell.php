<!DOCTYPE html>

<html lang="">

<head>
    <title>selling</title>
    <link rel="stylesheet" href="../CSS/sellingCSS/stylesheet_sell.css?v=1" type="text/css" />
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
            <div class="div_style_image_1"><img src="../CSS/images_pour_site/ImageBlache.PNG" alt=" " id="image_1" class="style_image_1" onmouseover="MouseOver1()" onmouseout="MouseOut()"></div>
        </div>

        <div class="div_total_image2" id="div_total_image2">
            <div class="div_button_delete2" id="div_button_delete_num2">
                <button class="buttonDelete2" onclick="fonction_delete2()" id="buttonDelete2"><img src="../CSS/images_pour_site/x-icon-white-20.jpg" alt="" class="imageDelete2" ></button> 
            </div>
            <div class="div_style_image_2"><img src="../CSS/images_pour_site/ImageBlache.PNG" alt=" " id="image_2" class="style_image_2" onmouseover="MouseOver2()" onmouseout="MouseOut()"></div>
        </div>


        <div class="div_total_image3" id="div_total_image3">
            <div class="div_button_delete3" id="div_button_delete_num3">
                <button class="buttonDelete3" onclick="fonction_delete3()" id="buttonDelete3"><img src="../CSS/images_pour_site/x-icon-white-20.jpg" alt="" class="imageDelete3"></button> 
            </div>
            <div class="div_style_image_3"><img src="../CSS/images_pour_site/ImageBlache.PNG" alt=" " id="image_3" class="style_image_3" onmouseover="MouseOver3()" onmouseout="MouseOut()"></div>
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
    <div>
        <label for="input" class="label_for_input">Add Image</label>
        <input type="file" id="input" class="inputFiles" onchange="HandleLesImages()">
    </div>

    <form action="" class="form">
        <input type="text" placeholder="Name" name="nom" class="nom">
        <input type="text" placeholder="Usage" name="usage" class="utilisation">
        <input type="number" placeholder="price" name="prix" class="prix">
        <input type="text" placeholder="how you want to sell" name="typedevente" class="typeDeVente">
        <input type="text" placeholder="Description" name="description" class="description">
        <button type="submit" class="buttonSubmit">Sumbit</button>
    </form>
    <!--Input-->

    <!--Images En gros-->
    <div class="Div_imageGros">
        <img src="../CSS/images_pour_site/ImageBlache.PNG" class="imageGros" id="imageGros">
    </div>  
    <!--Images En gros-->

</body>



<script>

    //attribuer src
    src_images_1 = document.getElementById('image_1');
    src_images_2 = document.getElementById('image_2');
    src_images_3 = document.getElementById('image_3');
    src_images_4 = document.getElementById('image_4');
    src_images_5 = document.getElementById('image_5');
    src_images_6 = document.getElementById('image_6');
    src_images_7 = document.getElementById('image_7');
    src_images_8 = document.getElementById('image_8');
    src_images_9 = document.getElementById('image_9');
    src_images_10 = document.getElementById('image_10');
    //attribuer src

    //variable public
    
    lists = ['*','*','*','*','*','*','*','*','*','*']
    function HandleLesImages(){
        if(CheckerNomImage() == true){return}//Si erreur fonction arrete
        i = TrouverLei()
        show_image(i)
        ShowDeletingButton(i)
        CreateLists(i)
        
    }
    function TrouverLei(){
        for(let charactcer in lists){
            if(lists[charactcer] == '*'){
                return parseInt(charactcer) + 1;
            }

        }
    }
    function CheckerNomImage(){

        longeur = (document.getElementById('input').value).split('\\').pop()//La variable prend le nom de l'image
        for(let character in longeur){
            if(longeur[character]==','){
                alert("Erreur Mauvais character dans le nom d'images");
                return true;
            }
            if(longeur[character]=='*'){
                alert("Erreur Mauvais character dans le nom d'images");
                return true;
            }

        }
        return false
    }

    function CreateLists(){
        input = (document.getElementById('input').value).split('\\').pop()//input = nom image
        for (let index = 0; index < lists.length; index++) {
            if (lists[index] === '*') {
                lists[index] = input;
                break;
            }
        }
    }


    function ShowDeletingButton(){
        buttonDelete = "buttonDelete" + i.toString()//attribut la valeur a bouton delete
        var x = getComputedStyle(document.getElementById(buttonDelete)).display// attribut au x si display ou non
        //check si display est la ou non
        if (x == "none") {
            document.getElementById(buttonDelete).style.display = "block"
        }
    }

    function show_image() {
        source_pour_images = "image_" + i.toString(); //Dit a quelle images on est rendu 
        document.getElementById(source_pour_images).src = URL.createObjectURL(event.target.files[0]);// change le source du fichier pour montrer 
        j = null
    }


    function RetirerSRC(position){
        const NOM_IMAGES_NEUTRE = "../CSS/images_pour_site/ImageBlache.PNG"
        source_pour_images = "image_" + position.toString()
        document.getElementById(source_pour_images).src = NOM_IMAGES_NEUTRE

    }

    function CacherDeletingButton(position){
        buttonDelete = "buttonDelete" + position.toString()//attribut la valeur a bouton delete
        document.getElementById(buttonDelete).style.display = "none"
        
    }
    function RetirerSRCDansLists(position){
        index = position -1
        lists.splice(index, 1, '*');
    }
    function AttribuerLesValeurs(position){
        j = i-1;
        i == position;
        
    }

    function fonction_delete1() {
        position = 1;
        RetirerSRC(position)
        CacherDeletingButton(position)
        AttribuerLesValeurs(position)
        RetirerSRCDansLists(position)
       
        
        
    }
    function fonction_delete2() {
        position = 2;
        RetirerSRC(position)
        CacherDeletingButton(position)
        AttribuerLesValeurs(position)
        RetirerSRCDansLists(position)
       
        
    }
    function fonction_delete3() {
        position = 3;
        RetirerSRC(position)
        CacherDeletingButton(position)
        AttribuerLesValeurs(position)
        RetirerSRCDansLists(position)
        
    }
    function fonction_delete4() {
        position = 4;
        RetirerSRC(position)
        CacherDeletingButton(position)
        AttribuerLesValeurs(position)
        RetirerSRCDansLists(position)
        
    }
    function fonction_delete5() {
        position = 5;
        RetirerSRC(position)
        CacherDeletingButton(position)
        AttribuerLesValeurs(position)
        RetirerSRCDansLists(position)
        
    }
    function fonction_delete6() {
        position = 6;
        RetirerSRC(position)
        CacherDeletingButton(position)
        AttribuerLesValeurs(position)
        RetirerSRCDansLists(position)
        
    }
    function fonction_delete7() {
        position = 7;
        RetirerSRC(position)
        CacherDeletingButton(position)
        AttribuerLesValeurs(position)
        RetirerSRCDansLists(position)
        
    }
    function fonction_delete8() {
        position = 7;
        RetirerSRC(position)
        CacherDeletingButton(position)
        AttribuerLesValeurs(position)
        RetirerSRCDansLists(position)
    }
    function fonction_delete9() {
        position = 9;
        RetirerSRC(position)
        CacherDeletingButton(position)
        AttribuerLesValeurs(position)
        RetirerSRCDansLists(position)

    }function fonction_delete10() {
        position = 10;
        RetirerSRC(position)
        CacherDeletingButton(position)
        AttribuerLesValeurs(position)
        RetirerSRCDansLists(position)
    }

    function show_lists() {
        alert(lists)
    }
    //S'occuper de montrer l'images en gros

    function MouseOut(){
        ChangerSRCGrosImagesPourImagesBlanche()
    }
    function TrouverSrc(position){
        imagesSrc = "src_images_" + position.toString()
        return imagesSrc
    }

    function CheckerSiImagesOuNon(imagesSrc){
        const NOM_IMAGES_NEUTRE = "../CSS/images_pour_site/ImageBlache.PNG"
        if(imagesSrc.src == NOM_IMAGES_NEUTRE){
            return false
        }
        else{
            return true
        }
        
    }

    function ChangerSRCGrosImagesPourBonneSRC(position){
        id = "image_" + position.toString()
        srcImages = document.getElementById(id).src
        document.getElementById('imageGros').src = srcImages
    }

    function ChangerSRCGrosImagesPourImagesBlanche(){
        const NOM_IMAGES_NEUTRE = "../CSS/images_pour_site/ImageBlache.PNG"
        srcImages = NOM_IMAGES_NEUTRE
        document.getElementById('imageGros').src = srcImages
    }

    function MouseOver1(){
        position = 1;
        imagesSrc = TrouverSrc(position)
        if(CheckerSiImagesOuNon(imagesSrc) == false){
            return;
        }
        else{
            ChangerSRCGrosImagesPourBonneSRC(position)
        }
        
        
        
    }
    function MouseOver2(){
        position = 2;
        imagesSrc = TrouverSrc(position)
        if(CheckerSiImagesOuNon(imagesSrc) == false){
            return;
        }
        else{
            id = "image_" + position.toString()
            srcImages = document.getElementById(id).src
            alert(srcImages)
            document.getElementById('imageGros').src = srcImages
        }
    }
    function MouseOver3(){
        position = 3;
        imagesSrc = TrouverSrc(position)
        if(CheckerSiImagesOuNon(imagesSrc) == false){
            return;
        }
        else{
            id = "image_" + position.toString()
            srcImages = document.getElementById(id).src
            alert(srcImages)
            document.getElementById('imageGros').src = srcImages
        }
    }
    function MouseOver4(){
        position = 4;
        imagesSrc = TrouverSrc(position)
        alert(imagesSrc)
    }
    function MouseOver5(){
        position = 5;
        imagesSrc = TrouverSrc(position)
        alert(imagesSrc)
    }
    function MouseOver6(){
        position = 6;
        imagesSrc = TrouverSrc(position)
        alert(imagesSrc)
    }
    function MouseOver7(){
        position = 7;
        imagesSrc = TrouverSrc(position)
        alert(imagesSrc)
    }
    function MouseOver8(){
        position = 8;
        imagesSrc = TrouverSrc(position)
        alert(imagesSrc)
    }
    function MouseOver9(){
        position = 9;
        imagesSrc = TrouverSrc(position)
        alert(imagesSrc)
    }
    function MouseOver10(){
        position = 10;
        imagesSrc = TrouverSrc(position)
        alert(imagesSrc)
    }
</script>

</html>