<?php 

include '../database/db-site-transito.php';

$db = new DbForms();

$sql = "SELECT id, rg_solicitante, motivo_cancela FROM cancelamento_cartao_deficiente ORDER BY id DESC";

$result = $db->queryForm($sql);

?>
<main class="main-table">
  <h1>Cartão Deficiente - Cancelamento do Cartão</h1>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>RG</th>
        <th>Motivo do Cancelamento</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        if (is_array($result['data'])){
          foreach ($result['data'] as $row ) {
            $id = htmlspecialchars($row->id);
            $rg_solicitante = htmlspecialchars($row->rg_solicitante);
            $motivo_cancela = htmlspecialchars($row->motivo_cancela);
            echo "
              <tr>
                <td>$id</td>
                <td>$rg_solicitante</td>
                <td>$motivo_cancela</td>
                <td>
                  <button class='edit-btn'>Editar</button>
                  <button class='view-btn'>Visualizar</button>
                  <button class='delete-btn'>Excluir</button>
                </td>
              </tr>
            ";
          }
        } else {
          echo "Nenhum registro encontrado.";
        }
      ?>
    </tbody>
  </table>
</main>

