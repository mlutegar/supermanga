<?php
    session_start();

    require_once('repository/LoginRepository.php');

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
    $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

    if(fnAddUser($user, $age, $email, $senha)) {
            $msg = "";
        } else {
            $msg = "Preencha todos os campos corretamente";
        }

    $page = "login.php";
    setcookie('notify', $msg, time() + 10, "supermanga/{$page}", 'localhost');
    header("location: {$page}");
    exit;