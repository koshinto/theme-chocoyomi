const menu = document.getElementById('drawer-menu');
const button = document.getElementById('toggle-drawer-menu-button');

button.addEventListener('click', function() {
  menu.classList.toggle('hide-drawer-menu');
  button.classList.toggle('active');
})
