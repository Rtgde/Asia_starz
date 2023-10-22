const openModalBtn = document.querySelectorAll(".vot");
const closeModalBtn = document.querySelector(".modal-close-btn");
const modal = document.querySelector(".modal");

const openModal = () => {
  modal.classList.add("show-modal");
};

const closeModal = () => {
  modal.classList.remove("show-modal");
};

openModalBtn.forEach((button) => {
  button.addEventListener("click", openModal);
});

closeModalBtn.addEventListener("click", closeModal);
