<a href="../iniAdminGeneral.php">Volver</a><br><br>

<form action="" method="post">

    <label for="idTerm">Term:</label>
    <input type="text" name="txtTerm" id="idTerm" value="<?php echo $txtTerm; ?>"><br><br>

    <label for="idDesc">Desc:</label>
    <input type="text" name="txtDesc" id="idDesc" value="<?php echo $txtDesc; ?>"><br><br>

    <label for="idColor">Color:</label>
    <input type="text" name="txtColor" id="idColor" value="<?php echo $txtColor; ?>"><br><br>

    <input type="submit" name="subInsertar" value="Insertar">

    <?php echo $subInsertar; ?>
</form>