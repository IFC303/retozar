<?php
if (session_start()==true) {
    session_destroy();
    echo "Cerrando Sesion";
    header("refresh:1;url=../");
}
