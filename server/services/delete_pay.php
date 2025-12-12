<?php
    require __DIR__."/../db.php";

    $id = $_GET['id'];

    $delete_entry = "DELETE FROM pagos WHERE id_pago = $id";

    $query = mysqli_query($CONNECTION, $delete_entry);

    if($query){
        echo 
        "<script>
            alert('Registro eliminado');
            location.href='../../public/app/dashboard/view/paids.php'; 
        </script>";
    } else {
        echo "Error al eliminar el registro";
    }
?>