<h3>Form profesor</h3>
    <form action="" method="POST" name="formPro">
            <label for="nombre">Nombre </label><input type="text" name="nombre" id="nombre" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
            <br><br>
            <label for="apellidos">Apellidos </label><input type="text" name="apellidos" id="apellidos" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
            <br><br>
            <label for="emailP">Email </label><input type="text" name="emailP" id="emailP" required>
            <br><br>
            <label for="dniP">DNI </label><input type="text" name="dniP" id="dniP" maxlength="9" required>
            <br><br>
            <label for="password">Password </label><input type="password" name="password" id="password" required>
            <br><br>
            <label for="departamento">Departamento </label><input type="text" name="departamento" id="departamento" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
            <br><br>
            <input type="submit" value="Guardar" onclick="validarform2()">
        
    </form>