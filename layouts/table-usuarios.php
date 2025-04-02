<?php 

require_once '../database/db.php';

$db = new Db();

$sql = "SELECT id, user_login FROM login_user ORDER BY id ";

$result = $db->query($sql);

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
  ">Usuários</h1>

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
  mb-4
  justify-center 
  items-center 
  m-auto 
  duration-100
  max-md:text-xl
  max-md:w-20
  max-md:h-5
  "
  onclick="window.location.href='index.php?rota=home'">Voltar</button>
  
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
  >Cadastrar</button>

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
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
        <?php 
          if (is_array($result['data'])){         
            foreach ($result['data'] as $row){
              $id = htmlspecialchars($row->id);
              $user_login = htmlspecialchars($row->user_login);
              echo "
                <tr class='text-lg p-4 mb-3'>
                  <td class='text-center'>$id</td>
                  <td class='text-center'>$user_login</td>
                  <td>
                    <button class='border-2 border-yellow-500 rounded-sm p-2 text-yellow-500 hover:bg-yellow-500 hover:dark:text-white duration-150 cursor-pointer' ><i class='fa-solid fa-pencil'></i></button>
                    <button class='border-2 border-red-500 rounded-sm p-2 text-red-500 hover:dark:bg-red-500 hover:text-white duration-150 cursor-pointer'>
                  <i class='fa-solid fa-xmark'></i></button>
                  </td>
                </tr>
              ";
            }
          } else {
            echo "
              <tr>
                <td colspan='3'>Nenhum usuário encontrado</td>
              </tr>
            ";
          }     
        ?>
    </tbody>
  </table>
</main>
