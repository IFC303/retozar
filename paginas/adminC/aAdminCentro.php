<form action="" method="POST">
        <fieldset>
            <legend>Alta administrador de centro</legend>

                <label for="centro">Centro </label>
                <select>
                    <option>-- Selecciona un centro --</option>
                    <optgroup label="Huesca">
                        <option>Aaaaa de Sabiñanigo</option>
                    </optgroup>
                    <optgroup label="Zaragoza">
                        <option>Aaaaa de Utebo</option>
                    </optgroup>
                    <optgroup label="Teruel">
                        <option>Aaaaa de Alcañiz</option>
                    </optgroup>
                </select>
                <br><br>
                <label for="nombre">Nombre </label><input type="text" name="nombre" id="nombre" title="Solo validas letras" required>
                <br><br>
                <label for="apellidos">Apellidos </label><input type="text" name="apellidos" id="apellidos" title="Solo validas letras" required>
                <br><br>
                <label for="email">Email </label><input type="text" name="email" id="email" required>
                <br><br>
                <label for="dni">DNI </label><input type="text" name="dni" id="dni" maxlength="9" required>
                <br><br>
                <label for="password">Password </label><input type="password" name="password" id="password" equired>
                <br><br>
                <label for="departamento">Departamento </label><input type="text" name="departamento" id="departamento" required>
                <br><br>
                <input type="submit" value="Guardar">

        </fieldset>
    </form>