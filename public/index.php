<?php 

session_start();


$rotas_permitidas = require __DIR__ . '/../inc/rotas.php';

$rota = $_GET['rota'] ?? 'home';

// Se o usuário estiver logado
if(!isset($_SESSION['usuario']) && $rota !=='login_submit'){
  $rota = "login";
}

// Se estiver logado e tentar entrar no login
if(isset($_SESSION['usuario']) && $rota === 'login'){
  $rota = 'home';
}

if(!in_array($rota, $rotas_permitidas)){
  $rota = '404';
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
  case '404':
    $script = '404.php';
    break;
  case 'logout':
    $script = 'logout.php';
    break;
}


require_once __DIR__ . '/../database/db.php';

//teste conexão banco de dados
// $db = new Db();
// $usuarios = $db->query("SELECT * FROM login_user; ");
// echo '<pre>';
// print_r($usuarios);
// echo '</pre>';


require_once __DIR__ . "/../pages/{$script}";