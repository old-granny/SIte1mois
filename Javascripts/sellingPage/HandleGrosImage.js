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
