<?php
    include_once ('../components/header.php');
?>

    <main class="main_login">
        <div class="login">
            <h2>Iniciar Sesion</h2>
            <form action="programas.php" method="get">
                <div class="usuario">
                    <input type="text" id="usuario" placeholder="Usuario">
                </div>
                <div class="password">
                    <input type="password" id="password" placeholder="Contraseña">
                </div>
                <div class="btn_login">
                    <input type="submit" value="Entrar">
                </div>
            </form>
        </div>
    </main>

<?php
    include_once ('../components/footer.php');
?>