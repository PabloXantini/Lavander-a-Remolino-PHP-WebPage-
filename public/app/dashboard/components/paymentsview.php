<h1 class="fc-theme1 centered">Vista de Pagos Realizados</h1>
<div class="table-view-container">
    <table class="table-view">
        <thead>
            <tr class="table-header-view">
                <th>ID Pago</th>
                <th>ID Reserva</th>
                <th>Total</th>
                <th>Comprobante</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php include "../../../../server/services/request_payments.php"; ?>
        </tbody>
    </table>
</div>
<script>
    function validate(url){
        deleteConfirm = confirm("¿Está seguro de eliminar este registro?");
        if(deleteConfirm == true){
            window.location = url;
        }
    }
</script>