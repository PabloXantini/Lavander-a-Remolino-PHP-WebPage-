<div class="form-container register-form">
    <div class="logo-header-container">
    </div>
    <div class="form-content-container">
        <form action="../server/services/add_user.php" method="post" id="register-form">
            <div class="form-title-container centered">
                <h1 class="big3-text fc-white">Registrarse</h1>
            </div>
            <div class="form-field-container">
                <h3 class="mid5-text fc-theme1">Ingrese sus datos personales básicos:</h3>
                <input type="text" name="FIRSTNAME" id="i-firstname" class="form-field-2 halved" placeholder="Nombre(s)"><input type="text" name="LASTNAME" id="i-lastname" class="form-field-2 halved" placeholder="Apellido(s)">
            </div>
            <div class="form-field-container">
                <h3 class="mid5-text fc-theme1">Ingrese datos de usuario:</h3>
                <input type="email" class="form-field-2" name="EMAIL" id="i-email-3" placeholder="Ingrese su correo electrónico">
                <input type="password" class="form-field-2" name="PASSWORD" id="i-password-3" placeholder="Ingrese su contraseña">
            </div>
            <div class="form-button-container">
                <button class="form-button register-btn" type="button" id="send-register-btn">Confirmar</button>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $("#send-register-btn").click(function (){
        if(fieldEmpty("i-firstname")){
            alert("Por favor escribe tu nombre");
            focusInput("i-firstname");
            return;
        }
        if(fieldEmpty("i-lastname")){
            alert("Por favor escribe tu apellido");
            focusInput("i-lastname");
            return;
        }
        if(fieldEmpty("i-email-3")){
            alert("Por favor escribe tu correo electrónico");
            focusInput("i-email-3");
            return;
        }
        if(fieldEmpty("i-password-3")){
            alert("Por favor, escribe tu contraseña");
            focusInput("i-password-3");
            return;
        }
        if(notValidMatch("i-email-3")){
            alert("Por favor, escribe correctamente tu correo electrónico");
            focusInput("i-email-3");
            return;
        }
        document.getElementById("register-form").submit();
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