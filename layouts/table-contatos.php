<?php 

include '../database/db-site-transito.php';

$db = new DbForms();

$page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT) ?: 1;
$per_page = 10;
$offset = ($page - 1) * $per_page;

$sql = "SELECT id, nome, email, telefone FROM form_contato ORDER BY id DESC LIMIT $per_page OFFSET $offset";

$result = $db->queryForm($sql);

// Contagem de páginas por registro
$sql_count = "SELECT COUNT(*) as total FROM form_contato";
$result_count = $db->queryForm($sql_count);
$total = $result_count['data'][0]->total ?? 0;
$total_pages = ceil($total / $per_page); // Arredondar o total de páginas

// var_dump($result['data']);

?>

<div class="flex justify-between items-center h-10 w-250 mx-auto">
  <h1 class="text-5xl text-gray-400 font-bold text-left">Contatos</h1>
  <button type="button" class="rounded-sm text-white bg-stone-700 h-10 text-2xl shadow-md p-4 flex items-center cursor-pointer hover:bg-stone-500 duration-100" onclick="window.location.href = 'index.php?rota=home'">Voltar</button>
</div>
<main class="animate__animated animate__fadeIn p-1 rounded-md w-300 border-gray-300 mx-auto mb-25">
  <hr class="border-1 border-gray-500 w-250 mx-auto">
  <table class="table-auto mx-auto mb-5 border-separate border-spacing-10 text-2xl">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody id="list-contact">
      <?php 
        if (is_array($result['data'])) {
          foreach ($result['data'] as $row){
            $id = htmlspecialchars($row->id);
            $nome = htmlspecialchars($row->nome);
            $email = htmlspecialchars($row->email);
            $telefone = htmlspecialchars($row->telefone);
            echo "
              <tr class='text-lg p-4 mb-3'>
                <td>$id</td>
                <td class='text-center'>$nome</td>
                <td>$email</td>
                <td>$telefone</td>
                <td class='text-white font-bold'>
                  <button class='border-2 border-yellow-500 text-yellow-400 rounded-sm p-2 hover:dark:bg-yellow-500 hover:dark:text-white duration-150 cursor-pointer'>Editar</button>
                  <button class='border-2 border-blue-500 rounded-sm p-2 text-blue-400 hover:dark:bg-blue-400 hover:dark:text-white  duration-150 cursor-pointer'>Visualizar</button>
                  <button class='border-2 border-red-500 rounded-sm p-2 text-red-500 hover:dark:bg-red-500 hover:text-white duration-150 cursor-pointer'>Excluir</button>
                </td>
              </tr>
            ";
          }
        } else {
          echo "Nenhum contato encontrado.";
        }       
      ?>
    </tbody>
  </table>
    
  <div class="flex row justify-center text-3xl gap-4 p-2 mb-4">   

    <?php // Botão Anterior
    if ($page > 1): ?>
        <a class="rounded-l-lg border-2 border-gray-400 p-2 text-gray-800 hover:bg-gray-400 hover:text-white duration-100" 
           href="index.php?rota=contatos&page=<?= $page - 1 ?>">
            <i class="fas fa-arrow-left"></i>
        </a>
    <?php else: ?>
        <span class="rounded-l-lg border-2 border-gray-400 p-2 text-gray-400 opacity-50 cursor-not-allowed">
            <i class="fas fa-arrow-left"></i>
        </span>
    <?php endif; ?>

    <?php // Links das páginas
    for ($i = 1; $i <= $total_pages; $i++): ?>
        <a class="border-2 border-gray-400 p-2 text-center <?= $i == $page ? 'bg-gray-400 text-white' : 'text-gray-800 hover:bg-gray-400 hover:text-white' ?> duration-100 rounded" 
           href="index.php?rota=contatos&page=<?= $i ?>">
            <?= str_pad($i, 2, '0', STR_PAD_LEFT) ?>
        </a>
    <?php endfor; ?>

    <?php // Botão Próximo
    if ($page < $total_pages): ?>
        <a class="rounded-r-lg border-2 border-gray-400 p-2 text-gray-800 hover:bg-gray-400 hover:text-white duration-100" 
           href="index.php?rota=contatos&page=<?= $page + 1 ?>">
            <i class="fas fa-arrow-right"></i>
        </a>
    <?php else: ?>
        <span class="rounded-r-lg border-2 border-gray-400 p-2 text-gray-400 opacity-50 cursor-not-allowed">
            <i class="fas fa-arrow-right"></i>
        </span>
    <?php endif; ?>
    
  </div>

</main>

<script src="../assets/js/listContacts.js"></script>
