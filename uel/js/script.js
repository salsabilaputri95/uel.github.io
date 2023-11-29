let menu = document.querySelector("#menu-bars");
let navbar = document.querySelector(".navbar");

menu.onclick = () => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
};

window.onscroll = () => {
  menu.classList.remove("fa-times");
  navbar.classList.remove("active");
};

function toggleOptions() {
  var optionsDiv = document.getElementById("options");
  if (optionsDiv.style.display === "block") {
    optionsDiv.style.display = "none";
  } else {
    optionsDiv.style.display = "block";
  }
}

let searchIcon = document.querySelector("#seacrh-icon");
let searchForm = document.querySelector("#search-form");
let closeIcon = document.querySelector("#close");

searchIcon.onclick = () => {
  searchForm.classList.add("active");
};

closeIcon.onclick = () => {
  searchForm.classList.remove("active");
};

var swiper = new Swiper(".home-slider", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  loop: true,
});

//admin
document.addEventListener("DOMContentLoaded", function () {
  var userType = "<?php echo $userType; ?>";
  console.log("User Type:", userType);
  var dashboardLink = document.getElementById("dashboardLink");

  if (userType === "admin") {
    dashboardLink.style.display = "block";
  } else {
    dashboardLink.style.display = "none";
  }
});
