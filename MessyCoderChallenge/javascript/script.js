// Functie voor dark-mode toggle
function toggleDarkMode() {
  document.body.classList.toggle('dark-mode');
}

// Zoek de knop en koppel de click-event
const toggleButton = document.querySelector(".dark-toggle");
if (toggleButton) {
  toggleButton.addEventListener("click", toggleDarkMode);
} else {
  console.error("Dark-mode knop niet gevonden");
}