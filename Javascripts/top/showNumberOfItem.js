function montrerNombreArticle(){
    
    cookie_name_shopping_carte = "shopping_carte";
    number_of_items = 0;
    //alert(document.cookie.slice(0 , 14))
    if(document.cookie.slice(0 , 14) == cookie_name_shopping_carte){
        for(position = 1; position != document.cookie.length; position++ ){
            //alert(document.cookie[position])
            if(document.cookie[position] == ','){
                number_of_items++;
            }
            else{
                if(document.cookie[position] == ';'){
                    break;
                }
                else{
                    continue;
                }
            }
        }
        //alert(number_of_items + "hello");
        
        document.getElementById("numberOfItem").innerHTML = number_of_items + 1
    }
}

window.onload = montrerNombreArticle()