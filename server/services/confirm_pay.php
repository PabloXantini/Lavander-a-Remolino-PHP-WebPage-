<?php
    include __DIR__."/../db.php";
    session_start();
    $id_reserve = $_POST['ID_RESERVE'];
    $total = $_POST['TOTAL'];
    $pay_file = $_FILES['PAY_FILE'];
    $next = "../../public/app/dashboard.php";
    $back = "../../public/app/dashboard/view/addpaid.php";
    if(empty($id_reserve)||empty($total)||empty($pay_file['name'])){
        echo '<script>alert("Por favor complete todos los campos obligatorios");location.href="'.$back.'";</script>';
        exit();
    }
    $folder = __DIR__."/../uploads/";
    date_default_timezone_set('UTC');
    $file_serialized = date('Y-m-d-h-m-s')."-".$pay_file['name'];
    $path = $folder.$file_serialized;
    
    $add_pay = "INSERT INTO pagos (id_reserva, pago_total, comprobante) VALUES (
        '$id_reserve',
        '$total',
        '$path'
    )";
    $query = mysqli_query($CONNECTION,$add_pay);
    if($query){
        move_uploaded_file($pay_file['tmp_name'],$path);
        echo 
        '<script>
            alert("Pago registrado correctamente");
            location.href="'.$next.'";
        </script>';
    }else{
        echo 
        '<script>
            alert("Error al registrar el pago");
            location.href="'.$back.'";
        </script>';
    }
?>