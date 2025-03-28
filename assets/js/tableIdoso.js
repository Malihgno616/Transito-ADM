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

    // campos do representante
    modal.querySelector("#nome-representante").value =
      button.dataset.nome_representante;
    modal.querySelector("#email-representante").value =
      button.dataset.email_representante;
    modal.querySelector("#end-representante").value =
      button.dataset.end_representante;
    modal.querySelector("#num-end-representante").value =
      button.dataset.num_end_representante;
    modal.querySelector("#complemento-representante").value =
      button.dataset.complemento_representante;
    modal.querySelector("#bairro-representante").value =
      button.dataset.bairro_representante;
    modal.querySelector("#cep-representante").value =
      button.dataset.cep_representante;
    modal.querySelector("#cidade-representante").value =
      button.dataset.cidade_representante;
    modal.querySelector("#uf-representante").value =
      button.dataset.uf_representante;
    modal.querySelector("#telefone-representante").value =
      button.dataset.telefone_representante;
    modal.querySelector("#rg-representante").value =
      button.dataset.rg_representante;
    modal.querySelector("#expedicao-representante").value =
      button.dataset.expedicao_representante;
    modal.querySelector("#expedido-representante").value =
      button.dataset.expedido_representante;
    
  });
});

document
  .querySelectorAll("[data-modal-target='delete-modal']")
  .forEach((button) => {
    button.addEventListener("click", function () {
      // 'this' aqui se refere ao botão clicado
      const idosoId = button.getAttribute("data-id"); // Usando 'button' diretamente

      // Corrigindo o seletor do modal
      document.querySelector("#delete-modal form").action =
        "index.php?rota=cartao-idoso&delete_id=" + idosoId;
    });
  });
