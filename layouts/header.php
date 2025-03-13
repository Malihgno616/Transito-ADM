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
  <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
  <title>Transito ADM</title>
  <link rel="stylesheet" href="../assets/styles/tela-servicos.css">
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
  <link href="../src/output.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body class="w-full h-full">
<header class="bg-yellow-400 drop-shadow-md">
  <nav class="flex justify-around items-center p-2 text-2xl ">
      <a href="index.php?rota=home"><img src="../assets/img/logo-borda-branca.png" width="200px" alt="logo transito"></a>
      <a class="hover:text-gray-100 duration-200" href="index.php?rota=home">Home</a>
      <a class="hover:text-gray-100 duration-200" href="index.php?rota=servicos">Serviços</a>
      <a class="hover:text-gray-100 duration-200" href="index.php?rota=contatos">Contatos</a>
      <a class="hover:text-gray-100 duration-200" href="index.php?rota=notificacoes">Todas as notificações</a>
  </nav> 
</header>
<div class="flex justify-center items-center p-8  ">
  <span dir="rtl"><h1 class="mx-6 text-4xl font-bold ">Bem-vindo - <?= htmlspecialchars($nome) ?? ""; ?></h1></span>
  <a class="w-25 bg-gray-800 text-white p-1 flex justify-center text-3xl items-center rounded-md hover:bg-gray-200 hover:text-gray-600 duration-200" href="index.php?rota=logout">Sair <abbr title="Sair"> <i class="fa-solid fa-arrow-right-from-bracket"></i></abbr></a> 
</div>

