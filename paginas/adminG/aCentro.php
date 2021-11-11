<h3>Form Centro</h3>
    <form action="" method="POST" name="formCentro">
            <label for="n_centro">Nombre </label><input type="text" name="n_centro" id="n_centro" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
            <br><br>
            <label for="direccion">Direccion </label><input type="text" name="direccion" id="direccion" required>
            <br><br>
            <label for="poblacion">Poblacion </label><input type="text" name="poblacion" id="poblacion" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
            <br><br>
            <label for="c_postal">Codigo Postal </label><input type="text" name="c_postal" id="c_postal" pattern="[0-9]{5}" maxlength="5" required>
            <br><br>
            <label for="provincia">Provincia </label><input type="text" name="provincia" id="provincia" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}">
            <br><br>
            <label for="telefono">Telefono </label><input type="text" name="telefono" id="telefono" pattern="[0-9]{9}" maxlength="9" required>
            <br><br>
            <label for="emailCentro">Email </label><input type="text" name="emailCentro">
            <br><br>
            <input type="submit" value="Guardar" onclick="validarform3()">
    </form>