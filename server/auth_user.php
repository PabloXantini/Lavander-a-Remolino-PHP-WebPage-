<?php
    require "db.php";
    $s_email = addslashes($_POST["EMAIL"]);
    $s_password = addslashes($_POST["PASSWORD"]);
    $next = "../public/app/dashboard.php";
    $back = "../public/login.php";
    if(
        empty($s_email) ||
        empty($s_password)
    ){
        echo
        '<script>
            alert("Por favor, complete todos los campos obligatorios");
            location.href="'.$back.'";
        </script>';
        exit();
    }
    if( 
        strlen($s_email) > 64 || 
        strlen($s_password) > 64
    ){
    echo 
        '<script>
            alert("Uno o más campos exceden la longitud máxima permitida");
            location.href="'.$back.'";
        </script>';
        exit();
    }
    $check_user = "SELECT * FROM clientes INNER JOIN roles ON clientes.id_rol=roles.id_rol WHERE email = '$s_email' AND contrasenia = '$s_password'";
    $query = mysqli_query($CONNECTION, $check_user);

    if(mysqli_num_rows($query) == 1){
        echo 
        '<script>
            alert("Inicio de sesión exitoso");
        </script>';
        $user_row = mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['auth_user']="yes";
        $_SESSION['id_user']=$user_row['id_cliente'];
        $_SESSION['firstname']=$user_row['nombres'];
        $_SESSION['lastname']=$user_row['apellidos'];
        $_SESSION['privileges']=$user_row['nombre'];
        header("Location:".$next);
    } else {
        echo 
        '<script>
            alert("Error de inicio de sesión, por favor verfique sus credenciales");
            location.href="'.$back.'?erroruser=true";
        </script>';
    }
?>