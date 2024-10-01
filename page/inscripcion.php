<?php
    include_once ('../components/header.php');
?>
    
    <main>
        <div class="main_inscripcion">
            <form action="programas.php" action="post" anctype="multipart/form-data">
                <div class="titulo_form">
                    <h2>Inscribite</h2>
                </div>
                <div class="fila_form">
                    <div class="nombre">
                        <label for="nombre">Nombre: <span>*</span></label>
                        <input type="text" id="nombre" required>
                    </div>
                    <div class="apellido">
                        <label for="apellido">Apellido: <span>*</span></label>
                        <input type="text" id="apellido" required>
                    </div>
                </div>
                <div class="email">
                    <label for="email">Email: <span>*</span></label>
                    <input type="email" id="email" required>
                </div>
                <div class="fila_form">                
                    <div class="telefono">
                        <label for="telefono">Telefono</label>
                        <input type="number" id="telefono">
                    </div>
                    <div class="cursos_form">
                        <label for="cursos">Cursos <span>*</span></label>
                        <select name="cursos" id="cursos">
                            <option value="">Elejir Curso</option>
                            <option value="marketin">Marketin</option>
                            <option value="liderazgo">Liderazgo</option>
                            <option value="gestion">Gestion</option>
                            <option value="negociacion">Ventas y Negociacion</option>
                        </select>
                    </div>
                </div>
                <div class="img_dni">
                    <label for="img_dni">Foto de DNI</label>
                    <input type="file" accept=".jpg,.jpeg,.png,.pdf">
                </div>
                <div class="forma_pago">
                    <p>Forma de Pago</p>
                    <div class="formas">
                        <div class="efectivo">
                            <label for="efectivo">Efectivo</label>
                            <input type="radio" id="efectivo" name="efectivo">
                        </div>
                        <div class="tarjeta">
                            <label for="tarjeta">Tarjeta</label>
                            <input type="radio" id="tarjeta" name="tarjeta">
                        </div>
                        <div class="mercadopago">
                            <label for="mercadopago">Mercado Pago</label>
                            <input type="radio" id="mercadopago" name="mercadopago">
                        </div>
                    </div>
                </div>
                    <div class="comentarios">
                        <label for="comentarios">Comentarios adicionales</label>
                        <textarea name="comentarios" id="comentarios"></textarea>
                    </div>
                    <div class="btn_inscripcion">
                        <input type="submit" value="Inscribirse">
                    </div>
            </form>
            <div class="img_contacto">
                <figure>
                    <img src="../img/inscripcion.jpg" alt="Imagen de inscripcion">
                </figure>
            </div>
        </div>
    </main>

<?php
    include_once ('../components/footer.php');
?>