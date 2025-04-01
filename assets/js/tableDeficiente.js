document.querySelectorAll(".edit-deficiente-btn").forEach((button) => {
  button.addEventListener("click", () => {
    const modal = document.getElementById("edit-deficiente-modal");

    // informações do beneficiário
    modal.querySelector("#id-beneficiario").textContent =
      button.dataset.id_beneficiario;
    modal.querySelector("#nome-beneficiario").value = button.dataset.nome_bene;
    modal.querySelector("#nascimento-beneficiario").value =
      button.dataset.nasc_bene;
    modal.querySelector("#genero-beneficiario").value =
      button.dataset.genero_bene;
    modal.querySelector("#end-beneficiario").value = button.dataset.end_bene;
    modal.querySelector("#num-endereco-beneficiario").value =
      button.dataset.num_end_bene;
    modal.querySelector("#complemento-beneficiario").value =
      button.dataset.complemento_bene;
    modal.querySelector("#bairro-beneficiario").value =
      button.dataset.bairro_bene;
    modal.querySelector("#cep-beneficiario").value = button.dataset.cep_bene;
    modal.querySelector("#cidade-beneficiario").value =
      button.dataset.cidade_bene;
    modal.querySelector("#uf-beneficiario").value = button.dataset.uf_bene;
    modal.querySelector("#telefone-beneficiario").value =
      button.dataset.telefone_bene;
    modal.querySelector("#rg-beneficiario").value = button.dataset.rg_bene;
    modal.querySelector("#expedicao-beneficiario").value =
      button.dataset.expedicao_bene;
    modal.querySelector("#expedido-beneficiario").value =
      button.dataset.expedido_bene;
    modal.querySelector("#cnh-beneficiario").value = button.dataset.cnh_bene;
    modal.querySelector("#validade-cnh-beneficiario").value =
      button.dataset.val_cnh_bene;
    modal.querySelector("#email-beneficiario").value =
      button.dataset.email_bene;

    // Informações do médico
    modal.querySelector("#nome-medico").value = button.dataset.nome_medico;
    modal.querySelector("#registro-crm").value = button.dataset.crm_medico;
    modal.querySelector("#telefone-medico").value =
      button.dataset.telefone_medico;
    modal.querySelector("#local-atendimento").value =
      button.dataset.endereco_medico;

    // Informações médicas
    const deficienciasArray = button.dataset.deficiencias_ambulatorias
      ? button.dataset.deficiencias_ambulatorias.split(/\s*,\s*/)
      : [];
    modal.querySelectorAll(".deficiencias").forEach((checkbox) => {
      console.log("Checkbox ID:", checkbox.id);
      checkbox.checked = deficienciasArray.includes(checkbox.id);
      console.log("Checkbox checked:", checkbox.checked);
    });
  });
});
