<main class="main-table">
  <h1>Cartão Deficiente - Cancelamento do Cartão</h1>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>RG</th>
        <th>Motivo do Cancelamento</th>
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
    { id: 1, rg: '123456', motivo: 'Porque eu quero seu corno' },
    { id: 2, rg: '123456', motivo: 'Porque eu quero seu corno' },
    { id: 3, rg: '123456', motivo: 'Porque eu quero seu corno' },
    { id: 4, rg: '123456', motivo: 'Porque eu quero seu corno' },
    { id: 5, rg: '123456', motivo: 'Porque eu quero seu corno' },
    { id: 6, rg: '123456', motivo: 'Porque eu quero seu corno' },
    { id: 7, rg: '123456', motivo: 'Porque eu quero seu corno' },
    { id: 8, rg: '123456', motivo: 'Porque eu quero seu corno' },
    { id: 9, rg: '123456', motivo: 'Porque eu quero seu corno' },
    { id: 10, rg: '123456', motivo: 'Porque eu quero seu corno' },
    { id: 11, rg: '123456', motivo: 'Porque eu quero seu corno' },
    { id: 12, rg: '123456', motivo: 'Porque eu quero seu corno' },
    { id: 13, rg: '123456', motivo: 'Porque eu quero seu corno' },
    { id: 14, rg: '123456', motivo: 'Porque eu quero seu corno' },
    { id: 15, rg: '123456', motivo: 'Porque eu quero seu corno' },
  ];

  data.forEach((item) => {
    const row = document.createElement('tr');
    row.innerHTML = `
      <td>${item.id}</td>
      <td>${item.rg}</td>
      <td>${item.motivo}</td>
      <td>
        <button class="edit-btn">Editar</button>
        <button class="view-btn">Visualizar</button>
        <button class="delete-btn">Excluir</button>
      </td>
    `;
    tableBody.appendChild(row);
  });
</script>
