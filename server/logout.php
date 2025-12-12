<?php
session_start();
session_destroy();
echo 
'<script>
    alert("Cierre de sesión exitoso");
    location.href="../public/index.php";
</script>';
?>