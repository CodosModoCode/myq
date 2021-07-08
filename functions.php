<?php
// Creo una funcion, puede tener el nombre que quiera
function init_template()
{
    // add theme support es una funcion que agrega
    // funcionalidades extrar al tema
    add_theme_support( 'post-thumbnails');
    // post Thumbnails se podrá usar una imagen destacada
    add_theme_support( 'title-tag');
    // permite añadir el titulo de la pagina

    // Registrar el MENU
    register_nav_menus(
            array(
                'top_menu' => 'Menu  de Principal',
                'top_menu_secondary' => 'Menu secundario'
            )
        );
}

// con ini_template solo creo la fucnion
// pero debo agregarla
// after setup es donde voy a inyectar la funcion
// init_template es la funcion que estoy inyectando
add_action( 'after_setup_theme', 'init_template');

// -----CARGAR ASSETS

function assets(){
    // con wp_register_style: se agregan las dependencias (frameworks, fuentes, etc)
    // nombre, link, dependencia, version, dispositivo de visualizacion
    // wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', '', '4.4.0', 'all');
    wp_register_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', '', '4.4.0', 'all');
    wp_register_style( 'fuente', 'https://fonts.googleapis.com/css2?family=Sarabun:wght@300;600;800&display=swap', '', '1.0', 'all');
    // con wp_enqueue_style se carga la hoja de estilos que esta en la raiz de la carpeta
    // con get_stylesheets_uri de carga la URL y en array se añade las dependecias
    // regustradas anteriormente
    wp_enqueue_style( 'estilos', get_template_directory_uri().'/assets/css/app.css', array('fuente', 'normalize'), '1.22', 'all' );

    // ----------REGISTRAR SCRIPS-------//

    // wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', '', '5.0.2', true );
    wp_enqueue_script( 'miJs', get_template_directory_uri().'/assets/js/bundle.min.js','', '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'assets' );