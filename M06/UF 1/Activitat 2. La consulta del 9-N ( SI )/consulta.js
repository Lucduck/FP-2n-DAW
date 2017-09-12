var bucle = true;
var siSi=0,siNo=0,noNo=0;
while(bucle == true){
    do{
        var pregunta1 = prompt("Vol que Catalunya esdevingui un Estat? (si o no)");
        if(pregunta1 != null)
            pregunta1 = pregunta1.toUpperCase()
    }while(pregunta1 != "SI" && pregunta1 != "NO");
    
    if(pregunta1 == "SI"){
        do{
            var pregunta2 = prompt("En cas afirmatiu, vol que aquest Estat sigui independent? (si o no)");
            if(pregunta2 != null)
                pregunta2 = pregunta2.toUpperCase()
        }while(pregunta2 != "SI" && pregunta2 != "NO");
    }else{
        pregunta2="NO";
    }
    if(pregunta1 == "SI" && pregunta2 == "SI")
        siSi++;
    else if(pregunta1 == "SI" && pregunta2 == "NO")
        siNo++;
    else 
        noNo++;
    
    var preguntaFinal = confirm("Vols tornar a votar?")
    if (preguntaFinal == false) {
        bucle=false;
    }
}

var styleT = "style='border: 1px solid black'";
document.write("<table "+styleT+">\n\
                    <tr>\n\
                        <th "+styleT+">SI-SI:</th>\n\
                        <td "+styleT+">"+siSi+"</td>\n\
                    </tr>\n\
                    <tr>\n\
                        <th "+styleT+"'>SI-NO:  </th>\n\
                        <td "+styleT+">"+siNo+"</td>\n\
                    </tr>\n\
                    <tr>\n\
                        <th "+styleT+">NO-NO:  </th>\n\
                        <td "+styleT+">"+noNo+"</td>\n\
                    </tr>\n\
                </table>")