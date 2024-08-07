<?php

    session_start();

    include_once 'config/config.php';
    include_once 'config/validate.php';
    include_once 'config/libraries.php';
    include_once 'config/login.php';

    // Verifica se o usuário está autenticado
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    if (!isset($_SESSION['user_data']) && $page != 'login') {
            header("Location: admin.php?page=login");
            exit();
    }

    function pageContent(){

        validate();
    }

    include_once 'layout/layout.php';

?>

