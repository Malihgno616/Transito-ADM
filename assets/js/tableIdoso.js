document.querySelectorAll(".edit-idoso-btn").forEach((button) => {
  button.addEventListener("click", () => {
    const modal = document.getElementById("edit-idoso-modal");

    // Preenche o ID
    modal.querySelector(".text-yellow-700").textContent = button.dataset.id;

    // Preenche os campos do idoso
    modal.querySelector("#nome-idoso").value = button.dataset.nome;
    modal.querySelector("#nasc-idoso").value = button.dataset.nascimento;
    modal.querySelector("#genero-idoso").value = button.dataset.genero;
    modal.querySelector("#end-idoso").value = button.dataset.endereco;
    modal.querySelector("#num-end-idoso").value = button.dataset.num_endereco;
    modal.querySelector("#complemento-idoso").value =
      button.dataset.complemento_idoso;
    modal.querySelector("#bairro-idoso").value = button.dataset.bairro;
    modal.querySelector("#cep-idoso").value = button.dataset.cep;
    modal.querySelector("#cidade-idoso").value = button.dataset.cidade;
    modal.querySelector("#uf-idoso").value = button.dataset.uf;
    modal.querySelector("#telefone-idoso").value = button.dataset.telefone;
    modal.querySelector("#rg-idoso").value = button.dataset.rg;
    modal.querySelector("#expedicao-idoso").value = button.dataset.expedicao;
    modal.querySelector("#expedido-idoso").value = button.dataset.expedido;
    modal.querySelector("#cnh-idoso").value = button.dataset.cnh;
    modal.querySelector("#validade-cnh-idoso").value =
      button.dataset.validade_cnh;
    modal.querySelector("#email-idoso").value = button.dataset.email;
  });
});
