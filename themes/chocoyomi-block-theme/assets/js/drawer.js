const menu = document.getElementById('drawer-menu');
const button = document.getElementsByClassName('toggle-drawer-menu-button');

for (let index = 0; index < button.length; index++) {
  button[index].addEventListener('click', function() {
    menu.classList.toggle('hide-drawer-menu')
  })
}