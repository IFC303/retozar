
function mostrar(nombre){
    
    var resu = document.getElementById("result");
    resu.style.visibility = "visible";

        if(nombre=="alumnos"){
            document.getElementById("gAlumnos").style.display="block";
            document.getElementById("resultados").style.display="none";
        }else if(nombre=="resultados"){
            document.getElementById("resultados").style.display="block";
            document.getElementById("gAlumnos").style.display="none";
        }else if (nombre=="profesor"){
            document.getElementById("gProfesor").style.display="block";
            document.getElementById("gCurso").style.display="none";
        }else if (nombre=="curso"){
            document.getElementById("gProfesor").style.display="none";
            document.getElementById("gCurso").style.display="block";
        }else if (nombre=="centro"){
            document.getElementById("gCentro").style.display="block";
            document.getElementById("gTest").style.display="none";
        }else if(nombre=="test"){
            document.getElementById("gCentro").style.display="none";
            document.getElementById("gTest").style.display="block";
        }
 
}