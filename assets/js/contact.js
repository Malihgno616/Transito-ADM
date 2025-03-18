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
