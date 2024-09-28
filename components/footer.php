<?php
    $menuFooter = array();
    $menuRedes = array();

    $menuFooter['Nuestra historia'] = '../page/acercade.php';
    $menuFooter['Curso'] = '../page/cursos.php';
    $menuFooter['Contactenos'] = '../page/contacto.php';

    $menuRedes['Instagram'] = 'https://www.instagram.com/';
    $menuRedes['Facebook'] = 'https://www.facebook.com/?locale=es_LA';
    $menuRedes['Tiwtter'] = 'https://x.com/?lang=es';
?>


<footer>
    <div class="footer_general">
    <div class="suscribite">
        <div class="titulo_suscribite">
            <h2>Suscrbite a nuestro Newsletter</h2>
            <p>Regístrate con tu dirección de correo electrónico para recibir noticias y actualizaciones.</p>
        </div>
        <form action="#" method="post" class="form_suscribite">
            <input type="mail" id="mail" placeholder="Ingrese Mail" class="casilla_mail">
            <input type="button" value="Suscribirse" class="btn_suscribite">
        </form>
    </div>

    <div class="menu_footer">
        <div class="acercade">
            <div class="titulo_menuFooter">
                <h2>Conosenos</h2>
            </div>
            <?php
                echo "<ul>";
                foreach($menuFooter as $link => $url){
                    echo "<li><a href='$url'>$link</a></li>";
                }
                echo "</ul>";
            ?>
        </div>
        <div class="redes">
            <div class="titulo_redes">
                <h2>Redes Sociales</h2>
            </div>
            <?php
                echo "<ul>";
                foreach($menuRedes as $link => $url){
                    echo "<li><a href='$url'>$link</a></li>";
                }
                echo "</ul>";
            ?>
        </div>
    </div>
    </div>
    <div class="logo_footer">
        <h2>Business Boosters</h2>
    </div>
    <div class="derechos_reservados">
        <p>Todos los derechos Reservados a <span>@AlejandroRibera</span></p>
    </div>
</footer>

</body>
</html>