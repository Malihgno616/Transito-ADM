document.querySelectorAll(".edit-deficiente-btn").forEach((button) => {
  button.addEventListener("click", () => {
    const modal = document.getElementById("edit-deficiente-modal");

    modal.querySelector("#id-beneficiario").textContent =
      button.dataset.id_beneficiario;
  });
});
