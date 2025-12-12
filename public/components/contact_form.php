<div class="form-container">
    <div class="form-content2-container">
        <form action="" method="post" id="contact-form">
            <div class="form-title-container">
                <h2 class="big3-text">Nos interesa escucharte, responderemos lo más pronto posible</h2>
            </div>
            <div class="form-field2-container">
                <input type="text" class="form-field-1" id="i-name-1" placeholder="Nombre Completo">
                <input type="email" class="form-field-1" id="i-email-1" placeholder="Correo Electrónico">
                <input type="tel" class="form-field-1" pattern="\+*[0-9]{10}[0-9]*" id="i-tel-1" placeholder="Teléfono">
                <textarea name="" id="i-comments" class="form-field-1" placeholder="Comentarios"></textarea>
            </div>
            <div class="form-button-container">
                <button class="form-button" type="button" id="send-contact-btn">Enviar</button>
                <button class="form-button bg-delete" type="reset">Borrar</button>
            </div>
        </form>
    </div><div class="form-image-container">
        <img id="foto-1" src="res/media/img/img_dudas.png" alt="Imagen de dudas">
    </div>
</div>
<script type="text/javascript">
    $("#send-contact-btn").click(function (){
        if(fieldEmpty("i-name-1")){
            alert("Por favor escribe tu nombre");
            focusInput("i-name-1");
            return;
        }
        if(fieldEmpty("i-email-1")){
            alert("Por favor escribe tu correo electrónico");
            focusInput("i-email-1");
            return;
        }
        if(fieldEmpty("i-comments")){
            alert("Por favor, escribe algún comentario");
            focusInput("i-comments");
            return;
        }
        if(notValidMatch("i-email-1")){
            alert("Por favor, escribe correctamente tu correo electrónico");
            focusInput("i-email-1");
            return;
        }
        if(notValidMatch("i-tel-1")&&!fieldEmpty("i-tel-1")){
            alert("Por favor, escribe correctamente tu teléfono");
            focusInput("i-tel-1");
            return;
        }
        document.getElementById("contact-form").submit();
        alert("Tus datos de contactos se enviaron correctamente.");
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