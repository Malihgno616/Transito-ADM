<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../database/db.php';

$db = new Db();

$sql = "SELECT user_login FROM login_user WHERE id = 1";

$response = $db->query($sql);

if($response['status'] === 'success' && !empty($response['data'])) {
    $nome = $response['data'][0]->user_login;
} else {   
    $nome = 'Usuário desconhecido';
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transito ADM</title>
  <link rel="stylesheet" href="../assets/styles/global.css">
  <link rel="stylesheet" href="../assets/styles/header.css">
  <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../assets/styles/tela-inicial.css">
  <link rel="stylesheet" href="../assets/styles/footer.css">
  <link rel="stylesheet" href="../assets/styles/tela-servicos.css">
  <link rel="stylesheet" href="../assets/styles/table.css">
</head>
<body>
<header class="header">
  <nav class="nav-menu">
      <a href="index.php?rota=home"><img src="../assets/img/logo-borda-branca.png" width="200px" alt="logo transito"></a>
      <a href="index.php?rota=home">Home</a>
      <a href="index.php?rota=servicos">Serviços</a>
      <a href="index.php?rota=contatos">Contatos</a>
      <a href="index.php?rota=notificacoes">Todas as notificações</a>
      <a class="logout" href="index.php?rota=logout">Sair <abbr title="Sair"><i class="fa-solid fa-arrow-right-from-bracket"></i></abbr></a>  
  </nav> 
</header>
<div class="user-name">
  <span><h2>Bem-vindo, <?= htmlspecialchars($nome) ?? ""; ?></h2></span>
</div>
