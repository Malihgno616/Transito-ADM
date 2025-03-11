<?php 
ini_set('default_charset', 'UTF-8');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../database/db.php';

$db = new Db();

// $db->set_charset("utf8mb4");


$sql = "SELECT user_login FROM login_user WHERE id = 1";

$response = $db->query($sql);

if($response['status'] === 'success' && !empty($response['data'])) {
    $nome = $response['data'][0]->user_login;
} else {   
    $nome = 'Usuário desconhecido';
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transito ADM</title>
  <!-- <link rel="stylesheet" href="../assets/styles/global.css">
  <link rel="stylesheet" href="../assets/styles/header.css"> -->
  <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../assets/styles/tela-inicial.css">
  <link rel="stylesheet" href="../assets/styles/footer.css">
  <link rel="stylesheet" href="../assets/styles/tela-servicos.css">
  <link rel="stylesheet" href="../assets/styles/table.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link href="../src/output.css" rel="stylesheet">
</head>
<body>
<header class="bg-yellow-400 drop-shadow-md ">
  <nav class="flex justify-around items-center p-2 text-2xl ">
      <a href="index.php?rota=home"><img src="../assets/img/logo-borda-branca.png" width="200px" alt="logo transito"></a>
      <a class="hover:text-gray-100 duration-200" href="index.php?rota=home">Home</a>
      <a class="hover:text-gray-100 duration-200" href="index.php?rota=servicos">Serviços</a>
      <a class="hover:text-gray-100 duration-200" href="index.php?rota=contatos">Contatos</a>
      <a class="hover:text-gray-100 duration-200" href="index.php?rota=notificacoes">Todas as notificações</a>
      <a class="w-25 bg-gray-800 text-white p-1 flex justify-center items center rounded-md hover:bg-gray-200 hover:text-gray-600 duration-200" href="index.php?rota=logout">Sair <abbr title="Sair"> <i class="fa-solid fa-arrow-right-from-bracket"></i></abbr></a>  
  </nav> 
</header>
<div class="user-name">
  <span><h2 class="text-3xl font-bold underline">Bem-vindo, <?= htmlspecialchars($nome) ?? ""; ?></h2></span>
</div>

