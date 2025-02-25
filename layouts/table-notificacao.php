<main class="main-table">
  <h1>Notificações</h1>
  <table>
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
        <button class="edit-btn" title="Editar">Editar</button>
        <button class="view-btn" title="Visualizar">Visualizar</button>
        <button class="delete-btn" title="Excluir">Excluir</button>
      </td>
    `;
    tableBody.appendChild(row);
  });
</script>