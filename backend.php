<?php
session_start();
    // do any authentication first, then add POST variable to session
    $_SESSION['yenny'] = $_POST['img'];
?>