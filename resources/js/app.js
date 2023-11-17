import './bootstrap';

const registerButton = document.getElementById("register");
const loginButton = document.getElementById("login");
const container = document.getElementById("container");

registerButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

loginButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});

console.log("tes");

document.addEventListener('DOMContentLoaded', function() {
    var menuButton1 = document.getElementById('categories-button');
    var menuButton2 = document.getElementById('type-button');
    var menuButton3 = document.getElementById('price-range-button');
    var dropdownMenu1 = document.querySelector('#category-dd');
    var dropdownMenu2 = document.querySelector('#type-dd');
    var dropdownMenu3 = document.querySelector('#price-range-dd');

    menuButton1.addEventListener('click', function() { dropdownMenu1.classList.toggle('hidden'); });
    menuButton2.addEventListener('click', function() { dropdownMenu2.classList.toggle('hidden'); });
    menuButton3.addEventListener('click', function() { dropdownMenu3.classList.toggle('hidden'); });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        var isClickInside = dropdownMenu1.contains(event.target) || menuButton1.contains(event.target);
        if (!isClickInside) { dropdownMenu1.classList.add('hidden');}
    });

    document.addEventListener('click', function(event) {
        var isClickInside2 = dropdownMenu2.contains(event.target) || menuButton2.contains(event.target);
        if (!isClickInside2) { dropdownMenu2.classList.add('hidden');}
    });

    document.addEventListener('click', function(event) {
        var isClickInside3 = dropdownMenu3.contains(event.target) || menuButton3.contains(event.target);
        if (!isClickInside3) { dropdownMenu3.classList.add('hidden');}
    });
});
