function buttonClick(){
    var url= "../HTML/shoppingCart.php"; 
    window.location = url;
}

function DeleteAllCookies(){
    document.cookie.split(";").forEach(function(c) { document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/"); });
}

