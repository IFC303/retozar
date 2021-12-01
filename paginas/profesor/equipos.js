function ordenar(name,alumnos){


  if(document.getElementById("botones")==null){ 

                var botones=document.createElement("div");
                botones.setAttribute("id","botones"); 
                document.getElementById("totales").appendChild(botones);

                var rojo=document.createElement("button");
                rojo.setAttribute("style","background-color: red;height:40px;width:40px;")
                rojo.setAttribute("id","rojo");
                rojo.setAttribute("name","rojo");
                rojo.setAttribute("onclick","ordenar(this.name,alumnos);");
                document.getElementById('botones').appendChild(rojo);
                 
                var azul=document.createElement("button");
                azul.setAttribute("style","background-color: blue;height:40px;width:40px;")
                azul.setAttribute("id","azul");
                azul.setAttribute("name","azul");
                azul.setAttribute("onclick","ordenar(this.name,alumnos);");
                document.getElementById('botones').appendChild(azul);
            
                var verde=document.createElement("button");
                verde.setAttribute("style","background-color: green;height:40px;width:40px;")
                verde.setAttribute("id","verde");
                verde.setAttribute("name","verde");
                verde.setAttribute("onclick","ordenar(this.name,alumnos);");
                document.getElementById('botones').appendChild(verde);
                
            
                var amarillo=document.createElement("button");
                amarillo.setAttribute("style","background-color: yellow;height:40px;width:40px;")
                amarillo.setAttribute("id","amarillo");
                amarillo.setAttribute("name","amarillo");
                amarillo.setAttribute("onclick","ordenar(this.name,alumnos);");
                document.getElementById('botones').appendChild(amarillo);


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
                var nodonom = document.createElement("tr");
                var nodonombre=document.createElement("td"); 
                var textonombre= document.createTextNode(nombre); 
                nodonombre.appendChild(textonombre);
                document.getElementById('resultados').appendChild(nodonom);
                document.getElementById('resultados').appendChild(nodonombre);


                var apellidos = alumnos[i].apellidos;
                var nodoapellidos=document.createElement("td"); 
                var textoapellidos= document.createTextNode(apellidos); 
                nodoapellidos.appendChild(textoapellidos);
                document.getElementById('resultados').appendChild(nodoapellidos);

                var rojo = alumnos[i].rojo;
                var nodorojo=document.createElement("td"); 
                var textorojo= document.createTextNode(rojo); 
                nodorojo.appendChild(textorojo);
                document.getElementById('resultados').appendChild(nodorojo);

                var azul = alumnos[i].azul;
                var nodoazul=document.createElement("td"); 
                var textoazul= document.createTextNode(azul); 
                nodoazul.appendChild(textoazul);
                document.getElementById('resultados').appendChild(nodoazul);

                var verde = alumnos[i].verde;
                var nodoverde=document.createElement("td"); 
                var textoverde= document.createTextNode(verde); 
                nodoverde.appendChild(textoverde);
                document.getElementById('resultados').appendChild(nodoverde);

                var amarillo = alumnos[i].amarillo;
                var nodoamarillo=document.createElement("td"); 
                var textoamarillo= document.createTextNode(amarillo); 
                nodoamarillo.appendChild(textoamarillo);
                document.getElementById('resultados').appendChild(nodoamarillo);
                
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




      

