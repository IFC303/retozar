
    <h3>Form Clase</h3>
    <form action="" method="POST" name="formAula">
        <label for="centro">Centro</label>
            <select name="departamento" id="departamento">
                <option value=" ">-- Seleccione Centro -- </option>
                <option value="informatica">CPIFP Bajo Aragón</option>
                <option value="automocion">CPIFP Corona de Aragón</option>
                <option value="sanitaria">CPIFP Los Enlaces</option>
            </select>
            <br> <br> 
        Nombre Clase: <input type="text" name="nomClase" id="aula" pattern="[a-zA-Z]{3}[0-9]" required> <br> <br>
        <input type="submit" value="Aceptar" id="boton2">
    </form>