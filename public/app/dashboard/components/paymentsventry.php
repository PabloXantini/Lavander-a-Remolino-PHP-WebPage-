<tr>
    <td><?=$id_pago_o?></td>
    <td><?=$id_reserva_o?></td>
    <td><?=$pago_total_o?></td>
    <td>
        <a href="../../../../server/<?=$comprobante_o?>" target="_blank" rel="noopener noreferrer" class="download-btn">Descargar</a>     
    </td>
    <td>
        <a href="#" class="delete-btn" onclick="validate('../../../../server/services/delete_pay.php?id=<?php echo $id_pago_o?>')">Eliminar</a>
    </td>
</tr>