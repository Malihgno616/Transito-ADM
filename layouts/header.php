<?php
session_start();
ini_set('default_charset', 'UTF-8');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../database/db.php';

$db = new Db();

// Verifique se o usuário está autenticado e a chave 'usuario' está definida
if (!isset($_SESSION['usuario']) || !isset($_SESSION['usuario']->id)) {
    die('Usuário não autenticado.');
}

// Acesse o 'id' do usuário a partir do objeto na sessão
$id_usuario = $_SESSION['usuario']->id;

$sql = "SELECT * FROM login_user WHERE id = :id";
$params = array(':id' => $id_usuario);

$response = $db->query($sql, $params);

if ($response['status'] !== 'success') {
    echo 'Erro na consulta ou na execução da query.';
    exit;
}

if (empty($response['data'])) {
    $nome = 'Usuário desconhecido';
} else {
    $nome = htmlspecialchars($response['data'][0]->user_login);
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
  <title>Transito ADM</title>
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
  <link href="../dist/output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <style>
    body {
      @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');
      font-family: "Nunito", sans-serif;
    }
  </style>
</head>
<body class="w-full h-full font-serif">
<header class="bg-yellow-400 drop-shadow-md">
  <nav class="font-medium flex flex-row max-md:flex-col justify-around items-center py-2 px-4 text-2xl max-md:text-2xl max-lg:p-5 max-lg:text-xl gap-4">
      <a href="index.php?rota=home">
        <img src="../assets/img/logo-borda-branca.png" class="w-46 md:w-32 lg:w-48"  alt="logo transito">
      </a>
      <a class="hover:text-white duration-200 text-center" href="index.php?rota=home">Home</a>
      <a class="hover:text-white duration-200 text-center" href="index.php?rota=servicos">Serviços</a>
      <a class="hover:text-white duration-200 text-center" href="index.php?rota=contatos">Contatos</a>
      <a class="hover:text-white duration-200 text-center" href="index.php?rota=notificacoes">Todas as notificações</a>
  </nav> 
</header>
<div class="flex justify-center items-center p-8">
  <span dir="rtl"><h1 class="mx-1 text-2xl max-sm:p-0 max-md:text-sm max-md:text-left font-bold ">Bem-vindo - <?= htmlspecialchars($nome) ?? ""; ?></h1></span>
  <a class="w-25 text-md max-md:text-1xl max-md:w-15 bg-gray-800 text-white p-1 flex justify-center  items-center rounded-md hover:bg-gray-200 hover:text-gray-600 duration-200" href="index.php?rota=logout">Sair <abbr title="Sair"> <i class="fa-solid fa-arrow-right-from-bracket"></i></abbr></a> 
</div>