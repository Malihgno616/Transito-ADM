<main class="main-table">
  <h1>Cartão Deficiente - Segunda Via</h1>
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
    { id: 1, rg: '123456' },
    { id: 2, rg: '789012' },
    { id: 3, rg: '345678' },
    { id: 4, rg: '901234' },
    { id: 5, rg: '567890' },
    { id: 6, rg: '234567' },
    { id: 7, rg: '890123' },
    { id: 8, rg: '456789' },
    { id: 9, rg: '678901' },
    { id: 10, rg: '123456' },
    { id: 11, rg: '789012' },
    { id: 12, rg: '345678' },
    { id: 13, rg: '901234' },
    { id: 14, rg: '567890' },
    { id: 15, rg: '234567' },
    { id: 16, rg: '890123' },
    { id: 17, rg: '456789' },
    { id: 18, rg: '678901' },
    { id: 19, rg: '123456' },
    { id: 20, rg: '789012' },
  ];

  data.forEach((item) => {
    const row = document.createElement('tr');
    row.innerHTML = `
      <td>${item.id}</td>
      <td>${item.rg}</td>
      <td>
        <button class="edit-btn">Editar</button>
        <button class="view-btn">Vizualizar</button>
        <button class="delete-btn">Excluir</button>
      </td>
    `;
    tableBody.appendChild(row);
  });
</script>

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
    <tbody >
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>123456</td>
        <td>BO-123</td>
        <td>
          <button class="edit-btn">Editar</button>
          <button class="view-btn">Visualizar</button>
          <button class="delete-btn">Excluir</button>
        </td>
      </tr>
    </tbody>
  </table>
</main>

