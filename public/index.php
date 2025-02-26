<?php 

session_start();

$rotas_permitidas = require __DIR__ . '/../inc/rotas.php';

$rota = $_GET['rota'] ?? 'home';

if(!isset($_SESSION['usuario']) && $rota !=='login_submit'){
  $rota = "login";
}

if(isset($_SESSION['usuario']) && $rota === 'login'){
  $rota = 'home';
}

if (!in_array($rota, $rotas_permitidas)) {
    http_response_code(404);
    $script = '404.php';
    require_once __DIR__ . "/../pages/{$script}";
}

$script = null;

switch($rota){
  case 'login':
    $script = 'login.php';
    break;

  case 'login_submit':
    $script = 'login_submit.php';
    break;
  
  case 'home':
    $script = 'home.php';
    break;
  
  case 'logout':
    $script = 'logout.php';
    break;

  case 'servicos':
    $script = 'servicos.php';
    break;

  case 'contatos':
    $script = 'contatos.php';
    break;

  case 'notificacoes':
    $script = 'notificacoes.php';
    break;

  case 'cartao-idoso':
    $script = 'cartao-idoso.php';
    break;

  case 'cartao-deficiente':
    $script = 'cartao-deficiente.php';
    break;

  case 'cartao-deficiente-renova':
    $script = 'deficiente-renova.php';
    break;

  case 'cartao-deficiente-cancela':
    $script = 'deficiente-cancela.php';
    break;

  case 'cartao-deficiente-segunda-via':
    $script = 'deficiente-2avia.php';
    break; 

  } 

require_once __DIR__ . '/../database/db.php';
require_once __DIR__ . "/../pages/{$script}";

//teste conexão banco de dados
// $db = new Db();
// $usuarios = $db->query("SELECT * FROM login_user; ");
// echo '<pre>';
// print_r($usuarios);
// echo '</pre>';
