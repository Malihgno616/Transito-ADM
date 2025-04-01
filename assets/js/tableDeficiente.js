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
      checkbox.checked = deficienciasArray.includes(checkbox.id);
    });

    const restricaoValue = button.dataset.restricao_medica;
    modal.querySelectorAll('input[name="restricao"]').forEach((radio) => {
      radio.checked = radio.value === restricaoValue;
    });

    modal.querySelector("#data-inicio").value = button.dataset.inicio;
    modal.querySelector("#data-fim").value = button.dataset.fim;
    modal.querySelector("#descricao-cid").value = button.dataset.descricao_cid;

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
