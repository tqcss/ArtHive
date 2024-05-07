let menu_button = document.getElementById("hamburger-menu");
let dropdown = document.querySelector(".dropdown");
let menu_isOpen = false;

function toggleMenu() {
  menu_isOpen = !menu_isOpen;
  console.log("toggled");

  if (menu_isOpen) {
    menu_button.children[0].id = "hambar1";
    menu_button.children[1].id = "hambar2";
    dropdown.classList.add("_visible");
  } else {
    menu_button.children[0].id = null;
    menu_button.children[1].id = null;
    dropdown.classList.remove("_visible");
  }
}
