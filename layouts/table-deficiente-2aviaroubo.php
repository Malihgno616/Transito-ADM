<main class="main-table">
  <h1>Segunda Via - Roubo ou Furto</h1>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>RG</th>
        <th>Boletim de Ocorrência</th>
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
    { id: 1, rg: '123456', boletim: 'Boletim 1' },
    { id: 2, rg: '789012', boletim: 'Boletim 2' },
    { id: 3, rg: '345678', boletim: 'Boletim 3' },
    { id: 4, rg: '901234', boletim: 'Boletim 4' },
    { id: 5, rg: '567890', boletim: 'Boletim 5' },
    { id: 6, rg: '234567', boletim: 'Boletim 6' },
    { id: 7, rg: '890123', boletim: 'Boletim 7' },
    { id: 8, rg: '456789', boletim: 'Boletim 8' },
    { id: 9, rg: '678901', boletim: 'Boletim 9' },
    { id: 10, rg: '123456', boletim: 'Boletim 10' },
    { id: 11, rg: '789012', boletim: 'Boletim 11' },
    { id: 12, rg: '345678', boletim: 'Boletim 12' },
    { id: 13, rg: '901234', boletim: 'Boletim 13' },
    { id: 14, rg: '567890', boletim: 'Boletim 14' },
    { id: 15, rg: '234567', boletim: 'Boletim 15' },
    { id: 16, rg: '890123', boletim: 'Boletim 16' },
    { id: 17, rg: '456789', boletim: 'Boletim 17' },
    { id: 18, rg: '678901', boletim: 'Boletim 18' },
    { id: 19, rg: '123456', boletim: 'Boletim 19' },
    { id: 20, rg: '789012', boletim: 'Boletim 20' },
  ];

  data.forEach((item) => {
    const row = document.createElement('tr');
    row.innerHTML = `
      <td>${item.id}</td>
      <td>${item.rg}</td>
      <td>${item.boletim}</td>
      <td>
        <button class="edit-btn" data-id="${item.id}">Editar</button>
        <button class="view-btn" data-id="${item.id}">Vizualizar</button>
        <button class="delete-btn" data-id="${item.id}">Excluir</button>
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
      const id = button.getAttribute('data-id');
      // Edit logic here
      console.log(`Edit button clicked for id ${id}`);
    });
  });

  viewButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const id = button.getAttribute('data-id');
      // View logic here
      console.log(`View button clicked for id ${id}`);
    });
  });

  deleteButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const id = button.getAttribute('data-id');
      // Delete logic here
      console.log(`Delete button clicked for id ${id}`);
    });
  });
</script>
