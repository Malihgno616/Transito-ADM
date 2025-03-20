<?php 

include '../database/db-site-transito.php';

$db = new DbForms();

$page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT) ?: 1;
$per_page = 10;
$offset = ($page - 1) * $per_page;

$sql = "SELECT id, nome, email, telefone, mensagem FROM form_contato ORDER BY id DESC LIMIT $per_page OFFSET $offset";

$result = $db->queryForm($sql);


// Contagem de páginas por registro
$sql_count = "SELECT COUNT(*) as total FROM form_contato";
$result_count = $db->queryForm($sql_count);
$total = $result_count['data'][0]->total ?? 0;
$total_pages = ceil($total / $per_page); // Arredondar o total de páginas

// var_dump($result['data']);

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // Montar a query de exclusão
    $sql_delete = "DELETE FROM form_contato WHERE id = :id";
    
    // Executar a exclusão usando o método queryForm()
    $result = $db->queryForm($sql_delete, ['id' => $delete_id]);
    
    // Verificar o status da execução
    if ($result['status'] === 'success') {
        // Redireciona para a mesma página (com a variável page) e passa um parâmetro de sucesso
        header("Location: index.php?rota=contatos" . "&deleted=true");
        exit();
    } else {
        // Em caso de erro, mostrar uma mensagem
        echo "Erro ao excluir: " . $result['data'];
    }
}

$tot_registros = "SELECT COUNT(*) as total FROM form_contato";
$sql_total_reg = $db->queryForm($tot_registros);
$registros = $sql_total_reg['data'][0]->total ?? 0;

?>

<main class="animate__animated 
animate__fadeIn 
p-4 
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
lg:mb-0
">

<h1 class="text-5xl 
  text-center 
  p-5 
  text-gray-90hp
  max-md:text-2xl
  ">Contatos</h1>
  
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
  
  <?php  if(isset($_GET['deleted']) && $_GET['deleted'] === 'true'): ?>
    <div class="bg-green-500 text-white p-4 rounded-lg mt-4 mb-4 text-center">
      Contato excluído com sucesso!
    </div>
  <?php endif; ?>

  <span class="text-2xl flex justify-center p-5">Quantidade total de registros: <strong><?= $registros ?></strong></span>

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
                                   
                  <button 
                    data-modal-target='view-modal' 
                    data-modal-toggle='view-modal' 
                    data-id='$id'
                    data-nome='".htmlspecialchars($nome, ENT_QUOTES)."'
                    data-mensagem='".htmlspecialchars($row->mensagem, ENT_QUOTES)."' 
                    class='view-button border-2 border-blue-500 rounded-sm p-2 text-blue-400 hover:bg-blue-500 hover:dark:text-white duration-150 cursor-pointer'
                  >
                    Mensagem <i class='fa-regular fa-message'></i>
                  </button>
                              
                  <button 
                      data-id='$id'
                      data-nome='".htmlspecialchars($nome, ENT_QUOTES)."' 
                      data-modal-target='delete-modal' 
                      data-modal-toggle='delete-modal' 
                      class='border-2 border-red-500 rounded-sm p-2 text-red-500 hover:dark:bg-red-500 hover:text-white duration-150 cursor-pointer'>
                      Excluir <i class='fa-solid fa-xmark'></i>
                  </button>
                
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

<!-- Modal para Visualização dos dados -->
<div id="view-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-3xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-md shadow-sm animate__animated animate__fadeInDown">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h2 class="text-3xl font-semibold text-gray-900 ">
                    Contato
                </h2>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="view-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                  </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
              <p class="text-2xl text-black">ID: <span id="modal-id"></span></p>
              <p class="text-2xl text-black">Nome: <span id="modal-nome"></span></p>
              <p class="text-2xl text-justify text-black">Mensagem: <span id="modal-mensagem"></span></p>
            </div>
                    <!-- Modal footer -->
          <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
          </div>
        </div>
    </div>
</div>

<!-- Modal para deletar um dado -->
<div id="delete-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow-sm animate__animated animate__fadeInDown">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="delete-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <form method="post" action="action="index.php?rota=contatos&delete_id=<?= $id ?>">
                  <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                  </svg>
                  <h3 class="mb-5 text-3xl font-normal text-gray-500 dark:text-gray-400">Tem certeza que deseja exluir?</h3>
                  <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-md inline-flex items-center px-5 py-2.5 text-center">
                    Sim, tenho certeza
                  </button>
                  <button data-modal-hide="delete-modal" type="button" class="py-2.5 px-5 ms-3 text-md font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100  dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Não, cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>

