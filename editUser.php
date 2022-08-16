<?php
    require_once('repository/LoginRepository.php');
    require_once('util/base64.php');
    session_start();

    $id = filter_input(INPUT_POST, 'idUser', FILTER_SANITIZE_NUMBER_INT);
    $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

    $foto = converterBase64($_FILES['foto']);

    if(fnUpdateUser($id, $foto, $user, $age)) {
        $msg = "Sucesso ao gravar";
    } else {
        $msg = "Falha na gravação";
    }
    
    $_SESSION['id'] = $id;
    $id = $_SESSION['login']->id;
    $page = "edit_user.php";
    setcookie('notify', $msg, time() + 10, "supermanga/{$page}", 'localhost');
    header("location: {$page}");
    exit;