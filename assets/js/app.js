document.addEventListener('DOMContentLoaded', function() {
    // scrollNav();
    navegacionFija();
});

function navegacionFija() {
    
    const menuFijo = document.querySelector('.navbar-fijo-Pc');
    const logo = document.querySelector('.logo');
    console.log(logo);
    console.log(menuFijo);
    const observer = new IntersectionObserver( function(entries) {
        if(entries[0].isIntersecting) {
            menuFijo.classList.remove('mover-menu');
            console.log(menuFijo);
        } else {
            menuFijo.classList.add('mover-menu');
            console.log(menuFijo);
        }
    });

    observer.observe(document.querySelector('.logo-menu'));
}

// function scrollNav() {
//     const enlaces = document.querySelectorAll('.navegacion-principal a');

//     enlaces.forEach( function( enlace ) {
//         enlace.addEventListener('click', function(e) {
//             e.preventDefault();
//             const seccion = document.querySelector(e.target.attributes.href.value);

//             seccion.scrollIntoView({
//                 behavior: 'smooth'
//             });
//         });
//     });
// }