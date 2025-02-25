<main class="main-table animate__animated animate__fadeIn">
  <h1>Cartões do Idoso</h1>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Data Nasc</th>
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
    { id: 1, nome: 'Idoso da Silva', telefone: '123456789', dataNasc: '2020-01-01', rg: '1234567890' },
    { id: 2, nome: 'Idoso da Silva', telefone: '123456789', dataNasc: '2020-01-01', rg: '1234567890' },
    { id: 3, nome: 'Idoso da Silva', telefone: '123456789', dataNasc: '2020-01-01', rg: '1234567890' },
    { id: 4, nome: 'Idoso da Silva', telefone: '123456789', dataNasc: '2020-01-01', rg: '1234567890' },
    { id: 5, nome: 'Idoso da Silva', telefone: '123456789', dataNasc: '2020-01-01', rg: '1234567890' },
    { id: 6, nome: 'Idoso da Silva', telefone: '123456789', dataNasc: '2020-01-01', rg: '1234567890' },
    { id: 7, nome: 'Idoso da Silva', telefone: '123456789', dataNasc: '2020-01-01', rg: '1234567890' },
    { id: 8, nome: 'Idoso da Silva', telefone: '123456789', dataNasc: '2020-01-01', rg: '1234567890' },
    { id: 9, nome: 'Idoso da Silva', telefone: '123456789', dataNasc: '2020-01-01', rg: '1234567890' },
    { id: 10, nome: 'Idoso da Silva', telefone: '123456789', dataNasc: '2020-01-01', rg: '1234567890' },
    { id: 11, nome: 'Idoso da Silva', telefone: '123456789', dataNasc: '2020-01-01', rg: '1234567890' },
    { id: 12, nome: 'Idoso da Silva', telefone: '123456789', dataNasc: '2020-01-01', rg: '1234567890' },
    { id: 13, nome: 'Idoso da Silva', telefone: '123456789', dataNasc: '2020-01-01', rg: '1234567890' },
    { id: 14, nome: 'Idoso da Silva', telefone: '123456789', dataNasc: '2020-01-01', rg: '1234567890' },
    { id: 15, nome: 'Idoso da Silva', telefone: '123456789', dataNasc: '2020-01-01', rg: '1234567890' },
    { id: 16, nome: 'Idoso da Silva', telefone: '123456789', dataNasc: '2020-01-01', rg: '1234567890' },
    { id: 17, nome: 'Idoso da Silva', telefone: '123456789', dataNasc: '2020-01-01', rg: '1234567890' },
  ];

  data.forEach((item) => {
    const row = document.createElement('tr');
    row.innerHTML = `
      <td>${item.id}</td>
      <td>${item.nome}</td>
      <td>${item.telefone}</td>
      <td>${item.dataNasc}</td>
      <td>${item.rg}</td>
      <td>
        <button class="edit-btn">Editar</button>
        <button class="view-btn">Visualizar</button>
        <button class="delete-btn">Excluir</button>
      </td>
    `;
    tableBody.appendChild(row);
  });
</script>