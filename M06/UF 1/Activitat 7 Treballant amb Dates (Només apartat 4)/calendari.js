var diesSetmana = ["Dl","Dm","Dc","Dj","Dv","Ds","Dg"];
var mesos = ["Gener","Febrer","Març","Abril","Maig","Juny","Juliol","Agost","Setembre","Octubre","Novembre","Desembre"];

var data = new Date();

var diaActual = data.getDate(); //Guardo el dia abans de cambiar-lo, pero despres pintar el dia actual
data.setDate(1);//Ens posisionem al primer dia del mes, per mirar quin dia de la setmana comença

var mesActual = data.getMonth(); //Agafa el mes-1
var diaSetmana = data.getDay(); //Agafa el dia de la setmana
var anyActual = data.getFullYear(); //Agafo el any
if(diaSetmana == 0) diaSetmana = 6; //Si es 0 es diumenge, per aixo el cambio a 6, per que no hi hagi conflicte en l'array

//CSS
//És per pintar correctament el calendari
document.write("<style>\n\
                    table{\n\
                        background-color: gray;\n\
                    } \n\
                    th, td{ \n\
                        padding: 3px;\n\
                        text-align: center;\n\
                    }\n\
                    th{\n\
                        background-color: #69CF64;\n\
                    }\n\
                    td{\n\
                        background-color: #97FF92;\n\
                    }\n\
                    #actual{\n\
                        background-color: #FF9295;\n\
                    }\n\
                </style>");


//TABLE HTML
//Començo la taula i escric el mes i l'any
document.write("<table border=1>\n\
                    <tr><th colspan='7'>"+mesos[mesActual]+" "+anyActual+"</th></tr><tr>");

for (var i = 0; i<=6;i++){
    document.write("<th>"+diesSetmana[i]+"</th>");
}
document.write("</tr><tr>");

//Afegeixo dies buits, fins arribar al dia de la setmana correcte
var x = 1;
while(x<diaSetmana){
    document.write("<td></td>");
    x++;
}

//Afegeixo els dies del mes al calendari
while(data.getMonth()==mesActual){
    //Si el dia és el dia actual, el pinto d'un altre color
    if(data.getDate() != diaActual){
        document.write("<td>");
    }else{
        document.write("<td id='actual'>");
    }
    document.write(data.getDate()+"</td>");
    //quan acaba la setmana, començo una nova fila
    if(data.getDay()==0){
        document.write("</tr><tr>");
        x=0;
    }
    data.setDate(data.getDate()+1);
    x++;
}

//Acavo de omplir el calendari
while(x<=7 && x!=1){
    document.write("<td></td>");
    x++;
}
document.write("</tr></table>");//tanco la taula