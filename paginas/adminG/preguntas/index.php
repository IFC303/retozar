<link rel="stylesheet" href="/paginas/adminG/preguntas/css/style.css">

<body class="page-wrap">
<header class="page-header">
    <?php echo $uri = $_SERVER['REQUEST_URI']; ?>
</header>

<nav class="page-nav">
    <?php echo getcwd(); ?>
</nav>

<main class="page-main">
    <?php
    require_once 'cm/PreguntasController.php';

    // FrontController
    $controller = new PreguntasController();

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

    <article>
        <details>
            <summary>Article</summary>
            test
        </details>
    </article>
</main>

<aside class="page-sidebar">
    Aside
</aside>

<footer class="page-footer">
    Footer
</footer>
</body>