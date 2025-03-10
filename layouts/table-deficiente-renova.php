<?php 

include '../database/db-site-transito.php';

$db = new DbForms();

$sql = "SELECT id, rg_solicitante from renova_cartao_deficiente ORDER BY id DESC";

$result = $db->queryForm($sql);

?>
<main class="main-table animate__animated animate__fadeIn">
  <h1>Cartões do Deficiente - Renovação do cartão</h1>
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
            $rg_solicitante = htmlspecialchars($row->rg_solicitante);
            echo "
              <tr>
                <td>$id</td>
                <td>$rg_solicitante</td>
                <td>
                  <button class='edit-btn'>Editar</button>
                  <button class='view-btn'>Visualizar</button>
                  <button class='delete-btn'>Excluir</button>
                </td>
              </tr>
            ";

          }
        } else {
          echo "Nenhum resultado encontrado";
        }
      ?>
    </tbody>
  </table>
</main>


