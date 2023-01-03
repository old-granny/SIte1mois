export function ListerLesCookies()

function ListerLesCookies(){
    var listCookie = document.cookie 
    lesCookies = []
    unCookie = ""
    for( cpt1 = 0; cpt1 != length(listCookie); cpt1 ++){
        if(listCookie[cpt1] == ';'){
            lesCookies.push(unCookie)
            return lesCookies
        }
        if(listCookie[cpt1] == ','){
            lesCookies.push(unCookie)
            unCookie = ""
        }
        else{
            if(listCookie[cpt1] != ';'){
                if(unCookie == ""){
                    unCookie = listCookie[cpt1]
                }
                else{
                    unCookie = unCookie + listCookie[cpt1]
                }
            }
        }
    }
}