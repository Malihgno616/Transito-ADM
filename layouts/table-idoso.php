<?php 

include '../database/db-site-transito.php';

$db = new DbForms();

$sql = "SELECT id, nome_idoso, telefone_idoso, nascimento_idoso, rg_idoso from cartao_idoso";

$result = $db->queryForm($sql);

?>

<main class="main-table animate__animated animate__fadeIn">
  <h1>Cartões do Idoso</h1>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Data Nasc</th>
        <th>RG</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        if (is_array($result['data'])){
          foreach ($result['data'] as $row){
            $id = htmlspecialchars($row->id);
            $nome_idoso = htmlspecialchars($row->nome_idoso);
            $telefone_idoso = htmlspecialchars($row->telefone_idoso);
            $nascimento_idoso = htmlspecialchars($row->nascimento_idoso);
            $rg_idoso = htmlspecialchars($row->rg_idoso);

            echo "
              <tr>
                <td>$id</td>
                <td>$nome_idoso</td>
                <td>$telefone_idoso</td>
                <td>$nascimento_idoso</td>
                <td>$rg_idoso</td>
                <td>
                  <button class='edit-btn'>Editar</button>
                  <button class='view-btn'>Visualizar</button>
                  <button class='delete-btn'>Excluir</button>
                </td>
              </tr>
            ";
          } 
        } else {
          echo "Nenhum idoso encontrado.";
        }          
      ?>
    </tbody>
  </table>
</main>

