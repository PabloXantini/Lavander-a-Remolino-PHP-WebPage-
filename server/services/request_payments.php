<?php
    require __DIR__."/../db.php";
    
    $request_payments = "SELECT * FROM pagos";
    $result = mysqli_query($CONNECTION, $request_payments);

    while($row = mysqli_fetch_assoc($result)){
        $id_pago_o = $row['id_pago'];
        $id_reserva_o = $row['id_reserva'];
        $pago_total_o = $row['pago_total'];
        $comprobante_o = $row['comprobante'];
        include "../../../../public/app/dashboard/components/paymentsventry.php";
    }
?>