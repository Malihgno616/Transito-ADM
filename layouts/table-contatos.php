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
                  <button data-modal-target='static-modal' data-modal-toggle='static-modal' class='border-2 border-blue-500 rounded-sm p-2 text-blue-400 hover:dark:bg-blue-400 hover:dark:text-white  duration-150 cursor-pointer'>Visualizar</button>
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


<div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-lg max-h-screen md:p-6 lg:p-8">
        
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-300">
            
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 id="modal-title" class="text-3xl font-bold text-gray-900 ">
                    Visualização
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div id="modal-body" class="p-4 md:p-5 space-y-4">
              <h4 class="text-3xl font-bold text-gray-900 ">Detalhes do Contato</h4>
              <p  class="text-2xl text-gray-900 ">Id: </p>
              <p  class="text-2xl text-gray-900 ">Nome: </p>
              <p  class="text-2xl text-gray-900 ">Email: </p>
              <p  class="text-2xl text-gray-900 ">Telefone: </p>
              <p  class="text-2xl text-gray-900 ">Mensagem: </p>
            </div>
        </div>
    </div>
</div>


