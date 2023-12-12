const classrooms = document.querySelectorAll(".green");
const dialog = document.getElementById("dialog");
const timerDialog = document.getElementById("timer-dialog");
const close = document.querySelector(".close-button");
const close2 = document.querySelector(".close-button2");
const submits = document.querySelector(".submits");
const submittedSvg = document.querySelector(".submits-svg");
const closedSvg = document.querySelector(".close-svg");
const send = document.querySelector(".send");

classrooms.forEach((classroom) => {
  classroom.addEventListener("click", () => {
    dialog.showModal();
  });
});

close.addEventListener("click", () => {
  dialog.close();
});
close2.addEventListener("click", () => {
  timerDialog.close();
});

submits.addEventListener("click", (event) => {
  event.preventDefault();
  setTimeout(() => {
    timerDialog.showModal();
  }, 500);
});

submittedSvg.addEventListener("click", () => {
  submittedSvg.classList.toggle("submitted-svg");
  closedSvg.classList.toggle("closed-svg");
  
});

send.addEventListener("click", () => {
  dialog.close();
  timerDialog.close();
});



