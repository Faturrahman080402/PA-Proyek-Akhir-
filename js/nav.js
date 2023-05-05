var navLinks = document.querySelectorAll(".navigation a");
navLinks.forEach(function (link) {
  link.addEventListener("click", function (event) {
    navLinks.forEach(function (link) {
      link.classList.remove("active");
    });

    link.classList.add("active");
  });
});
