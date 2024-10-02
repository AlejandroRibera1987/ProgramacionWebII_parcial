<?php

include_once ('../components/header.php');
    $usuario = "admin";
    $pass = 12345;

            if($usuario == $_POST['usuario'] && $pass == $_POST['password']) {
                ?>

                <div class="login_correcto">
                    <h2>Bienvenido</h2>
                    <p><?php echo $usuario ?></p>
                </div>

                <?php
            } else {
                header("location: login.php?error=ok");
            }

include_once ('../components/footer.php');
?>