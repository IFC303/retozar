<html lang="es">
<link rel="stylesheet" href="/paginas/adminG/preguntas/css/style.css">

<body class="page-wrap">
    <header class="page-header">
        <div id="texto">
            <p id="t1"><a href="/" class="title">Disc Aragón</a></p>
            <p id="t2">Test para formación de equipos de trabajo</p>
        </div>
    </header>

    <nav class="page-nav">
        <?php if (preg_match('~[0-9]+~', $_SERVER['REQUEST_URI'])) include 'views/menu1View.php';
        else include 'views/menu2View.php'; ?>
    </nav>

    <main class="page-main">
        <?php
        require_once 'cm/PreguntasController.php';
        $controller = new PreguntasController();

        // FrontController
        $uri = $_SERVER['REQUEST_URI'];
        if ($uri == '/paginas/adminG/preguntas/') {
            $controller->all();
        } elseif (strstr($uri, '/subir')) {
            $controller->upload();
        } elseif (strstr($uri, '/nuevo')) {
            $controller->create();
        } elseif (strstr($uri, '/editar')) {
            $controller->update();
        } elseif (strstr($uri, '/borrar')) {
            $controller->delete();
        } elseif (preg_match('~[0-9]+~', $uri)) {
            $controller->read();
        }
        ?>
    </main>

    <footer class="page-footer">
        <div id="img1">
            <picture>
                <source media="(min-width:650px)" srcset="/img/logocpfip.png">
                <source media="(min-width:465px)" srcset="/img/logocpfip_bkzdvb_c_scale,w_200.png">
                <img src="/img/logocpfip_bkzdvb_c_scale,w_200.png" alt="Flowers" style="width:auto;">
            </picture>
        </div>
        <div id="img2">
            <img src="/img/logoSBR.png" alt="logo_SBR" width="95px" height="95px">
        </div>
    </footer>
</body>

</html>