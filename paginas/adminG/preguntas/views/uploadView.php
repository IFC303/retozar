<div id="contenido" class="page-main__div1">
    <form action="" method="post" class="styleform" enctype="multipart/form-data">
        <fieldset>
            <legend><h3>SUBIR PREGUNTA</h3></legend>

            <label for="file-upload" class="custom-file-upload">
                <i class="fa fa-cloud-upload"></i> Subir
            </label>
            <input id="file-upload" type="file" name="upcsv" accept=".csv" required>

            <input type="submit" name="subUpload" id="boton1">
        </fieldset>
        <?php echo $subUpload; ?>
    </form>

    <a href=".." class="btnvolver">Volver</a><br><br>
</div>