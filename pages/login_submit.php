<?php 

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
  header('Location: index.php?rota=login');
  exit;
}

$login_user = $_POST['nome-login'];
$senha_user = $_POST['senha-login'];

if (empty($login_user) || empty($senha_user)) {
  header('Location: index.php?rota=login');
  exit;
}

$db = new Db();
$params = [
  'usuario' => $login_user
];

$sql = "SELECT * FROM login_user WHERE user_login = :user_login";
$result = $db->query($sql, $params);

if($result['status'] === 'error'){
  header('Location: index.php?rota=404');
  exit;
}

if(count($result['data']) === 0){
  $_SESSION['error'] = "Usuário ou senha inválidos/incorretos";
  header('Location: index.php?rota=login');
  exit;
}

if(!password_verify($senha_user, $result['data'][0]->pass_login)){
  $_SESSION['error'] = "Usuário ou senha inválidos/incorretos";
  header('Location: index.php?rota=login');
  exit;
}

$_SESSION['usuario'] = $result['data'][0];

header('Location: index.php?rota=home');
exit;

