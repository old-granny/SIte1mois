function AddToCart(id_images){
    //Le X va egaler a toute les cookies
    var x =  document.cookie
    //check si le cookies shopping_carte est present ou non
    alert(x[0])
    if(x[0] == 's'){
        //delete l'ancien
        document.cookie = "shopping_carte= ; expires = Thu, 01 Jan 1970 00:00:00 GMT"

        i = 0;
        //le string cookies vas servire a juste garder les cookies du shopping carte

        cookies = "";
        while(i <= x.length){
            if( x[i] == ";"){
                break
            }
            else{
                cookies += x[i]
                i++;
            }
        }
        
        id_string = cookies.toString()
        id = id_string.substring(15)
        alert(id_images, id_string)
        document.cookie = "shopping_carte=" + id +"," + id_images;
    }
    else{
        document.cookie = "shopping_carte=" + id_images + "";
    }
    
}
