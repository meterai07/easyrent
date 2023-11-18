import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
  const registerButton = document.getElementById("register");
  const loginButton = document.getElementById("login");
  const container = document.getElementById("container");

  registerButton.addEventListener("click", () => togglePanel(true));
  loginButton.addEventListener("click", () => togglePanel(false));

  function togglePanel(isRegister) {
    container.classList.toggle("right-panel-active", isRegister);
  }
});

document.addEventListener('DOMContentLoaded', function() {
  const menuButtons = [
    { button: document.getElementById('categories-button'), menu: document.querySelector('#categories-dd') },
    { button: document.getElementById('type-button'), menu: document.querySelector('#type-dd') },
    { button: document.getElementById('price-range-button'), menu: document.querySelector('#price-range-dd') }
  ];

  menuButtons.forEach(({ button, menu }) => {
    button.addEventListener('click', function() {
      menu.classList.toggle('hidden');
    });

    document.addEventListener('click', function(event) {
      const isClickInside = menu.contains(event.target) || button.contains(event.target);
      if (!isClickInside) {
        menu.classList.add('hidden');
      }
    });
  });
});

document.addEventListener('DOMContentLoaded', function() {
  const dropdownButton = document.querySelector('.dropdown-icon');
  const dropdownMenu = document.querySelector('.dropdown-list-item');

  dropdownButton.addEventListener('click', function() {
    dropdownMenu.classList.toggle('hidden');
  });

  document.addEventListener('click', function(event) {
    const isClickInside = dropdownButton.contains(event.target) || dropdownMenu.contains(event.target);
    if (!isClickInside) {
      dropdownMenu.classList.add('hidden');
    }
  });
});

