const menu = document.querySelector('#boton-menu-responsive');
const menuResponsive = document.querySelector('.menu-responsive');
const cerrarMenu = document.querySelector('.cerrar-menu');
menu.addEventListener('click', (e) => {
    console.log(menuResponsive)
    menuResponsive.classList.toggle('menu-responsive-on');
})
cerrarMenu.addEventListener('click', (e) => {
    menuResponsive.classList.toggle('menu-responsive-on');
})