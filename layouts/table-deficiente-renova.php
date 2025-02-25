<main class="main-table animate__animated animate__fadeIn">
  <h1>Cartões do Deficiente - Renovação do cartão</h1>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>RG</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody id="table-body">
    </tbody>
  </table>
</main>

<script>
  const tableBody = document.getElementById('table-body');
  const data = [
    { id: 1, rg: '1234546789' },
    { id: 2, rg: '9876543210' },
    { id: 3, rg: '1111111111' },
    { id: 4, rg: '2222222222' },
    { id: 5, rg: '3333333333' },
    { id: 6, rg: '4444444444' },
    { id: 7, rg: '5555555555' },
    { id: 8, rg: '6666666666' },
    { id: 9, rg: '7777777777' },
    { id: 10, rg: '8888888888' },
    { id: 11, rg: '9999999999' },
    { id: 12, rg: '0000000000' },
    { id: 13, rg: '1234567890' },
    { id: 14, rg: '9876543210' },
    { id: 15, rg: '1111111111' },
    { id: 16, rg: '2222222222' },
    { id: 17, rg: '3333333333' },
    { id: 18, rg: '4444444444' },
    { id: 19, rg: '5555555555' },
    { id: 20, rg: '6666666666' }
  ];

  data.forEach((item, index) => {
    const row = document.createElement('tr');
    row.innerHTML = `
      <td>${item.id}</td>
      <td>${item.rg}</td>
      <td>
        <button class="edit-btn" data-index="${index}">Editar</button>
        <button class="view-btn" data-index="${index}">Visualizar</button>
        <button class="delete-btn" data-index="${index}">Excluir</button>
      </td>
    `;
    tableBody.appendChild(row);
  });

  // Add event listeners to buttons
  const editButtons = document.querySelectorAll('.edit-btn');
  const viewButtons = document.querySelectorAll('.view-btn');
  const deleteButtons = document.querySelectorAll('.delete-btn');

  editButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const index = button.getAttribute('data-index');
      console.log(`Edit button clicked for index ${index}`);
    });
  });

  viewButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const index = button.getAttribute('data-index');
      console.log(`View button clicked for index ${index}`);
    });
  });

  deleteButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const index = button.getAttribute('data-index');
      console.log(`Delete button clicked for index ${index}`);
    });
  });
</script>
