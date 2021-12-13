<?php
    session_start();
    include('conexion.php');

    if (isset($_POST['save_data']))
    {
        $first_name = $_POST['nombre'];
        $last_name = $_POST['apellido'];
        $address = $_POST['direccion'];
        $city = $_POST['ciudad'];
        $gender = $_POST['genero'];
        $zip = $_POST['codigozip'];

        $postData = [
            'firstname' => $first_name,
            'lastname' => $last_name,
            'address' => $address,
            'city' => $city,
            'gender' => $gender,
            'zip' => $zip
        ];

        $ref_table = "contacts";

        $postRef = $database->getReference($ref_table)->push($postData);

        if ($postRef)
        {
            $_SESSION['status'] = "Data Inserted Successfully!";
            header("Location: http://localhost/Proyectos/FIREBASE-PHP/add-register.php");
        }
        else
        {
            $_SESSION['status'] = "Data Not Inserted !";
            header("Location: http://localhost/Proyectos/FIREBASE-PHP/add-register.php");
        }
    }

?>