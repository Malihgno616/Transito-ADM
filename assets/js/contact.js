document.addEventListener("DOMContentLoaded", function () {
  // Captura todos os botões de visualização
  document.querySelectorAll(".view-button").forEach((button) => {
    button.addEventListener("click", function () {
      // Obtém os dados dos atributos
      const id = this.dataset.id;
      const nome = this.dataset.nome;
      const mensagem = this.dataset.mensagem;

      // Preenche o modal
      document.getElementById("modal-id").textContent = id;
      document.getElementById("modal-nome").textContent = nome;
      document.getElementById("modal-mensagem").textContent = mensagem;
    });
  });
});

// Evento de clique no botão de excluir
document
  .querySelectorAll("[data-modal-target='delete-modal']")
  .forEach((button) => {
    button.addEventListener("click", function () {
      // Pegue o ID do contato do atributo data-id
      const contactId = this.getAttribute("data-id");

      // Defina o ID no campo hidden do formulário dentro do modal
      document.querySelector("#delete-modal form").action =
        "index.php?rota=contatos&delete_id=" + contactId;
    });
  });
