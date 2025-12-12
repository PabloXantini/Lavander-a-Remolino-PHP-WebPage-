<?php 
    include __DIR__."/../db.php";
    session_start();
    $req_user = $_SESSION['id_user'];
    $machine_selected = $_POST['MACHINES'];
    $date = $_POST['DATE'];
    $cycles = $_POST['CYCLES'];
    $sch_init = $_POST['SCH_INIT'];
    $next = "../../public/app/dashboard.php";
    $back = "../../public/app/dashboard/view/wash.php";
    if(
        empty($machine_selected) ||
        empty($date) ||
        empty($cycles) ||
        empty($sch_init)
    ){
        echo
        '<script>
            alert("Por favor, complete todos los campos obligatorios");
            location.href="'.$back.'";
        </script>';
        exit();
    }

    $get_machine = "SELECT * FROM equipos WHERE lugar = '$machine_selected'";
    $result = mysqli_query($CONNECTION, $get_machine);

    $first = mysqli_fetch_assoc($result);
    
    $add_reserve = "INSERT INTO reservas (id_cliente, id_equipo, fecha, ciclos, hora_inicio) VALUES (
        '$req_user',
        '".$first['id_equipo']."',
        '$date',
        '$cycles',
        '$sch_init'
    )";
    $query = mysqli_query($CONNECTION, $add_reserve);
    if ($query) {
        echo 
        '<script>
            alert("Reserva realizado de forma exitosa");
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