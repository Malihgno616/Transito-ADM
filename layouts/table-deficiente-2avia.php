<?php 

include '../database/db-site-transito.php';

$db = new DbForms();

$sql = "SELECT id, rg_beneficiario from segunda_via_cartao_deficiente ORDER BY id DESC";

$result = $db->queryForm($sql);

?>

<main class="main-table">
  <h1>Cartão Deficiente - Segunda Via</h1>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>RG</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        if (is_array($result['data'])){
          foreach ($result['data'] as $row){
            $id = htmlspecialchars($row->id);
          $rg_beneficiario = htmlspecialchars($row->rg_beneficiario);
          echo "
            <tr>
              <td>$id</td>
              <td>$rg_beneficiario</td>
              <td>
                  <button class='edit-btn'>Editar</button>
                  <button class='view-btn'>Visualizar</button>
                  <button class='delete-btn'>Excluir</button>
                </td>
            </tr>
          ";
          }

        } else {
          echo '<tr><td colspan="3">Nenhum registro encontrado.</td></tr>';
        }
      ?>
    </tbody>
  </table>
</main>

<main class="main-table">
  <h1>Segunda Via - Roubo ou Furto</h1>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>RG</th>
        <th>Boletim de Ocorrência</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody >
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
    </tbody>
  </table>
</main>

