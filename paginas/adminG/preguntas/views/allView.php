<div id="contenido">
    <a href="../iniAdminGeneral" class="btnvolver">Volver</a><br><br>

    <table border="1" style="text-align: center;">
        <tr>
            <th>Term</th>
            <th>Desc</th>
            <th>Color</th>
            <th colspan="2">Opciones</th>
        </tr>

        <?php foreach ($preguntas as $pregunta) : ?>
            <tr>
                <td><?php echo $pregunta->term; ?></td>
                <td><?php echo $pregunta->desc; ?></td>
                <td><?php echo $pregunta->color; ?></td>
                <td>
                    <a href="editar/<?php echo $pregunta->id; ?>">
                        <img src="/img/edit.svg">
                    </a>
                </td>
                <td>
                    <a href="borrar/<?php echo $pregunta->id; ?>">
                        <img src="/img/trash.svg">
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>