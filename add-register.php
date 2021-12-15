<?php
    session_start();
    include('includes/header.php');
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Panel de Administrador - Agregar Producto</h4>
                        <a href="index.php" class="btn btn-danger">Regresar al menú principal</a>
                    </div>
                    <div class="card-body">
                        <?php
                            if (isset($_SESSION['status']))
                            {
                                echo "<h4>".$_SESSION['status']."</h4>";
                                unset($_SESSION['status']);
                            }
                        ?>
                        <form enctype="multipart/form-data" action="code.php" method="POST" class="row g-3">
                            <div class="mb-3">
                                <label for="foto" class="form-label">Ingresa la foto del producto: </label>
                                <input class="form-control" type="file" id="foto" name="foto">
                            </div>
                            <div class="col-md-2">
                                <label for="nombre" class="form-label">Nombre del producto: </label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <div class="col-md-4">
                                <label for="linea" class="form-label">Líneas: </label>
                                <select id="linea" name="linea" class="form-select">
                                    <option selected>Seleccionar una línea</option>
                                    <option value="Coorporativa">Coorporativa</option>
                                    <option value="Moda">Moda</option>
                                    <option value="Seguridad-Industrial">Seguridad Industrial</option>
                                    <option value="Hotelería-y-Limpieza">Hotelería y Limpieza</option>
                                    <option value="Salud-y-Alimentacion">Salud y Alimentación</option>
                                    <option value="Publicidad-y-Promociones">Publicidad y Promociones</option>
                                    <option value="Marroqueria">Marroquería</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="presentacion" class="form-label">Presentaciones: </label>
                                <select id="presentacion" name="presentacion" class="form-select">
                                    <option selected>Seleccionar una presentación</option>
                                    <option value="Primaria">Primaria</option>
                                    <option value="Secundaria">Secundaria</option>
                                    <option value="Terciaria">Terciaria</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <button type="submit" name="save_data" class="btn btn-primary">AGREGAR PRODUCTO</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include('includes/footer.php');
?>