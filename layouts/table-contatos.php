<?php 

include '../database/db-site-transito.php';

$db = new DbForms();

$sql = "SELECT id, nome, email, telefone FROM form_contato";

$result = $db->queryForm($sql);

// var_dump($result['data']);

?>

<main class="main-table animate__animated animate__fadeIn">
  <h1>Contatos</h1>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        
        if (is_array($result['data'])) {

          foreach ($result['data'] as $row){

            $id = htmlspecialchars($row->id);
            $nome = htmlspecialchars($row->nome);
            $email = htmlspecialchars($row->email);
            $telefone = htmlspecialchars($row->telefone);

            echo "<tr>";
            echo "<td>" . $id . "</td>";
            echo "<td>" . $nome . "</td>";
            echo "<td>" . $email . "</td>";
            echo "<td>" . $telefone . "</td>";
            echo "
            <td>
              <button class='edit-btn'>Editar</button>
              <button class='view-btn' >Visualizar</button>
              <button class='delete-btn' >Excluir</button>
            </td>";
            echo "</tr>";
          }

        } else {
          echo "Nenhum contato encontrado.";
        }       
      ?>
    </tbody>
  </table>
</main>


