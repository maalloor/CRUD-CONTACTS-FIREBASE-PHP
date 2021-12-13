<?php
    include('includes/header.php');
?>
    <div class="container my-5">
        <div class="row row-cols-1 row-cols-md-4 g-3">
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
                                <div class="col">
                                    <div class="card card-view">
                                        <img class="img-view-card" src="<?= $row['photo']; ?>" width="" alt="">
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                                <p>No found records</p>
                            <?php
                        }
                    ?>
        </div>
    </div>
<?php
    include('includes/footer.php');
?>