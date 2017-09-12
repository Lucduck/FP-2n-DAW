var dau = new Array(0,0,0,0,0,0);

//pregunta que es repetirà fins que no escrigui un nombre més gran que 0
//si clica cancel·lar, es repetirà la pregunta igualment
do{
    var tirs = prompt("Quantes vegades vols tirar el dau? (numero més gran o igual de 0)");
}while(isNaN(tirs)==true || tirs<0);

//pregunta que se repetirá mientras no escriba un numero que este entre 1 i 6
//si clica cancel·lar, es repetirà la pregunta igualment
do{
    var des = prompt("Quina cara del dau vols que estigui desequilibrada? (numero entre 1 i 6)");
}while(isNaN(des)==true || (des<1 || des>6));

//Aquest for es repetira les vegades que em indicat en la variable tirs.
//Agafa un numero random entre 0 i 7.
//Sumara 1 a la posicio de la array indicada, pero si dona 6 o mes gran, 
//el guardare en la posisio del numero que ha dit que sigui desequilibrat.
//Faig Math.floor per agafar el numero enter, i aixi es més facil guardar-lo 
//en l'array.
for(var i=0;i<tirs;i++){
    var num = Math.random()*7;
    if (num >= 6){
        dau[des-1] ++;
    }else{
        dau[Math.floor(num)] ++;
    }
}

//Faig una taula amb totes les dades colocades correctament
var estiTable = "style='border: 1px solid #261945; background-color: #6F59A4'";
var estil = "style='border: 1px solid #261945; background-color: #DBD4EC'";
document.write("<table "+estiTable+">\n\
                    <tr>\n\
                        <th "+estil+">Cara</th>\n\
                        <th "+estil+">Vegades</th>\n\
                    </tr>");
//Vaig agafant l'informació de l'array, la qual indica quantes vegades a tocat
for(var i = 0;i<6;i++){
    document.write("<tr>\n\
                        <td "+estil+">"+(i+1)+"</td>\n\
                        <td "+estil+">"+dau[i]+"</td>\n\
                    </tr>");
}
//tanco la taula
document.write("</table>");