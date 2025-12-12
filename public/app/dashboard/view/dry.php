<?php
    $gotoback = "../../../";
    require "../../../../server/security.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RemolinoHUB - Reservar Secados</title>
    <link rel="stylesheet" href="../../../css/mainstyles.css">
    <link rel="stylesheet" href="../../../css/formstyles.css">
    <link rel="stylesheet" href="../../../css/dstyles.css">
    <link rel="shortcut icon" href="../../../res/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
    <?php
        $endpoint_logout = "../../../../server/logout.php"; 
        include_once "../components/header.php";
    ?>
    <div class="main-content">
        <div class="info-content">
            <?php include "../../forms/dry_form.php"?>
        </div>
    </div>
</body>
</html>