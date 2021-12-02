<div id="contenido" class="page-main__div1">
    <form action="" method="post" class="styleform">
        <label for="idTerm">Nuevo term:</label>
        <input type="text" name="txtTerm" id="idTerm" value="<?php echo $pregunta->term; ?>"><br><br>

        <label for="idDesc">Nueva desc:</label>
        <input type="text" name="txtDesc" id="idDesc" value="<?php echo $pregunta->desc; ?>"><br><br>

        <label for="idColor">Nuevo color:</label>
        <input type="text" name="txtColor" id="idColor" value="<?php echo $pregunta->color; ?>"><br><br>

        <input type="submit" name="subModificar" value="Modificar" id="boton1">
    </form>
</div>