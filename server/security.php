<?php
session_start();

if(!isset($_SESSION['auth_user']) || $_SESSION['auth_user'] != "yes"){
    header("Location: ".$gotoback);
    exit();
}
?>