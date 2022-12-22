function buttonClick(){
    var url= "../HTML/shoppingCart.php"; 
    window.location = url;
}

function DeleteAllCookies(){
    document.cookie.split(";").forEach(function(c) { document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/"); });
}

cookie_name_shopping_carte = "shopping_carte";
number_of_items = 0;
alert(document.cookie.slice(6 , -10))
if(document.cookie == cookie_name_shopping_carte){
    for(position =1; position != cookie_name_shopping_carte.length; position++ ){
        if(cookie_name_shopping_carte[position] == ','){
            number_of_items++;
        }
        else{
            if(cookie_name_shopping_carte[position] == ';'){
                break;
            }
            else{
                continue;
            }
        }
    }
    alert(number_of_items + "hello");
    document.getElementById("numberOfItem").innerHTML = number_of_items
}
