<div class="form-container">
    <div class="logo-header-container"></div>
        <div class="form-content-container">
            <form action="../../../../server/services/confirm_pay.php" method="post" enctype="multipart/form-data" id="confirm-pay-form">
                <div class="form-title-container centered">
                    <h1 class="big3-text fc-theme4">Confirmar pago de reserva</h1>
                </div>
                <div class="form-field-container">
                    <h3 class="mid5-text fc-theme1">Ingrese los datos necesarios</h3>
                    <input type="number" class="form-field-2" name="ID_RESERVE" id="i-idreserve-1" placeholder="ID de la reserva">
                    <input type="number" class="form-field-2" name="TOTAL" id="i-total-1" min="1" step="0.01" placeholder="Monto total">
                    <h3 class="mid5-text fc-theme1">Suba el comprobante de pago</h3>
                    <input type="file" class="form-field-2" name="PAY_FILE" id="i-payfile-1" accept="image/*,application/pdf">
                </div>
                <div class="form-button-container">
                    <button class="form-button register-btn" type="button" id="send-pay-btn">Confirmar pago</button>
                </div>
            </form>
        </div>
    </div>
<script type="text/javascript">
    $("#send-pay-btn").click(function (){
        if(fieldEmpty("i-idreserve-1")){
            alert("Por favor ingrese el ID de la reserva");
            focusInput("i-idreserve-1");
            return;
        }
        if(fieldEmpty("i-total-1")){
            alert("Por favor ingrese el monto total");
            focusInput("i-total-1");
            return;
        }
        if(fieldEmpty("i-payfile-1")){
            alert("Por favor suba el comprobante de pago");
            focusInput("i-payfile-1");
            return;
        }
        if(notValidMatch("i-total-1")){
            alert("Verifique que el monto sea correcto");
            focusInput("i-total-1");
            return;
        }
        document.getElementById("confirm-pay-form").submit();
    });
    function fieldEmpty(tag){
        return $("#"+tag).val().trim()==="";
    }
    function notValidMatch(tag){
        return !$("#"+tag)[0].checkValidity();
    }
    function focusInput(tag){
        $("#"+tag).focus();
    }
</script>
