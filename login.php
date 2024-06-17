<?php
    @session_start();

    include('db.php');

    $usuario = $_POST['u'];
    $senha = $_POST['p'];

    $stmt = $pdo->prepare("SELECT * FROM `aula` WHERE nome = ?");
    $stmt->execute([$usuario]);
    $info = $stmt->fetch(PDO::FETCH_ASSOC);

    // Validar o nome de usuário do cliente
    if(!$info){
        echo 'ERRO_USUARIO';
        exit;
    }
    if($senha == $info['senha']){
        echo 'OK';
        $_SESSION['Nome_Usuario'] = $info['nome'];
        $_SESSION['Usuario'] = $info['nome'];
        exit;
    } else {
        echo 'ERRO_SENHA';
        exit;
    }
?>