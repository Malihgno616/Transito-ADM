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
  ">Notificações</h1>
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
  " >
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Categoria</th>
        <th>Data</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody id="notifications-table-body">
    </tbody>
  </table>
</main>

<script>
  const notifications = [
    { id: 1, name: 'Nome do usuário', description: 'Descrição', category: 'Sei la taligado?', date: '2022-01-01' },
    { id: 2, name: 'Nome do usuário', description: 'Descrição', category: 'Sei la taligado?', date: '2022-01-01' },
    { id: 3, name: 'Nome do usuário', description: 'Descrição', category: 'Sei la taligado?', date: '2022-01-01' },
    { id: 4, name: 'Nome do usuário', description: 'Descrição', category: 'Sei la taligado?', date: '2022-01-01' },
    { id: 5, name: 'Nome do usuário', description: 'Descrição', category: 'Sei la taligado?', date: '2022-01-01' },
    { id: 6, name: 'Nome do usuário', description: 'Descrição', category: 'Sei la taligado?', date: '2022-01-01' },
    { id: 7, name: 'Nome do usuário', description: 'Descrição', category: 'Sei la taligado?', date: '2022-01-01' },
    { id: 8, name: 'Nome do usuário', description: 'Descrição', category: 'Sei la taligado?', date: '2022-01-01' },
    { id: 9, name: 'Nome do usuário', description: 'Descrição', category: 'Sei la taligado?', date: '2022-01-01' },
    { id: 10, name: 'Nome do usuário', description: 'Descrição', category: 'Sei la taligado?', date: '2022-01-01' },
  ];

  const tableBody = document.getElementById('notifications-table-body');

  notifications.forEach(notification => {
    const row = document.createElement('tr');
    row.innerHTML = `
      <td data-label="Id">${notification.id}</td>
      <td data-label="Nome">${notification.name}</td>
      <td data-label="Descrição">${notification.description}</td>
      <td data-label="Categoria">${notification.category}</td>
      <td data-label="Data">${notification.date}</td>
      <td data-label="Ações">
        <button class='border-2 border-red-500 rounded-sm p-2 text-red-500 hover:dark:bg-red-500 hover:text-white duration-150 cursor-pointer' title="Excluir">Excluir</button>
      </td>
    `;
    tableBody.appendChild(row);
  });
</script>