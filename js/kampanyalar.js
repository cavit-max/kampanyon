var toggleIcons = document.querySelectorAll(".toggle-icon");

for (var i = 0; i < toggleIcons.length; i++) {
  toggleIcons[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.parentNode.nextElementSibling;
    if (content) {
      if (content.style.display === "block") {
        content.style.display = "none";
      } else {
        content.style.display = "block";
      }
    }
  });
}



