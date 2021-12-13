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

        $target_path = "images/";
        $target_path = $target_path . md5($_FILES['foto']['name']) . ".jpg";
        if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)) {
            echo "El archivo ".  md5( $_FILES['foto']['name']). " ha sido subido";
        } else{
            echo "Ha ocurrido un error, trate de nuevo!";
        }
        $postData = [
            'firstname' => $first_name,
            'lastname' => $last_name,
            'address' => $address,
            'city' => $city,
            'gender' => $gender,
            'zip' => $zip,
            'photo' => "http://localhost/Proyectos/FIREBASE-PHP/".$target_path
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