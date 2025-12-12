<?php
    require "../db.php";
    $first_name = $_POST["FIRSTNAME"];
    $last_name = $_POST["LASTNAME"];
    $new_email = $_POST["EMAIL"];
    $new_password = $_POST["PASSWORD"];
    $next = "../../public/login.php";
    $back = "../../public/register.php";
    if(
        empty($first_name) ||
        empty($last_name) ||
        empty($new_email) ||
        empty($new_password)
    ){
        echo
        '<script>
            alert("Por favor, complete todos los campos obligatorios");
            location.href="'.$back.'";
        </script>';
        exit();
    }
    if(
        strlen($first_name) > 64 || 
        strlen($last_name) > 64 || 
        strlen($new_email) > 64 || 
        strlen($new_password) > 64
    ){
    echo 
        '<script>
            alert("Uno o más campos exceden la longitud máxima permitida");
            location.href="'.$back.'";
        </script>';
        exit();
    }
    $check_user = "SELECT * FROM clientes WHERE email = '$new_email'";
    $check_query = mysqli_query($CONNECTION, $check_user);

    if(mysqli_num_rows($check_query) > 0){
        echo 
        '<script>
            alert("Un usuario ya está registrado con ese correo, por favor elija otro e intente de nuevo");
            location.href="'.$back.'";
            </script>';
        exit();
    }

    $add_user = "INSERT INTO clientes (id_rol, nombres, apellidos, email, contrasenia) VALUES (
        '2',
        '$first_name',
        '$last_name',
        '$new_email',
        '$new_password'
    )";
    $query = mysqli_query($CONNECTION, $add_user);
    if ($query) {
        echo 
        '<script>
            alert("Registro exitoso");
            location.href="'.$next.'";
        </script>';
    } else {
        echo 
        '<script>
            alert("Error al registrarse, por favor intente de nuevo");
            location.href="'.$back.'";
        </script>';
    }
?>