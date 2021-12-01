<div id="contenido" class="page-main__div1">
    <form action="" method="post" class="styleform">
        <fieldset>
            <legend><h3>NUEVA PREGUNTA</h3></legend>
            <input type="text" name="txtTerm" placeholder="Term" required value="<?php echo $txtTerm; ?>"><br><br>
            <input type="text" name="txtDesc" placeholder="Desc" required value="<?php echo $txtDesc; ?>"><br><br>
            <input type="text" name="txtColor" placeholder="Color" required value="<?php echo $txtColor; ?>"><br><br>

            <input type="submit" name="subInsertar" id="boton1" value="Insertar">
            <?php echo $subInsertar; ?>
        </fieldset>
    </form>

    <a href="../iniAdminGeneral" class="btnvolver">Volver</a>
</div>