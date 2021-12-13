<?php
    include('includes/header.php');
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>FIREBASE CRUD PHP</h4>
                        <a href="add-register.php" class="btn btn-primary">ADD REGISTER</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="table-register">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Photo</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Gender</th>
                                    <th>ZIP</th>
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
                                                    <img src="<?= $row['photo']; ?>" width="100" alt="">
                                                </td>
                                                <td><?= $row['firstname']; ?></td>
                                                <td><?= $row['lastname']; ?></td>
                                                <td><?= $row['address']; ?></td>
                                                <td><?= $row['city']; ?></td>
                                                <td><?= $row['gender']; ?></td>
                                                <td><?= $row['zip']; ?></td>
                                                <td>
                                                    <a href="" class="btn btn-success">Edit</a>
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="6">No Record Found</td>
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
    <script>
        var table = document.querySelector("#table-register");
        var dataTable = new DataTable(table);
    </script>
<?php
    include('includes/footer.php');
?>
