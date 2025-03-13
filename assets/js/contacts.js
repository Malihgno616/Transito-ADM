const tbody = document.getElementById("list-contact");

// paginação
const listContacts = async (page) => {
  const data = await fetch("./index.php?rota=contatos&page=" + page);
  const response = await data.text();
  tbody.innerHTML = response;
};

listContacts(1);
