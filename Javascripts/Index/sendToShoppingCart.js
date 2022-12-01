function AddToCart(id_images){
    document.cookie = "shopping_carte= ; expires = Thu, 01 Jan 1970 00:00:00 GMT"
    var x =  document.cookie
    if(x[0] == 's'){
        document.cookie = "shopping_carte= ; expires = Thu, 01 Jan 1970 00:00:00 GMT"
        i = 0;
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
        if(EstDansLists(id, id_images)){
            alert("Vous avez deja cette article")
            return;
        }
        document.cookie = "shopping_carte=" + id +"," + id_images;
    }
    else{
        document.cookie = "shopping_carte=" + id_images + "";
    }
    
}
function EstDansLists(id , id_images){
    cpt = 0;
    cpt2 = 0;
    dejaDansLists = false;
    while(cpt <= id.length){
        lists = [];
        ids = "";
        if(id[cpt] = ","){
            lists.append(ids)
            ids = "";
        }
        else{
            ids += id[cpt]
        }
        cpt++;
    }
    while(cpt2 <= lists.length){
        if(lists[cpt2] == id_images){
            dejaDansLists = true;
        }
        cpt2++;
    }
    return dejaDansLists;
}