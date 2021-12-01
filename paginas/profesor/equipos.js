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

                

  }  
    

    
    var resultados=document.createElement("div");
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

                var resultado=alumnos[i].nombre+ " "+alumnos[i].apellidos +"-> Rojo: " + alumnos[i].rojo+" Azul: "+alumnos[i].azul+" Verde: "+alumnos[i].verde+" Amarillo: "+alumnos[i].amarillo;     
                var nodo=document.createElement("div"); 
                nodo.setAttribute("id","alumno"+i);
                var textoNodo=document.createTextNode(resultado); 
                nodo.appendChild(textoNodo);
                document.getElementById('resultados').appendChild(nodo);


                }

                return alumnos;

     

    



}




      

