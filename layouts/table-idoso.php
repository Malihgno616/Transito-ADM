<?php 

include '../database/db-site-transito.php';

$db = new DbForms();

$sql = "SELECT id, nome_idoso, telefone_idoso, nascimento_idoso, rg_idoso from cartao_idoso ORDER BY id DESC LIMIT 10";

$result = $db->queryForm($sql);

?>

<main class="main-table animate__animated animate__fadeIn p-4 
rounded-md 
w-300 
border-gray-300 
mx-auto 
mb-25
max-md:w-150
max-sm:w-90
max-md:text-md
lg:p-6 
lg:w-400 
lg:border-gray-400 
lg:mx-0 
lg:mb-0">
  <h1 class="text-5xl 
  text-center 
  p-5 
  text-gray-900
  max-md:text-2xl
  " >Cartões do Idoso</h1>

  <button class="p-4 
  text-2xl
text-white 
  rounded-md 
  cursor-pointer 
  bg-gray-800 
  hover:bg-gray-600 
  w-40 
  h-10 
  flex 
  justify-center 
  items-center 
  m-auto 
  duration-100
  max-md:text-xl
  max-md:w-20
  max-md:h-5
  "
  onclick="window.location.href='index.php?rota=home'">Voltar</button>

  <table class="table-auto 
  mx-auto 
  mb-5 
  border-separate 
  border-spacing-10 
  text-2xl
  max-md:text-xl
  max-md:w-150
  ">
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

