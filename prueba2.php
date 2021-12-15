<?php
    include('conexion.php');

    $ref_table = "contacts";
    $fetchdata = $database->getReference($ref_table)->getValue();
    $dict = [];
    if ($fetchdata > 0)
    {
        $account = 0;
        foreach($fetchdata as $key => $row)
        {
            if ($row['firstname']=="Manuel" || $row['firstname']=="Libro Java")
                $dict[$key] = $row;
        }
    }
    else
    {
        echo "<p> No se encontraron registros </p>";
    }
    print json_encode($dict);
?>