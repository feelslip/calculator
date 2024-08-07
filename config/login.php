<?php

    session_start();    

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $user['username'] = $_POST['username'];
        $user['password'] = $_POST['password'];

        $login = 'user';
        $password = 1234;

        if($login != $user['username'] or $password != $user['password']){
            header("location: admin.php?page=login&msg=access_error");
        }else{
            $data['username'] = $login;
            $data['access'] = date("d/m H:i");
            $_SESSION['user_data'] = $data;
            header('location: admin.php?page=home');
        }
    }