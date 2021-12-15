<?php
    include('includes/header.php');
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Panel de Administrador - Lis Fashion</h4>
                        <a href="add-register.php" class="btn btn-primary">Agregar Producto</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="table-register">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Foto</th>
                                    <th>Nombre</th>
                                    <th>Línea</th>
                                    <th>Presentación</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include('conexion.php');

                                    $ref_table = "contacts";
                                    $fetchdata = $database->getReference($ref_table)->getValue();

                                    if ($fetchdata > 0)
                                    {
                                        $account = 0;
                                        foreach($fetchdata as $key => $row)
                                        {
                                            $account++;
                                            ?>
                                            <tr>
                                                <td><?= $account ?></td>
                                                <td>
                                                    <img src="<?= $row['photo']; ?>" width="100" height="100" alt="">
                                                </td>
                                                <td><?= $row['name']; ?></td>
                                                <td><?= $row['line']; ?></td>
                                                <td><?= $row['presentation']; ?></td>
                                                <td>
                                                    <a href="" class="btn btn-success">Editar</a>
                                                    <a href="" class="btn btn-danger">Eliminar</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="6">No se encontraron registros</td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include('includes/footer.php');
?>
