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

<?php 
include 'modals/modalContato.php';
include 'modals/deleteModalContato.php';
?>

