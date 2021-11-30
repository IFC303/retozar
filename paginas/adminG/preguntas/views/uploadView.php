<div id="contenido">
    <h3>SUBIR PREGUNTA</h3>

    <form action="" method="post" class="styleform" enctype="multipart/form-data">
        <fieldset>
            <legend>Subir preguntas</legend>
            <input type="file" name="upcsv" accept=".csv" required>
            <input type="submit" name="subUpload">
        </fieldset>
        <?php echo $subUpload; ?>
    </form>

    <a href="../iniAdminGeneral" class="btnvolver">Volver</a><br><br>
</div>
