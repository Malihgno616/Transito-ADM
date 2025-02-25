<main class="main-table animate__animated animate__fadeIn">
  <h1>Contatos</h1>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody id="contacts-table-body">
      
    </tbody>
  </table>
</main>

<script>
  const contacts = [
    { id: 1, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 2, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 3, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 4, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 5, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 6, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 7, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 8, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 9, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 10, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 11, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 12, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 13, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 14, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 15, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 16, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 17, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 18, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 19, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 20, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 21, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 22, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 23, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 24, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 25, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 26, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 27, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 28, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 29, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' },
    { id: 30, nome: 'Alfreds Futterkiste', email: 'maria.anders@example.com', mensagem: 'Germany', telefone: '123456789' }
  ];
  
  function populateTable() {
    const tableBody = document.getElementById('contacts-table-body');
    tableBody.innerHTML = '';
    contacts.forEach((contact) => {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>${contact.id}</td>
        <td>${contact.nome}</td>
        <td>${contact.email}</td>
        <td>${contact.telefone}</td>
        <td>
          <button class="edit-btn" data-id="${contact.id}">Editar</button>
          <button class="view-btn" data-id="${contact.id}">Visualizar</button>
          <button class="delete-btn" data-id="${contact.id}">Excluir</button>
        </td>
      `;
      tableBody.appendChild(row);
    });
  }
  
  function addEventListeners() {
    const editButtons = document.querySelectorAll('.edit-btn');
    const viewButtons = document.querySelectorAll('.view-btn');
    const deleteButtons = document.querySelectorAll('.delete-btn');

    editButtons.forEach((button) => {
      button.addEventListener('click', () => {
        const id = button.getAttribute('data-id');
        const contact = contacts.find((contact) => contact.id === parseInt(id));
        console.log(contact);
      });
    });

    viewButtons.forEach((button) => {
      button.addEventListener('click', () => {
        const id = button.getAttribute('data-id');
        const contact = contacts.find((contact) => contact.id === parseInt(id));
        console.log(contact);
      });
    });

    deleteButtons.forEach((button) => {
      button.addEventListener('click', () => {
        const id = button.getAttribute('data-id');
        const contactIndex = contacts.findIndex((contact) => contact.id === parseInt(id));
        if (contactIndex !== -1) {
          contacts.splice(contactIndex, 1);
          populateTable();
        }
      });
    });
  }
  
  populateTable();
  addEventListeners();
</script>
