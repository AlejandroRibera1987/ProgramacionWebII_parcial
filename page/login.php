<?php
    include_once ('../components/header.php');
?>

    <main class="main_login">
    <?php
            if(isset($_GET['error'])){
                echo '<p id="error">Usuario o Contraseña Incorrecta</p>';
            }
        ?>
        <div class="login">
            <h2>Iniciar Sesion</h2>
            <form action="sesion.php" method="post">
                <div class="usuario">
                    <input type="text" id="usuario" name="usuario" placeholder="Usuario">
                </div>
                <div class="password">
                    <input type="password" id="password" name="password" placeholder="Contraseña">
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