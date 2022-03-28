const modalSection = document.querySelector(".modal-section");
const activModal = document.querySelector(".activ-modal");
const modalBtn = document.querySelector("#modalBtn");
const closeBtn = document.querySelector("#modalBtn");
activModal.addEventListener("click", () => {
  modalSection.style.display = "block";
});
closeBtn.addEventListener("click", () => {
  modalSection.style.display = "none";
});

window.addEventListener("click", (e) => {
  e.target == modalSection ? (modalSection.style.display = "none") : "";
});
