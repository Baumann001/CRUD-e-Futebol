<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">
    <h3>Bem-vindo ao Dashboard, <?= $_SESSION["username"] ?>!</h3>
    <p>Você está logado no sistema.</p>
    <p><a href="login.php?logout=1">Sair</a></p>
</div>

</body>
</html>
