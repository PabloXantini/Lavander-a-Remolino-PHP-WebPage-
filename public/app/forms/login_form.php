<div class="form-container login-form">
    <div class="logo-header-container">
    </div>
    <div class="form-content-container">
        <form action="auth_user.php" method="post" id="login_form">
            <div class="form-title-container centered">
                <h1 class="big3-text">Iniciar sesión</h1>
            </div>
            <div class="form-field-container">
                <input type="email" class="form-field-2" name="EMAIL" id="i-email-2" placeholder="Ingrese su correo electrónico">
                <input type="password" class="form-field-2" name="PASSWORD" id="i-password-2" placeholder="Ingrese su contraseña">
            </div>
            <div class="form-button-container">
                <button class="form-button login-btn" type="button" id="send-login-btn">Acceder</button>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    $("#send-login-btn").click(function (){
        if(fieldEmpty("i-email-2")){
            alert("Por favor escribe tu correo electrónico");
            focusInput("i-email-2");
            return;
        }
        if(fieldEmpty("i-password-2")){
            alert("Por favor, escribe tu contraseña");
            focusInput("i-password-2");
            return;
        }
        if(notValidMatch("i-email-2")){
            alert("Por favor, escribe correctamente tu correo electrónico");
            focusInput("i-email-2");
            return;
        }
        document.getElementById("login-form").submit();
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