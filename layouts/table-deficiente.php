<?php 

include '../database/db-site-transito.php';

$db = new DbForms();

$sql = "SELECT id, nome_beneficiario, telefone_beneficiario, rg_beneficiario from cartao_deficiente";

$result = $db->queryForm($sql);

?>

<main class="main-table animate__animated animate__fadeIn">
  <h1>Cartões do Deficiente</h1>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>RG</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php  
        if (is_array($result['data'])){
          foreach ($result['data'] as $row){
            $id = htmlspecialchars($row->id);
            $nome_beneficiario = htmlspecialchars($row->nome_beneficiario);
            $telefone_beneficiario = htmlspecialchars($row->telefone_beneficiario);
            $rg_beneficiario = htmlspecialchars($row->rg_beneficiario);
            echo "
              <tr>
                <td>$id</td>
                <td>$nome_beneficiario</td>
                <td>$telefone_beneficiario</td>
                <td>$rg_beneficiario</td>
                <td>
                  <button class='edit-btn'>Editar</button>
                  <button class='view-btn' >Visualizar</button>
                  <button class='delete-btn' >Excluir</button>
                </td>
              </tr>
            ";
          }
        }    
      ?>
    </tbody>
  </table>
</main>

