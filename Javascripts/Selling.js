
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
     show_image()
     CreateLists()
     ShowDeletingButton()
     if(TrouverLei() != 1){
        CreerLeInput()
     }
     
 }


 /*Handle Les fonction Pour show Image */


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
    i = TrouverLei()
     longeur = (document.getElementById('input' + i.toString()).value).split('\\').pop()//La variable prend le nom de l'image
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
    i = TrouverLei()
     input = (document.getElementById('input' + i.toString()).value).split('\\').pop()//input = nom image
     for (let index = 0; index < lists.length; index++) {
         if (lists[index] === '*') {
             lists[index] = input;
             break;
         }
     }
 }
 function show_image() {
    i = TrouverLei()
     source_pour_images = "image_" + i.toString(); //Dit a quelle images on est rendu 
     document.getElementById(source_pour_images).src = URL.createObjectURL(event.target.files[0]);// change le source du fichier pour montrer 
     j = null
 }
 function AttribuerLesValeurs(position){
     j = i-1;
     i == position;
     
 }
 /*Handle Les fonction Pour show Image */




 /* Alert Lists*/
 function show_lists() {
     alert(lists)
 }
 /* Alert Lists*/




 /*Handle Les Inputs*/
 function CreerLeInput(){
    i = TrouverLei();
    input = "input" + i.toString()
    div_input = "div_input_" + i.toString()
    html = "<label for=\""+input+"\" class=\"label_for_input\">Add Image "+input+"</label><input type=\"file\" id=\""+input+"\" class=\"inputFiles\" onchange=\"HandleLesImages()\"  accept=\"image/*\"  name=\"fichier"+ i +"\">";
    document.getElementById(div_input).innerHTML = html
    CacherTouteLesAutres(i)

    
}
function CacherTouteLesAutres(i){
    
   for(x = 1; x != 10;x++){

        if(x != i){
            div_input = "div_input_" + x.toString()
            document.getElementById(div_input).style.display = "none"
        }
        else{
            div_input = "div_input_" + i.toString()
            document.getElementById(div_input).style.display = "block"
        }

   }

}
function RemoveInputDiv(position){
    y = position + 1;
    input = "input" + y.toString()
    div_input = "input_" + y.toString()
    html = "<div></div>"
    document.getElementById(div_input).innerHTML = html
    MontrerInput()

 }
CreerLeInput()
/*Handle Les Inputs*/




/*Handle Les fonctions de pour delete*/
function fonction_delete1() {
    position = 1;
    RetirerSRC(position)
    CacherDeletingButton(position)
    AttribuerLesValeurs(position)
    RetirerSRCDansLists(position)
    CreerLeInput()
    
    
     
}
function fonction_delete2() {
    position = 2;
    RetirerSRC(position)
    CacherDeletingButton(position)
    AttribuerLesValeurs(position)
    RetirerSRCDansLists(position)
    CreerLeInput()
    
    
   
}
function fonction_delete3() {
    position = 3;
    RetirerSRC(position)
    CacherDeletingButton(position)
    AttribuerLesValeurs(position)
    RetirerSRCDansLists(position)
    CreerLeInput()
    
    
}
function fonction_delete4() {
    position = 4;
    RetirerSRC(position)
    CacherDeletingButton(position)
    AttribuerLesValeurs(position)
    RetirerSRCDansLists(position)
    CreerLeInput()
   
    
}
function fonction_delete5() {
    position = 5;
    RetirerSRC(position)
    CacherDeletingButton(position)
    AttribuerLesValeurs(position)
    RetirerSRCDansLists(position)
    CreerLeInput()
    
    
}
function fonction_delete6() {
    position = 6;
    RetirerSRC(position)
    CacherDeletingButton(position)
    AttribuerLesValeurs(position)
    RetirerSRCDansLists(position)
    CreerLeInput()
    
}
function fonction_delete7() {
    position = 7;
    RetirerSRC(position)
    CacherDeletingButton(position)
    AttribuerLesValeurs(position)
    RetirerSRCDansLists(position)
    CreerLeInput()
    
}
function fonction_delete8() {
    position = 7;
    RetirerSRC(position)
    CacherDeletingButton(position)
    AttribuerLesValeurs(position)
    RetirerSRCDansLists(position)
    CreerLeInput()
}
function fonction_delete9() {
    position = 9;
    RetirerSRC(position)
    CacherDeletingButton(position)
    AttribuerLesValeurs(position)
    RetirerSRCDansLists(position)
    CreerLeInput()
    


}function fonction_delete10() {
    position = 10;
    RetirerSRC(position)
    CacherDeletingButton(position)
    AttribuerLesValeurs(position)
    RetirerSRCDansLists(position)
    CreerLeInput()

}
/*Handle Les fonctions de pour delete*/




/*Handle Les fonctions de delete  */

function ShowDeletingButton(){
    buttonDelete = "buttonDelete" + i.toString()//attribut la valeur a bouton delete
    var x = getComputedStyle(document.getElementById(buttonDelete)).display// attribut au x si display ou non
    //check si display est la ou non
    if (x == "none") {
        document.getElementById(buttonDelete).style.display = "block"
    }
}
function RetirerSRCDansLists(position){
    index = position -1
    lists.splice(index, 1, '*');
    
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
CreerLeInput()
/*Handle Les fonctions de delete  */
