function ordenar(name,alumnos){


  if(document.getElementById("botones")==null){ 

                var botones=document.createElement("div");
                botones.setAttribute("id","botones"); 
                document.getElementById("totales").appendChild(botones);

            

                
                var texto = "Ordenar alumnos por color ";
                var parafo=document.createElement("p");
                parafo.setAttribute("id","parrafo");
                parafo.setAttribute("class","margen");
                var txt = document.createTextNode(texto);
                document.getElementById("botones").appendChild(parafo);
                parafo.appendChild(txt);
            
            


                var rojo=document.createElement("button");
                rojo.setAttribute("style","background-color: red;height:40px;width:40px; border: 2px solid;")
                rojo.setAttribute("id","rojo");
                rojo.setAttribute("name","rojo");
                rojo.setAttribute("onclick","ordenar(this.name,alumnos);");
                document.getElementById('botones').appendChild(rojo);
                rojo.setAttribute("class","margen");
                 
                var azul=document.createElement("button");
                azul.setAttribute("style","background-color: blue;height:40px;width:40px; border: 2px solid;")
                azul.setAttribute("id","azul");
                azul.setAttribute("name","azul");
                azul.setAttribute("onclick","ordenar(this.name,alumnos);");
                document.getElementById('botones').appendChild(azul);
                azul.setAttribute("class","margen");
            
                var verde=document.createElement("button");
                verde.setAttribute("style","background-color: green;height:40px;width:40px; border: 2px solid;")
                verde.setAttribute("id","verde");
                verde.setAttribute("name","verde");
                verde.setAttribute("onclick","ordenar(this.name,alumnos);");
                document.getElementById('botones').appendChild(verde);
                verde.setAttribute("class","margen");
                
            
                var amarillo=document.createElement("button");
                amarillo.setAttribute("style","background-color: yellow;height:40px;width:40px; border: 2px solid;")
                amarillo.setAttribute("id","amarillo");
                amarillo.setAttribute("name","amarillo");
                amarillo.setAttribute("onclick","ordenar(this.name,alumnos);");
                document.getElementById('botones').appendChild(amarillo);
                amarillo.setAttribute("class","margen");


                var boton = document.createElement("input");
                boton.setAttribute("type","submit");
                boton.setAttribute("value","Generar Grupo");
                boton.setAttribute("name","generarG");
                boton.setAttribute("id","boton1");
                boton.setAttribute("onclick","generar(alumnos);");
                document.getElementById("botones").appendChild(boton);

  }  
    

    
    var resultados=document.createElement("table");
    resultados.setAttribute("id","resultados");
    document.getElementById("totales").appendChild(resultados);

    console.log(alumnos);

    document.getElementById("resultados").innerHTML="";

        var nombrea = "Nombre";
        var tr1 = document.createElement("tr");
        var th1 = document.createElement("th");
        var texto = document.createTextNode(nombrea);
        document.getElementById('resultados').appendChild(tr1);
        document.getElementById('resultados').appendChild(th1);
        tr1.appendChild(th1);
        th1.appendChild(texto);

        var apellidoa = "Apellidos";
        var th2 = document.createElement("th");
        var texto = document.createTextNode(apellidoa);
        document.getElementById('resultados').appendChild(tr1);
        document.getElementById('resultados').appendChild(th2);
        tr1.appendChild(th2);
        th2.appendChild(texto);

        var colorrojo = "Rojo";
        var th3 = document.createElement("th");
        var texto = document.createTextNode(colorrojo);
        document.getElementById('resultados').appendChild(th3);
        tr1.appendChild(th3);
        th3.appendChild(texto);

        var colorazul = "Azul";
        var th4 = document.createElement("th");
        var texto = document.createTextNode(colorazul);
        document.getElementById('resultados').appendChild(th4);
        tr1.appendChild(th4);
        th4.appendChild(texto);

        var colorverde = "Verde";
        var th5 = document.createElement("th");
        var texto = document.createTextNode(colorverde);
        document.getElementById('resultados').appendChild(th5);
        tr1.appendChild(th5);
        th5.appendChild(texto);

        var coloramarillo = "Amarillo";
        var th6 = document.createElement("th");
        var texto = document.createTextNode(coloramarillo);
        document.getElementById('resultados').appendChild(th6);
        tr1.appendChild(th6);
        th6.appendChild(texto);


            //ORDENA POR COLOR
            for (var i=0; i<alumnos.length;i++){

                alumnos[i].alumno_dni=parseInt(alumnos[i].alumno_dni);

                alumnos[i].rojo=parseInt(alumnos[i].rojo);
                alumnos[i].azul=parseInt(alumnos[i].azul);
                alumnos[i].verde=parseInt(alumnos[i].verde);
                alumnos[i].amarillo=parseInt(alumnos[i].amarillo);

                if (name=='rojo'){

                        alumnos.sort(function (a, b) {
                        if (a.rojo < b.rojo){
                            return 1;
                        }
                        if (a.rojo > b.rojo){
                            return -1;
                        }
                        return 0;
                        }); 
                
                }else if (name=='azul'){
                    
                        alumnos.sort(function (a, b) {
                        if (a.azul < b.azul){
                            return 1;
                        }
                        if (a.azul > b.azul){
                            return -1;
                        }
                        return 0;
                        }); 

                }else if (name=='verde'){

                        alumnos.sort(function (a, b) {
                        if (a.verde < b.verde){
                            return 1;
                        }
                        if (a.verde > b.verde){
                            return -1;
                        }
                        return 0;
                        }); 

                }else if (name=='amarillo'){

                        alumnos.sort(function (a, b) {
                        if (a.amarillo < b.amarillo){
                            return 1;
                        }
                        if (a.amarillo > b.amarillo){
                            return -1;
                        }
                        return 0;
                        }); 
                    
                }  
                

                var nombre = alumnos[i].nombre;
                
                var trp = document.createElement("tr");
                var nodonombre=document.createElement("td"); 
                var textonombre= document.createTextNode(nombre); 
                document.getElementById('resultados').appendChild(trp);
                document.getElementById('resultados').appendChild(nodonombre);
                trp.appendChild(nodonombre);
                nodonombre.appendChild(textonombre);
                nodonombre.setAttribute("class","tdT");
                


                var apellidos = alumnos[i].apellidos;
                var nodoapellidos=document.createElement("td"); 
                var textoapellidos= document.createTextNode(apellidos); 
                document.getElementById('resultados').appendChild(trp);
                document.getElementById('resultados').appendChild(nodoapellidos);
                trp.appendChild(nodoapellidos);
                nodoapellidos.appendChild(textoapellidos);
                nodoapellidos.setAttribute("class","tdT");
                


                var rojo = alumnos[i].rojo;
                var nodorojo=document.createElement("td"); 
                var textorojo= document.createTextNode(rojo); 
                document.getElementById('resultados').appendChild(trp);
                document.getElementById('resultados').appendChild(nodorojo);
                trp.appendChild(nodorojo);
                nodorojo.appendChild(textorojo);
                nodorojo.setAttribute("class","tdT");
                nodorojo.setAttribute("style","color:red");


                var azul = alumnos[i].azul;
                var nodoazul=document.createElement("td"); 
                var textoazul= document.createTextNode(azul); 
                document.getElementById('resultados').appendChild(trp);
                document.getElementById('resultados').appendChild(nodoazul);
                trp.appendChild(nodoazul);
                nodoazul.appendChild(textoazul);
                nodoazul.setAttribute("class","tdT");
                nodoazul.setAttribute("style","color:#102140");
                


                var verde = alumnos[i].verde;
                var nodoverde=document.createElement("td"); 
                var textoverde= document.createTextNode(verde);
                document.getElementById('resultados').appendChild(trp);
                document.getElementById('resultados').appendChild(nodoverde);
                trp.appendChild(nodoverde);
                nodoverde.appendChild(textoverde);
                nodoverde.setAttribute("class","tdT");
                nodoverde.setAttribute("style","color:green");
                



                var amarillo = alumnos[i].amarillo;
                var nodoamarillo=document.createElement("td"); 
                var textoamarillo= document.createTextNode(amarillo); 

                
                document.getElementById('resultados').appendChild(trp);
                document.getElementById('resultados').appendChild(nodoamarillo);
                trp.appendChild(nodoamarillo);
                nodoamarillo.appendChild(textoamarillo);
                nodoamarillo.setAttribute("class","tdT");
                nodoamarillo.setAttribute("style","color:#BF9004");

                
                }

                return alumnos;
}

function generar(){

    var equipos=ordenar();

    console.log(equipos);


    for(var i=0; i<equipos.length;i++){

        var resultado=equipos[i].nombre+"-> Rojo: " + equipos[i].rojo+" Azul: "+equipos[i].azul+" Verde: "+equipos[i].verde+" Amarillo: "+equipos[i].amarillo;

        var nodo=document.createElement("div"); 
        var textoNodo=document.createTextNode(resultado); 
        nodo.appendChild(textoNodo);
        document.getElementById('resultado1').appendChild(nodo);

        nodo.setAttribute("draggable","true");
        nodo.setAttribute("id","alumno"+i);
        nodo.setAttribute("ondragstart","arrastre(this.id);");
        // y desaparece del array
    }


}




      

