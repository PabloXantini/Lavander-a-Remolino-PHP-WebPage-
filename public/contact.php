<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAVANDERIA REMOLINO - Contactos</title>
    <meta name="description" content="Esta es una página de una lavandería">
    <link rel="stylesheet" href="css/mainstyles.css">
    <link rel="stylesheet" href="css/formstyles.css">
    <link rel="shortcut icon" href="res/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
    <?php include_once "components/header.php"?>
    <?php include_once "components/banner.php"?>
    <?php include_once "components/navmenu.php"?>
    <?php
        $title = "Anímate y contáctanos"; 
        include "components/section.php";
    ?>
    <div class="main-content">
        <div class="info-content">
            <?php include_once "components/contact_form.php"?>
        </div>
    </div>
    <?php
        $title = "Consulte nuestra sucursal"; 
        include "components/section.php";
    ?>
    <?php include "components/mapsucursal.php"?>
    <?php include_once "components/footer.php"?>
</body>
</html>