// Sidebar menu handling
const allSideMenu = document.querySelectorAll("#sidebar .side-menu.top li a");

allSideMenu.forEach((item) => {
  const li = item.parentElement;

  item.addEventListener("click", function () {
    allSideMenu.forEach((i) => {
      i.parentElement.classList.remove("active");
    });
    li.classList.add("active");
  });
});

// Toggle Sidebar
const menuBar = document.querySelector("#content nav .bx.bx-menu");
const sidebar = document.getElementById("sidebar");

menuBar.addEventListener("click", function () {
  sidebar.classList.toggle("hide");
});

// Handle Search Form
const searchButton = document.querySelector(
  "#content nav form .form-input button"
);
const searchButtonIcon = searchButton.querySelector(".bx");
const searchForm = document.querySelector("#content nav form");

searchButton.addEventListener("click", function (e) {
  if (window.innerWidth < 576) {
    e.preventDefault();
    searchForm.classList.toggle("show");
    searchButtonIcon.classList.toggle("bx-search");
    searchButtonIcon.classList.toggle("bx-x");
  }
});

if (window.innerWidth < 768) {
  sidebar.classList.add("hide");
} else if (window.innerWidth > 576) {
  searchButtonIcon.classList.add("bx-search");
  searchForm.classList.remove("show");
}

window.addEventListener("resize", function () {
  if (this.innerWidth > 576) {
    searchButtonIcon.classList.add("bx-search");
    searchForm.classList.remove("show");
  }
});

// Dark Mode Toggle
const switchMode = document.getElementById("switch-mode");

switchMode.addEventListener("change", function () {
  document.body.classList.toggle("dark", this.checked);
});

// function updateReservationCount() {
//   var reservationCountElement = document.getElementById("reservationCount");
//   var currentCount = parseInt(reservationCountElement.innerText);
//   var newCount = currentCount + 1;
//   reservationCountElement.innerText = newCount;
// }

// window.addEventListener("DOMContentLoaded", function () {
//   updateReservationCount();
// });

document
  .getElementById("reservationForm")
  .addEventListener("submit", function () {
    updateReservationCount();
  });
