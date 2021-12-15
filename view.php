<?php
    include('includes/header.php');
?>
    <div class="row">
        <ol class="menu">
            <li><span class="item-filtro DroidSerif-Regular">All</span></li>
            <li><span class="item-filtro DroidSerif-Regular">Corporativa</span></li>
            <li><span class="item-filtro DroidSerif-Regular">Moda</span></li>
            <li><span class="item-filtro DroidSerif-Regular">Deportiva</span></li>
            <li><span class="item-filtro DroidSerif-Regular">Seguridad industrial</span></li>
            <li><span class="item-filtro DroidSerif-Regular">Hoteleria y limpieza</span></li>
            <li><span class="item-filtro DroidSerif-Regular">Salud y alimenticia</span></li>
        </ol>
    </div>

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