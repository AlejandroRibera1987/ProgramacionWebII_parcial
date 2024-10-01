<?php

    $menu = array();
    $menuLogin = array();

    $menu['Acerca de'] = '../page/acercade.php';
    //$menu['Programas'] = '../page/programas.php';
    $menu['Cursos'] = '../page/cursos.php';
    $menu['Inscripcion'] = '../page/inscripcion.php';

    $menuLogin['Iniciar Sesión'] = '../page/login.php';
    $menuLogin['Unirme ahora'] = '../page/registro.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Dots:wght@400..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding:wght@400;700&display=swap" rel="stylesheet">
    <title>Business Boosters</title>
</head>
<body>
    <header>
        <div>
            <h1><a href="../page/inicio.php" class="logo">Business Boosters</a></h1>
        </div>
        <div>
            <nav class="menu">
                <?php
                    echo "<ul>";
                    foreach($menu as $link => $url){
                        echo "<li><a href='$url'>$link</a></li>";
                    }
                    echo "</ul>";
                ?>
            </nav>
        </div>
        <div class="menu_login">
            <ul>
                <li><a href="../page/login.php">Iniciar Sesión</a></li>
                <li><a href="https://www.instagram.com/?hl=es-la"><figure><img src="../img/instagram.png" alt="Instagram" class="redes_sociales"></figure></a></li>
                <li><a href="https://www.facebook.com/?locale=es_LA"><figure><img src="../img/facebook.png" alt="Facebook" class="redes_sociales"></figure></a></li>
                <li><a href="https://x.com/?lang=es&mx=2"><figure><img src="../img/social-media.png" alt="Twitter" class="redes_sociales"></figure></a></li>
            </ul>
        </div>
    </header>