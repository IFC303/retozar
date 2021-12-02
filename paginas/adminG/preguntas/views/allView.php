<div id="contenido" class="page-main__div1">
    <a href=".." class="btnvolver">Volver a adminG</a><br><br>

    <table style="text-align: center;">
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