<?php
    include('conexion.php');

    $ref_table = "contacts";
    $fetchdata = $database->getReference($ref_table)->getValue();

    if (isset($_GET['accion']))
    {
        $accion = $_GET['accion'];

        switch($accion)
        {
            case 'mostrarTodo':
                $dict = [];
                if ($fetchdata > 0)
                {
                    $account = 0;
                    foreach($fetchdata as $key => $row)
                    {
                            array_push($dict, $row);
                    }
                }
                else
                {
                    echo "<p> No se encontraron registros </p>";
                }
                print json_encode($dict);
        }
    }
?>