<?php
    session_start();
    include('includes/header.php');
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>FIREBASE CRUD PHP - ADD OR INSERT NEW REGISTER</h4>
                        <a href="index.php" class="btn btn-danger">BACK</a>
                    </div>
                    <div class="card-body">
                        <?php
                            if (isset($_SESSION['status']))
                            {
                                echo "<h4>".$_SESSION['status']."</h4>";
                                unset($_SESSION['status']);
                            }
                        ?>
                        <form action="code.php" method="POST" class="row g-3">
                            <div class="col-md-6">
                                <label for="nombre" class="form-label">First Name: </label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                            </div>
                            <div class="col-md-6">
                                <label for="apellido" class="form-label">Last Name: </label>
                                <input type="text" class="form-control" id="apellido" name="apellido">
                            </div>
                            <div class="col-12">
                                <label for="direccion" class="form-label">Address: </label>
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="1234 Main St">
                            </div>
                            <div class="col-md-6">
                                <label for="ciudad" class="form-label">City: </label>
                                <input type="text" class="form-control" id="ciudad" name="ciudad">
                            </div>
                            <div class="col-md-4">
                                <label for="genero" class="form-label">Gender: </label>
                                <select id="genero" name="genero" class="form-select">
                                    <option selected>Select a gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="codigozip" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="codigozip" name="codigozip">
                            </div>
                            <div class="col-12">
                                <button type="submit" name="save_data" class="btn btn-primary">ADD REGISTER</button>
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