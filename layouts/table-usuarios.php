<?php 

require_once '../database/db.php';

$db = new Db();

$sql = "SELECT id, user_login FROM login_user";

$result = $db->query($sql);

?>

<main class="main-table animate__animated animate__fadeIn">
  <h1>Usuários</h1>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
        <?php 
          if (is_array($result['data'])){         
            foreach ($result['data'] as $row){
              $id = htmlspecialchars($row->id);
              $user_login = htmlspecialchars($row->user_login);
              echo "
                <tr>
                  <td>$id</td>
                  <td>$user_login</td>
                  <td>
                    <button class='edit-btn' data-id='$id'>Editar</button>
                    <button class='view-btn' data-id='$id'>Visualizar</button>
                    <button class='delete-btn' data-id='$id'>Excluir</button>
                  </td>
                </tr>
              ";
            }
          } else {
            echo "
              <tr>
                <td colspan='3'>Nenhum usuário encontrado</td>
              </tr>
            ";
          }     
        ?>
    </tbody>
  </table>
</main>
