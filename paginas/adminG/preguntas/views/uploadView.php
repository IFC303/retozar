<a href="../iniAdminGeneral">Volver</a><br><br>

<form action="" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Subir preguntas</legend>
        <input type="file" name="upcsv" accept=".csv" required/>
        <input type="submit" name="subUpload" value="Subir"/>
    </fieldset>
    <?php echo $subUpload; ?>
</form>