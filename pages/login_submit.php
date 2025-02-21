<?php 

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
  header('Location: index.php?rota=login');
  exit;
}

$login_user = $_POST['nome-login'];
$senha_user = $_POST['senha-login'];

if (empty($login_user) || empty($senha_user)) {
  $_SESSION['error'] = "Por favor, preencha todos os campos.";
  header('Location: index.php?rota=login');
  exit;
}

$db = new Db();
$params = [
  'user_login' => $login_user,
  'pass_login' => $senha_user
];

$sql = "SELECT * FROM login_user WHERE user_login = :user_login and pass_login = :pass_login";
$result = $db->query($sql, $params);

if (!$result) {
  $error_message = 'Erro ao realizar a operação. Por favor, tente novamente.';
  $_SESSION['error'] = $error_message;
  header('Location: index.php?rota=login');
  exit;
}

if($result['status'] === 'error'){
  $error_message = 'Erro ao realizar a operação. Por favor, tente novamente.';
  $_SESSION['error'] = $error_message;
  header('Location: index.php?rota=login');
  exit;
}

if(count($result['data']) === 0){
  $_SESSION['error'] = "Usuário ou senha inválidos/incorretos";
  header('Location: index.php?rota=login');
  exit;
}

$_SESSION['usuario'] = $result['data'][0];

header('Location: index.php?rota=home');

