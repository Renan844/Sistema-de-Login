<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
</head>
<body>

<?php
    @session_start();
    

    if(!isset($_SESSION['Usuario'])){
        header('location: pagina_login.html');
        exit;
    }
?>
    Bem-Vindo <?php echo $_SESSION['Nome_Usuario']; ?>
    <a href="pagina_logout.php">Logout</a>

</body>
</html>