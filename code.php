<?php
    session_start();
    include('conexion.php');

    if (isset($_POST['save_data']))
    {
        $name = $_POST['nombre'];
        $line = $_POST['linea'];
        $presentation = $_POST['presentacion'];

        $target_path = "images/";
        $target_path = $target_path . md5($_FILES['foto']['name']) . ".jpg";
        if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)) {
            echo "El archivo ".  md5( $_FILES['foto']['name']). " ha sido subido";
        } else{
            echo "Ha ocurrido un error, trate de nuevo!";
        }
        $postData = [
            'name' => $name,
            'line' => $line,
            'presentation' => $presentation,
            'photo' => "http://localhost/Proyectos/FIREBASE-PHP/".$target_path
        ];

        $ref_table = "contacts";
        $postRef = $database->getReference($ref_table)->push($postData);
        if ($postRef)
        {
            $_SESSION['status'] = "Producto registrado exitosamente !";
            header("Location: http://localhost/Proyectos/FIREBASE-PHP/add-register.php");
        }
        else
        {
            $_SESSION['status'] = "Producto no pudo ser registrado !";
            header("Location: http://localhost/Proyectos/FIREBASE-PHP/add-register.php");
        }
    }

?>