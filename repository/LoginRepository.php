<?php
    require_once('Connection.php');

    function fnLogin($email, $password) {
        $con = getConnection();
        $sql = "select id, email from login where email = :pEmail and senha = :pSenha";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":pEmail", $email);
        $stmt->bindValue(":pSenha", md5($password));

        if($stmt->execute()){
            return $stmt->fetch(PDO::FETCH_OBJ);
        }
        return null;
    }