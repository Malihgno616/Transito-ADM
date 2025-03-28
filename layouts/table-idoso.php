<?php 

include '../database/db-site-transito.php';

$estados = array(
	'AC' => 'Acre',
	'AL' => 'Alagoas',
	'AP' => 'Amapá',
	'AM' => 'Amazonas',
	'BA' => 'Bahia',
	'CE' => 'Ceará',
	'DF' => 'Distrito Federal',
	'ES' => 'Espirito Santo',
	'GO' => 'Goiás',
	'MA' => 'Maranhão',
	'MS' => 'Mato Grosso do Sul',
	'MT' => 'Mato Grosso',
	'MG' => 'Minas Gerais',
	'PA' => 'Pará',
	'PB' => 'Paraíba',
	'PR' => 'Paraná',
	'PE' => 'Pernambuco',
	'PI' => 'Piauí',
	'RJ' => 'Rio de Janeiro',
	'RN' => 'Rio Grande do Norte',
	'RS' => 'Rio Grande do Sul',
	'RO' => 'Rondônia',
	'RR' => 'Roraima',
	'SC' => 'Santa Catarina',
	'SP' => 'São Paulo',
	'SE' => 'Sergipe',
	'TO' => 'Tocantins',
);

$array_generos = [
  "Masculino",
  "Feminino",
];

$db = new DbForms();

// paginação 
$page = filter_input(INPUT_GET, "page",FILTER_SANITIZE_NUMBER_INT) ?: 1;
$per_page = 10;
$offset = ($page - 1) * $per_page;
$sql_count = "SELECT COUNT(*) as total FROM cartao_idoso";
$result_count = $db->queryForm($sql_count);
$total = $result_count['data'][0]->total ?? 0;
$total_pages = ceil($total / $per_page);

$sql = "SELECT * from cartao_idoso ORDER BY id DESC LIMIT $per_page OFFSET $offset";

$result = $db->queryForm($sql);

$tot_registros = "SELECT COUNT(*) as total FROM cartao_idoso";
$sql_total_reg = $db->queryForm($tot_registros);
$registros = $sql_total_reg['data'][0]->total ?? 0;

// Verifique se a ação de exclusão foi realizada
if (isset($_GET['delete_id'])) {
    $delete_idoso_id = (int) $_GET['delete_id'];
    $sql_delete = "DELETE FROM cartao_idoso WHERE id = :id";
    $result = $db->queryForm($sql_delete, ['id' => $delete_idoso_id]);
    if ($result['status'] === 'success') {
        header("Location: index.php?rota=cartao-idoso&deleted=true");
        exit(); 
    } else {
        $error_message = 'Erro ao excluir: ' . $result['data'];
        error_log($error_message);
        echo 'Erro ao excluir. Por favor, tente novamente.';
    }
}

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

  <?php if (isset($_GET['deleted']) && $_GET['deleted'] === 'true'): ?>
      <div class="bg-green-500 text-white p-4 rounded-lg mt-4 mb-4 text-center">
          Dados excluídos com sucesso!
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
        <th class="text-yellow-500">ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Data Nasc</th>
        <th class="text-yellow-500">Nº Reg</th>
        <th class="text-yellow-500">STATUS</th>
        <th>RG</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php 
        if (is_array($result['data'])){
          foreach ($result['data'] as $row){
            $id = htmlspecialchars($row->id);
            $nome_idoso = htmlspecialchars($row->nome_idoso);
            // data de nascimento dentro do modal
            $nasc_idoso = htmlspecialchars($row->nascimento_idoso);
            $genero_idoso = htmlspecialchars($row->genero_idoso);
            $endereco_idoso = htmlspecialchars($row->endereco_idoso);
            $num_end_idoso = htmlspecialchars($row->numero_endereco_idoso);
            $complemento_idoso = htmlspecialchars($row->complemento_idoso);
            $bairro_idoso = htmlspecialchars($row->bairro_idoso);
            $cep_idoso = htmlspecialchars($row->cep_idoso);
            $cidade_idoso = htmlspecialchars($row->cidade_idoso);
            $uf_idoso = htmlspecialchars($row->uf_idoso);
            $telefone_idoso = htmlspecialchars($row->telefone_idoso);
            $telefone_idoso = htmlspecialchars($row->telefone_idoso);
            $rg_idoso = htmlspecialchars($row->rg_idoso);
            $expedicao_idoso = htmlspecialchars($row->data_expedicao_idoso);
            $expedido_idoso = htmlspecialchars($row->expedido_idoso);
            $cnh_idoso = htmlspecialchars($row->cnh_idoso);
            $validade_cnh_idoso = htmlspecialchars($row->validade_cnh_idoso ?? '');
            $email_idoso = htmlspecialchars($row->email_idoso);

            // dados do representante
            $nome_representante = htmlspecialchars($row->nome_representante ?? '');
            $email_representante = htmlspecialchars($row->email_representante ?? '');
            $end_representante = htmlspecialchars($row->endereco_representante ?? '');
            $num_end_representante = htmlspecialchars($row->numero_endereco_representante ?? '');
            $complemento_representante = htmlspecialchars($row->complemento_representante ?? '');
            $bairro_representante = htmlspecialchars($row->bairro_representante ?? '');
            $cep_representante = htmlspecialchars($row->cep_representante ?? '');
            $cidade_representante = htmlspecialchars($row->cidade_representante ?? '');
            $uf_representante = htmlspecialchars($row->uf_representante ?? '');
            $telefone_representante = htmlspecialchars($row->telefone_representante ?? '');
            $rg_representante = htmlspecialchars($row->rg_representante ?? '');
            $expedicao_representante = htmlspecialchars($row->data_expedicao_representante ?? '');
            $expedido_representante = htmlspecialchars($row->expedido_representante ?? '');

            // Data na tabela
            $nascimento_idoso = htmlspecialchars($row->nascimento_idoso);
            $nascimento_idoso = date('d/m/Y', strtotime($nascimento_idoso));

            echo "
              <tr class='text-lg p-4 mb-3'>
                <td class='text-center' >$id</td>
                <td class='text-center' >$nome_idoso</td>
                <td class='text-center' >$telefone_idoso</td>
                <td class='text-center' >$nascimento_idoso</td>
                <td class='text-center p-5 bg-red-300 rounded-md'>0</td>
                <td class='text-center p-5 bg-red-300 rounded-md'>NÃO EMITIDO</td>
                <td class='text-center' >$rg_idoso</td>
                <td class='text-white font-bold'>
                  <button 

                  data-id='$id' 
                  data-nome='$nome_idoso'
                  data-nascimento='$nasc_idoso'
                  data-genero='$genero_idoso'
                  data-endereco='$endereco_idoso'
                  data-num_endereco='$num_end_idoso'
                  data-complemento_idoso='$complemento_idoso'
                  data-bairro='$bairro_idoso'
                  data-cep='$cep_idoso'
                  data-cidade='$cidade_idoso'
                  data-uf='$uf_idoso'
                  data-telefone='$telefone_idoso'
                  data-rg='$rg_idoso'
                  data-expedicao='$expedicao_idoso'
                  data-expedido='$expedido_idoso'
                  data-cnh='$cnh_idoso'
                  data-validade_cnh='$validade_cnh_idoso'
                  data-email='$email_idoso'
                  
                  data-nome_representante='$nome_representante'
                  data-email_representante='$email_representante'
                  data-end_representante='$end_representante'
                  data-num_end_representante='$num_end_representante'
                  data-complemento_representante='$complemento_representante'
                  data-bairro_representante='$bairro_representante'
                  data-cep_representante='$cep_representante'
                  data-cidade_representante='$cidade_representante'
                  data-uf_representante='$uf_representante'
                  data-telefone_representante='$telefone_representante'
                  data-rg_representante='$rg_representante'
                  data-expedicao_representante='$expedicao_representante'
                  data-expedido_representante='$expedido_representante'

                  data-copia_rg='" . base64_encode($row->copia_rg_idoso) . "'

                  data-modal-target='edit-idoso-modal' data-modal-toggle='edit-idoso-modal' class='edit-idoso-btn border-2 
                  border-yellow-500 
                  rounded-sm
                  p-2 
                  text-yellow-500 
                  hover:bg-yellow-500 
                  hover:dark:text-white 
                  duration-150 
                  cursor-pointer'>
                  <i class='fa-solid fa-pencil'></i>
                  </button>
                  
                  <button
                  data-id='$id'
                  data-nome='". htmlspecialchars($nome_idoso, ENT_QUOTES) ."'
                  data-modal-target='delete-modal' data-modal-toggle='delete-modal' class='border-2 border-red-500 rounded-sm p-2 text-red-500 hover:dark:bg-red-500 hover:text-white duration-150 cursor-pointer'>
                  <i class='fa-solid fa-xmark'></i></button>
                </td>
              </tr>
            ";
          } 
        } else {
          echo "<tr><td colspan='7'>Nenhum registro encontrado</td></tr>";
        }          
      ?>
    </tbody>
  </table>

  <div class="flex row justify-center text-3xl gap-4 p-2 mb-4">   

    <?php // Botão Anterior
    if ($page > 1): ?>
        <a class="rounded-l-lg border-2 border-gray-400 p-2 text-gray-800 hover:bg-gray-400 hover:text-white duration-100" 
           href="index.php?rota=cartao-idoso&page=<?= $page - 1 ?>">
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
           href="index.php?rota=cartao-idoso&page=<?= $i ?>">
            <?= str_pad($i, 2, '0', STR_PAD_LEFT) ?>
        </a>
    <?php endfor; ?>

    <?php // Botão Próximo
    if ($page < $total_pages): ?>
        <a class="rounded-r-lg border-2 border-gray-400 p-2 text-gray-800 hover:bg-gray-400 hover:text-white duration-100" 
           href="index.php?rota=cartao-idoso&page=<?= $page + 1 ?>">
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
  include 'modals/modalIdoso.php';
  include 'modals/deleteModalIdoso.php';
?>

