import { ListerLesCookies } from "../GeneralJs/GetCookies";
cookies = ListerLesCookies();

function VerificationSiConnecter(){
    connecter = false
    cookieId = 'usrid'
    cookies.forEach(cookie =>  {
       if(cookie[0 , 4] == cookieId){
        connecter = true
       }   
    });
    if(connecter == false){
        alert("You are not connected")
    }
    alert('heelo')
    return connecter
   }
