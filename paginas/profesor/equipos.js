


    function ordenar(name,alumnos,numAlumnos){


             if(document.getElementById("botones")==null){ 

                        var botones=document.createElement("div");
                        botones.setAttribute("id","botones"); 
                        document.getElementById("totales").appendChild(botones);

                        //TEXTO
                        var texto = "Ordenar alumnos por color ";
                        var parafo=document.createElement("p");
                        parafo.setAttribute("id","parrafo");
                        parafo.setAttribute("class","margen");
                        var txt = document.createTextNode(texto);
                        document.getElementById("botones").appendChild(parafo);
                        parafo.appendChild(txt);
                    
                        //BOTON ROJO
                        var rojo=document.createElement("button");
                        rojo.setAttribute("style","background-color: red;height:40px;width:40px; border: 2px solid;")
                        rojo.setAttribute("id","rojo");
                        rojo.setAttribute("name","rojo");
                        rojo.setAttribute("onclick","ordenar(this.name,alumnos);");
                        document.getElementById('botones').appendChild(rojo);
                        rojo.setAttribute("class","margen");
                        
                        //BOTON AZUL
                        var azul=document.createElement("button");
                        azul.setAttribute("style","background-color: blue;height:40px;width:40px; border: 2px solid;")
                        azul.setAttribute("id","azul");
                        azul.setAttribute("name","azul");
                        azul.setAttribute("onclick","ordenar(this.name,alumnos);");
                        document.getElementById('botones').appendChild(azul);
                        azul.setAttribute("class","margen");
                    
                        //BOTON VERDE
                        var verde=document.createElement("button");
                        verde.setAttribute("style","background-color: green;height:40px;width:40px; border: 2px solid;")
                        verde.setAttribute("id","verde");
                        verde.setAttribute("name","verde");
                        verde.setAttribute("onclick","ordenar(this.name,alumnos);");
                        document.getElementById('botones').appendChild(verde);
                        verde.setAttribute("class","margen");
                        
                        //VBOTON AMARILLO
                        var amarillo=document.createElement("button");
                        amarillo.setAttribute("style","background-color: yellow;height:40px;width:40px; border: 2px solid;")
                        amarillo.setAttribute("id","amarillo");
                        amarillo.setAttribute("name","amarillo");
                        amarillo.setAttribute("onclick","ordenar(this.name,alumnos);");
                        document.getElementById('botones').appendChild(amarillo);
                        amarillo.setAttribute("class","margen");

                        //BOTON GENERAR GRUPOS
                        var boton = document.createElement("input");
                        boton.setAttribute("type","submit");
                        boton.setAttribute("value","Generar Grupo");
                        boton.setAttribute("name","generarG");
                        boton.setAttribute("id","boton1");
                        boton.setAttribute("onclick","generar(numAlumnos,alumnos);");
                        document.getElementById("botones").appendChild(boton);

            }  
    

    
            //CREACION DE TABLA (cabecera)
            var resultados=document.createElement("table");
            resultados.setAttribute("id","resultados");
            document.getElementById("totales").appendChild(resultados);

    
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



            //ORDENA POR COLOR y MUESTRA RESULTADOS
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

                return alumnos,numAlumnos;
    }




    function generar(numAlumnos,alumnos){

                    var numEquiposCuatro=0;
                    var numEquiposTres=0;
                    var suma=0;
                    var numAlumnos=parseInt(numAlumnos);
                    var numAlumnos= numAlumnos;
                    console.log(numAlumnos);


                    
                    if(numAlumnos%4==0){
                            numEquiposCuatro=numAlumnos/4;
                            numEquiposTres=0;
                            suma=numEquiposCuatro+numEquiposTres;
                            
                            var equipos = new Array(suma);     
                                         
                            for (var i = 0; i < equipos.length; i++) {
                              equipos[i] = new Array();
                            }
                            
                            console.log(equipos);

                    }else if (numAlumnos%4==1){
                            numEquiposCuatro=((numAlumnos-9)/4);
                            numEquiposTres=3;
                            suma=numEquiposCuatro+numEquiposTres;

                            var equipos = new Array(numEquiposTres); 

                            for (var i = 0; i < equipos.length; i++) {
                                equipos[i] = new Array();
                              }

                            for (var i=0; i<numEquiposCuatro;i++){
                                equipos.push(new Array());
                            }

                            console.log(equipos);
                            
                    }else if (numAlumnos%4==2){
                            numEquiposCuatro=((numAlumnos-6)/4);
                            numEquiposTres=2;
                            suma=numEquiposCuatro+numEquiposTres;

                            var equipos = new Array(numEquiposTres); 

                            for (var i = 0; i < equipos.length; i++) {
                                equipos[i] = new Array();
                              }

                            for (var i=0; i<numEquiposCuatro;i++){
                                equipos.push(new Array());
                            }
                
                            console.log(equipos);
                            
                    }else if (numAlumnos%4==3){
                            numEquiposCuatro=((numAlumnos-3)/4);
                            numEquiposTres=1;
                            suma=numEquiposCuatro+numEquiposTres;     
                            
                            var equipos = new Array(numEquiposTres); 

                            for (var i = 0; i < equipos.length; i++) {
                                equipos[i] = new Array();
                              }

                            for (var i=0; i<numEquiposCuatro;i++){
                                equipos.push(new Array());
                            }
                              
                              console.log(equipos);
                            
                    } 


                    

              /*       var equipos=alumnos;
                    
                    console.log(equipos);

                         
                    //ALUMNOS CON UN COLOR DEFINIDO
                    var azules = equipos.filter(function(element){return element.nombre == "azul";});
                    var rojos = equipos.filter(function(element){return element.nombre == "rojo";});
                    var verdes = equipos.filter(function(element){return element.nombre == "verde";});
                    var amarillos = equipos.filter(function(element){return element.nombre == "amarillo";});

                    //ALUMNOS CON 2 COLORES
                    var rv = equipos.filter(function(element){return element.nombre == "rv";});
                    var ra = equipos.filter(function(element){return element.nombre == "ra";});
                    var rz = equipos.filter(function(element){return element.nombre == "rz";});
                    var vz = equipos.filter(function(element){return element.nombre == "vz";});
                    var va = equipos.filter(function(element){return element.nombre == "va";});
                    var az = equipos.filter(function(element){return element.nombre == "az";});

                    //ALUMNOS CON 3 COLORES
                    var rav = equipos.filter(function(element){return element.nombre == "rav";});
                    var rvz = equipos.filter(function(element){return element.nombre == "rvz";});
                    var raz = equipos.filter(function(element){return element.nombre == "raz";});
                    var vza = equipos.filter(function(element){return element.nombre == "vza";});

                    //ALUMNOS CON 4 COLORES
                    var razv = equipos.filter(function(element){return element.nombre == "razv";});



                    console.log(amarillos);
                    console.log(verdes);
                    console.log(rojos);
                    console.log(azul);
                    console.log(rv);
                    console.log(ra);
                    console.log(rz);
                    console.log(vz);
                    console.log(va);
                    console.log(az);
                    console.log(rav);
                    console.log(rvz);
                    console.log(raz);
                    console.log(vza);
                    console.log(razv); */
           
    

    /*   for(var i=0; i<equipos.length;i++){

            var resultado=equipos[i].nombre+"-> Rojo: " + equipos[i].rojo+" Azul: "+equipos[i].azul+" Verde: "+equipos[i].verde+" Amarillo: "+equipos[i].amarillo;

            var nodo=document.createElement("div"); 
            var textoNodo=document.createTextNode(resultado); 
            nodo.appendChild(textoNodo);
            document.getElementById('resultado1').appendChild(nodo);

            nodo.setAttribute("draggable","true");
            nodo.setAttribute("id","alumno"+i);
            nodo.setAttribute("ondragstart","arrastre(this.id);");
            y desaparece del array
        } */


    }




      

