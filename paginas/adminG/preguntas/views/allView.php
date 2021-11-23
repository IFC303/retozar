<a href="../iniAdminGeneral">Volver</a><br><br>

<table border="1" style="text-align: center;">
    <tr>
        <th colspan="3">PREGUNTAS</th>
        <th rowspan="2" style="background:#FFD767">ACCIONES</th>
    </tr>
    <tr>
        <th>Term</th>
        <th>Desc</th>
        <th>Color</th>
    </tr>

    <?php foreach ($preguntas as $pregunta) : ?>
        <tr>
            <td><?php echo $pregunta->term; ?></td>
            <td><?php echo $pregunta->desc; ?></td>
            <td><?php echo $pregunta->color; ?></td>
            <td>
                <a href="<?php echo $pregunta->id; ?>">Ver </a>
                <a href="editar/<?php echo $pregunta->id; ?>">Editar </a>
                <a href="borrar/<?php echo $pregunta->id; ?>">Borrar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table><br>