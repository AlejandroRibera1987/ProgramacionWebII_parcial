<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$dni = $_POST['dni'];
$curso = $_POST['cursos'];
$formaPagos = $_POST['forma_pago'];
$comentarios = $_POST['comentarios'];

$temporal = $_FILES ['img_dni']['tmp_name'];
$nombreImg = $apellido . "_" . $dni .".jpg";

move_uploaded_file($temporal, "../img_formulario/$nombreImg");

include_once ('../components/header.php');

?>

    <main>
        <div class="datos_form">
            <table>
                <caption>Datos Enviados por Formulario</caption>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>DNI</th>
                        <th>Curso</th>
                        <th>Forma de Pago</th>
                        <th>Comentario</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $nombre ?></td>
                        <td><?php echo $apellido ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $telefono ?></td>
                        <td><?php echo $dni ?></td>
                        <td><?php echo $curso ?></td>
                        <td><?php echo $formaPagos ?></td>
                        <td><?php echo $comentarios ?></td>
                        <td>
                            <figure>
                                <img src="../img_formulario/<?php echo $apellido ?>_<?php echo $dni ?>.jpg" alt="img enviada por <?php echo $nombre?>">
                            </figure>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="btn_confirmacion">
                 <p>Si los datos son correctos precione Aceptar de lo contrario Cancelar</p>
                <a href="inicio.php">Aceptar</a>
                <a href="inscripcion.php">Cancelar</a>
            </div>
        </div>
    </main>


<?php

include_once ('../components/footer.php');

?>