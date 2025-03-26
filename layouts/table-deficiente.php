<?php 

include '../database/db-site-transito.php';

$db = new DbForms();

$sql = "SELECT id, nome_beneficiario, telefone_beneficiario, rg_beneficiario from cartao_deficiente ORDER BY id DESC";

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
            $telefone_beneficiario = htmlspecialchars($row->telefone_beneficiario);
            $rg_beneficiario = htmlspecialchars($row->rg_beneficiario);
            echo "
              <tr class='text-lg p-4 mb-3'>
                <td class='text-center' >$id</td>
                <td class='text-center' >$nome_beneficiario</td>
                <td class='text-center' >$telefone_beneficiario</td>
                <td class='text-center p-5 bg-green-300'>00000</td>
                <td class='text-center p-5 bg-green-300'>EMITIDO</td>
                <td class='text-center' >$rg_beneficiario</td>
                <td class='text-white font-bold'>
                  <button data-id='$id' data-modal-target='#' data-modal-toggle='#' class='border-2 border-yellow-500 rounded-sm p-2 text-yellow-500 hover:bg-yellow-500 hover:dark:text-white duration-150 cursor-pointer'><i class='fa-solid fa-pencil'></i></button>
                  <button data-modal-target='#' data-modal-toggle='#' class='border-2 border-red-500 rounded-sm p-2 text-red-500 hover:dark:bg-red-500 hover:text-white duration-150 cursor-pointer'>
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
</main>

