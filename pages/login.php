<?php 
  $erro = $_SESSION['error'];
  unset($_SESSION['error']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="../assets/styles/global.css">
  <link rel="stylesheet" href="../assets/styles/login.css">
  <title>LOGIN</title>
</head>
<body>
 
  <div class="container-logo">
    <div class="logo">
      <img src="../assets/img/file.jpeg" alt="Logo-Trânsito" width="125px">
    </div>
    <h2>Faça o login para o acesso</h2>
    <p>Preencha corretamente os campos</p>
    <form action="?rota='login_submit'" method="post" class="form-login">
      <div class="inputs">
        <input type="text" name="name" placeholder="Name">
      </div>
      <div class="inputs">
        <input type="password" name="email" placeholder="Email">
      </div>
      <button type="submit">
        Logar<i class="fa fa-sign-in"></i>
      </button>
    </form>
  </div>

</body>
</html>
