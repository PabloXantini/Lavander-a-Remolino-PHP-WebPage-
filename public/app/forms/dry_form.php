<div class="form-container">
    <div class="logo-header-container">
    </div>
    <div class="form-content-container">
        <form action="../../../../server/services/.php" method="post" id="reserve-dry-form">
            <div class="form-title-container centered">
                <h1 class="big3-text fc-theme4">Reservar día para el secado de ropa</h1>
            </div>
            <div class="form-field-container">
                <h3 class="mid5-text fc-theme1">Ingrese los datos necesarios</h3>
                <select name="MACHINES" id="i-machines-1" class="form-field-2">
                    <option value="">Seleccione una máquina</option>
                    <?php include "../../../../server/services/request_dry.php";?>
                </select>
                <label for="i-date-4"><h3 class="mid5-text fc-theme1">Seleccione el día</h3></label>
                <input type="date" class="form-field-2" name="DATE" id="i-date-4">
                <input type="number" class="form-field-2" name="CYCLES" id="i-cycles-4" min="1" max="7" placeholder="Establezca el número de ciclos">
                <label for="i-schedule-4"><h3 class="mid5-text fc-theme1">Seleccione el horario</h3></label>
                <input type="time" class="form-field-2" name="SCH_INIT" id="i-schedule-4" min="7:00:00" max="21:00:00" step="2700">
            </div>
            <div class="form-button-container">
                <button class="form-button register-btn" type="button" id="send-reserve-dry-btn">Realizar la reserva</button>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $("#send-reserve-dry-btn").click(function (){
        if(fieldEmpty("i-machines-1")){
            alert("Por favor especifique la lavadora que va a usar");
            focusInput("i-machines-1");
            return;
        }
        if(fieldEmpty("i-date-4")){
            alert("Por favor especifique la lavadora que va a usar");
            focusInput("i-date-1");
            return;
        }
        if(fieldEmpty("i-cycles-4")){
            alert("Por favor especifique el número de ciclos");
            focusInput("i-cycles-4");
            return;
        }
        if(fieldEmpty("i-schedule-4")){
            alert("Por favor especifique el horario");
            focusInput("i-schedule-4");
            return;
        }
        if(notValidMatch("i-date-4")){
            alert("Verfique que la fecha este correcta");
            focusInput("i-date-4");
            return;
        }
        if(notValidMatch("i-cycles-4")){
            alert("Verfique que la fecha este correcta");
            focusInput("i-cycles-4");
            return;
        }
        if(notValidMatch("i-schedule-4")){
            alert("Verifique que el horario este correcto");
            focusInput("i-cycles-4");
            return;
        }
        document.getElementById("reserve-dry-form").submit();
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