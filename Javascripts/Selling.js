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

 
 
 lists = ['*','*','*','*','*','*','*','*','*','*']//La lists sert a trouver le i 
 function HandleLesImages(){
     if(CheckerNomImage() == true){return}//Si erreur fonction arrete
     i = TrouverLei()
     show_image(i)
     ShowDeletingButton(i)
     CreateLists(i)
     SetCookies(lists)
     
 }
 //Le i vas servir a dire ou on est rendu dans les inputs pour affichier l'image
 //Passe a travers la lists est trouve quand il y a de la place
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
     SetCookies(lists)
     
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
         document.getElementById('imageGros').src = srcImages
     }
 }
 function MouseOver4(){
     position = 4;
     imagesSrc = TrouverSrc(position)
     if(CheckerSiImagesOuNon(imagesSrc) == false){
        return;
    }
    else{
        id = "image_" + position.toString()
        srcImages = document.getElementById(id).src
        document.getElementById('imageGros').src = srcImages
    }

 }
 function MouseOver5(){
     position = 5;
     imagesSrc = TrouverSrc(position)
     if(CheckerSiImagesOuNon(imagesSrc) == false){
        return;
    }
    else{
        id = "image_" + position.toString()
        srcImages = document.getElementById(id).src
        document.getElementById('imageGros').src = srcImages
    }
  
 }
 function MouseOver6(){
     position = 6;
     imagesSrc = TrouverSrc(position)
     if(CheckerSiImagesOuNon(imagesSrc) == false){
        return;
    }
    else{
        id = "image_" + position.toString()
        srcImages = document.getElementById(id).src
        document.getElementById('imageGros').src = srcImages
    }
  
 }
 function MouseOver7(){
     position = 7;
     imagesSrc = TrouverSrc(position)
     if(CheckerSiImagesOuNon(imagesSrc) == false){
        return;
    }
    else{
        id = "image_" + position.toString()
        srcImages = document.getElementById(id).src
        document.getElementById('imageGros').src = srcImages
    }
 }
 function MouseOver8(){
     position = 8;
     imagesSrc = TrouverSrc(position)
     if(CheckerSiImagesOuNon(imagesSrc) == false){
        return;
    }
    else{
        id = "image_" + position.toString()
        srcImages = document.getElementById(id).src
        document.getElementById('imageGros').src = srcImages
    }
 }
 function MouseOver9(){
     position = 9;
     imagesSrc = TrouverSrc(position)
     if(CheckerSiImagesOuNon(imagesSrc) == false){
        return;
    }
    else{
        id = "image_" + position.toString()
        srcImages = document.getElementById(id).src
        document.getElementById('imageGros').src = srcImages
    }

 }
 function MouseOver10(){
     position = 10;
     imagesSrc = TrouverSrc(position)
     if(CheckerSiImagesOuNon(imagesSrc) == false){
        return;
    }
    else{
        id = "image_" + position.toString()
        srcImages = document.getElementById(id).src
        document.getElementById('imageGros').src = srcImages
    }
 }
 function SetCookies(lists){
    Deletecookies()
    alert(lists)
    document.cookie = "lists=" + lists;
 }
 function Deletecookies(){
    document.cookie = "lists=;expires=Thu, 01 Jan 1970 00:00:00 UTC;";
 }