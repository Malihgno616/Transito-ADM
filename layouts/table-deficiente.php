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

$page = filter_input(INPUT_GET, "page",FILTER_SANITIZE_NUMBER_INT) ?: 1;
$per_page = 10;
$offset = ($page - 1) * $per_page;
$sql_count = "SELECT COUNT(*) as total FROM cartao_deficiente";
$result_count = $db->queryForm($sql_count);
$total = $result_count['data'][0]->total ?? 0;
$total_pages = ceil($total / $per_page);

$sql = "SELECT * from cartao_deficiente ORDER BY id DESC LIMIT $per_page OFFSET $offset";

$result = $db->queryForm($sql);
$tot_registros = "SELECT COUNT(*) as total FROM cartao_deficiente";
$sql_total_reg = $db->queryForm($tot_registros);
$registros = $sql_total_reg['data'][0]->total ?? 0;

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
  ">Cartões do Deficiente</h1>

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
        <th class="text-yellow-500">Nº Reg</th>
        <th class="text-yellow-500">Status</th>
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
            $nasc_beneficiario = htmlspecialchars($row->nasc_beneficiario);
            $genero_beneficiario = htmlspecialchars($row->genero_beneficiario);
            $end_beneficiario = htmlspecialchars($row->endereco_beneficiario);
            $num_end_beneficiario = htmlspecialchars($row->numero_beneficiario);
            $complemento_beneficiario = htmlspecialchars($row->complemento_beneficiario ?? '');
            $bairro_beneficiario = htmlspecialchars($row->bairro_beneficiario);
            $cep_beneficiario = htmlspecialchars($row->cep_beneficiario);
            $cidade_beneficiario = htmlspecialchars($row->cidade_beneficiario);
            $uf_beneficiario = htmlspecialchars($row->uf_beneficiario);
            $telefone_beneficiario = htmlspecialchars($row->telefone_beneficiario);
            $rg_beneficiario = htmlspecialchars($row->rg_beneficiario);
            $expedicao_beneficiario = htmlspecialchars($row->expedicao_beneficiario);
            $expedido_beneficiario = htmlspecialchars($row->expedido_beneficiario);
            $cnh_beneficiaro = htmlspecialchars($row->cnh_beneficiario ?? '');
            $validade_cnh_beneficiario = htmlspecialchars($row->validade_cnh_beneficiario ?? '');
            $email_beneficiario = htmlspecialchars($row->email_beneficiario ?? '');
            
            // var_dump($row);

            echo "
              <tr class='text-lg p-4 mb-3'>
                <td class='text-center' >$id</td>
                <td class='text-center' >$nome_beneficiario</td>
                <td class='text-center' >$telefone_beneficiario</td>
                <td class='text-center p-5 bg-red-300 rounded-md'>0</td>
                <td class='text-center p-5 bg-red-300 rounded-md'>NÃO EMITIDO</td>
                <td class='text-center' >$rg_beneficiario</td>
                <td class='text-white font-bold'>
                  <button 
                  data-id_beneficiario='$id'
                  data-nome_bene = '$nome_beneficiario'
                  data-nasc_bene = '$nasc_beneficiario'
                  data-genero_bene = '$genero_beneficiario'
                  data-end_bene = '$end_beneficiario'
                  data-num_end_bene = '$num_end_beneficiario'
                  data-complemento_bene = '$complemento_beneficiario'
                  data-bairro_bene = '$bairro_beneficiario'
                  data-cep_bene = '$cep_beneficiario'
                  data-cidade_bene = '$cidade_beneficiario'
                  data-uf_bene = '$uf_beneficiario'
                  data-telefone_bene = '$telefone_beneficiario'
                  data-rg_bene = '$rg_beneficiario'
                  data-expedicao_bene = '$expedicao_beneficiario'
                  data-expedido_bene = '$expedido_beneficiario'
                  data-cnh_bene = '$cnh_beneficiaro'
                  data-val_cnh_bene = '$validade_cnh_beneficiario'
                  data-email_bene = '$email_beneficiario'
                  data-modal-target='edit-deficiente-modal' data-modal-toggle='edit-deficiente-modal' class='edit-deficiente-btn border-2 border-yellow-500 rounded-sm p-2 text-yellow-500 hover:bg-yellow-500 hover:dark:text-white duration-150 cursor-pointer'><i class='fa-solid fa-pencil'></i></button>
                  <button data-modal-target='delete-modal-deficiente' data-modal-toggle='delete-modal-deficiente' class='border-2 border-red-500 rounded-sm p-2 text-red-500 hover:dark:bg-red-500 hover:text-white duration-150 cursor-pointer'>
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
           href="index.php?rota=cartao-deficiente&page=<?= $page - 1 ?>">
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
           href="index.php?rota=cartao-deficiente&page=<?= $i ?>">
            <?= str_pad($i, 2, '0', STR_PAD_LEFT) ?>
        </a>
    <?php endfor; ?>

    <?php // Botão Próximo
    if ($page < $total_pages): ?>
        <a class="rounded-r-lg border-2 border-gray-400 p-2 text-gray-800 hover:bg-gray-400 hover:text-white duration-100" 
           href="index.php?rota=cartao-deficiente&page=<?= $page + 1 ?>">
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
include 'modals/modalDeficiente.php';
include 'modals/deleteModalDeficiente.php';
?>