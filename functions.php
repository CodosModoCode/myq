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
    wp_enqueue_style( 'estilos', get_template_directory_uri().'/build/css/app.css', array('fuente', 'normalize'), '1.22', 'all' );

    // ----------REGISTRAR SCRIPS-------//

    // wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', '', '5.0.2', true );
    wp_enqueue_script( 'miJs', get_template_directory_uri().'/assets/js/bundle.min.js','', '1.0', true );
    wp_enqueue_script( 'slider', get_template_directory_uri().'/bulid/js/slider.js','', '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'assets' );


// CREACION DEL CUSTON TYPE PARA PRODUCTOS DESTACADOS

function productos_type(){

    $labels = array(
        'name'           => 'Productos',
        'singular_name'  => 'Producto',
        // define el nombre en el menú
        'menu_name'      => 'Productos'
    );
    $args = array(
        'label'          => 'productos',
        'description'    => 'productos de platzi',
        'labels'         => $labels,
        // supports hace referencia a los skils que tendrá este custon type
        'supports'      => array('title', 'editor', 'thumbnail', 'revisions'),
        // Define el estado de publicación borrador false, publicadas true
        'public'        =>true,
        // define si el custon type puede usarse desde los menus
        'taxonomies'            => array( 'category', 'post_tag' ),
        'show_in_menu' =>true,
        // en qué posición se colocará en el menu
        'menu_position' => 5,
        // icono del custon type
        // repositorio: https://developer.wordpress.org/resource/dashicons/#cart
        'menu_icon' => 'dashicons-cart',
        'can_export' => true,
        // Puede hacerse un loop personalizado
        'publicly_queryable' => true,
        // hace que tenga una URL asignada
        'rewrite' =>true,
        // genera el editor de codigo gutember
        'show_in_rest' => true,
    );
    // es la función que me crea el custon_type
    register_post_type( 'producto', $args );
}

add_action( 'init', 'productos_type');

// ------------- CREAR WIDGETS-------------

function footer_izq(){
    register_sidebar( 
        array(
            'name' => 'footer izquierda',
            'id'            => 'footer_izq',
            'description'   => 'widget para la zona izquierda del título',
            // el widget consta de 2 elementos: titulo y contenido (before)
            'before_title' => '<p>',
            'after_title' => '</p>',
            // contenido del widget
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>'
        )
    );
}
function footer_centro(){
    register_sidebar( 
        array(
            'name' => 'footer centro',
            'id'            => 'footer_centro',
            'description'   => 'widget para la zona izquierda del título',
            // el widget consta de 2 elementos: titulo y contenido (before)
            'before_title' => '<p>',
            'after_title' => '</p>',
            // contenido del widget
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>'
        )
    );
}
function footer_derecho(){
    register_sidebar( 
        array(
            'name' => 'footer derecho',
            'id'            => 'footer_derecho',
            'description'   => 'Widget para la zona derecha del footer',
            // el widget consta de 2 elementos: titulo y contenido (before)
            'before_title' => '<p>',
            'after_title' => '</p>',
            // contenido del widget
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>'
        )
    );
}


add_action( 'widgets_init', 'footer_izq' );
add_action( 'widgets_init', 'footer_centro' );
add_action( 'widgets_init', 'footer_derecho' );

// CUSTON TYPE slider
if ( ! function_exists('cpt_sedes') ) {

    // Register Custom Post Type
    function cpt_sedes() {
    
        $labels = array(
            'name'                  => _x( 'sedes', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'sede', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Sedes', 'text_domain' ),
            'name_admin_bar'        => __( 'Sedes', 'text_domain' ),
            'archives'              => __( 'Archivo de Sedes', 'text_domain' ),
            'attributes'            => __( 'Atributos de sede', 'text_domain' ),
            'parent_item_colon'     => __( 'Sede padre', 'text_domain' ),
            'all_items'             => __( 'Todas las Sedes', 'text_domain' ),
            'add_new_item'          => __( 'Añadir nueva Sede', 'text_domain' ),
            'add_new'               => __( 'Añadir Sede', 'text_domain' ),
            'new_item'              => __( 'Nueva Sede', 'text_domain' ),
            'edit_item'             => __( 'Editar Sede', 'text_domain' ),
            'update_item'           => __( 'Actualizar Sede', 'text_domain' ),
            'view_item'             => __( 'Ver Sede', 'text_domain' ),
            'view_items'            => __( 'Ver Sedes', 'text_domain' ),
            'search_items'          => __( 'Buscar Sedes', 'text_domain' ),
            'not_found'             => __( 'No Encontrado', 'text_domain' ),
            'not_found_in_trash'    => __( 'No encontrado en papelera', 'text_domain' ),
            'featured_image'        => __( 'Imagen Destacada', 'text_domain' ),
            'set_featured_image'    => __( 'Configurar Imagen Destacada', 'text_domain' ),
            'remove_featured_image' => __( 'Remover Imagen Destacada', 'text_domain' ),
            'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
            'insert_into_item'      => __( 'Intertar en la Sede', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Actualizar en esta sede', 'text_domain' ),
            'items_list'            => __( 'Listado de Sedes', 'text_domain' ),
            'items_list_navigation' => __( 'Lista Navegable de Sedes', 'text_domain' ),
            'filter_items_list'     => __( 'Filtro de lista de Sedes', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'sede', 'text_domain' ),
            'description'           => __( 'Diferentes sedes con la que cuenta m&q', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-store',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
            // genera el editor de codigo gutember
            'show_in_rest' => true,

        );
        register_post_type( 'sedes', $args );
    
    }
    add_action( 'init', 'cpt_sedes', 0 );
    
}

// CUSTON TYPE SLIDER
if ( ! function_exists('cpt_sliders') ) {

    // Register Custom Post Type
    function cpt_sliders() {
    
        $labels = array(
            'name'                  => _x( 'sliders', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'slide', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'sliders', 'text_domain' ),
            'name_admin_bar'        => __( 'sliders', 'text_domain' ),
            'archives'              => __( 'Archivo de sliders', 'text_domain' ),
            'attributes'            => __( 'Atributos de slide', 'text_domain' ),
            'parent_item_colon'     => __( 'slide padre', 'text_domain' ),
            'all_items'             => __( 'Todas las sliders', 'text_domain' ),
            'add_new_item'          => __( 'Añadir nueva slide', 'text_domain' ),
            'add_new'               => __( 'Añadir slide', 'text_domain' ),
            'new_item'              => __( 'Nueva slide', 'text_domain' ),
            'edit_item'             => __( 'Editar slide', 'text_domain' ),
            'update_item'           => __( 'Actualizar slide', 'text_domain' ),
            'view_item'             => __( 'Ver slide', 'text_domain' ),
            'view_items'            => __( 'Ver sliders', 'text_domain' ),
            'search_items'          => __( 'Buscar sliders', 'text_domain' ),
            'not_found'             => __( 'No Encontrado', 'text_domain' ),
            'not_found_in_trash'    => __( 'No encontrado en papelera', 'text_domain' ),
            'featured_image'        => __( 'Imagen Destacada', 'text_domain' ),
            'set_featured_image'    => __( 'Configurar Imagen Destacada', 'text_domain' ),
            'remove_featured_image' => __( 'Remover Imagen Destacada', 'text_domain' ),
            'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
            'insert_into_item'      => __( 'Intertar en la slide', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Actualizar en esta slide', 'text_domain' ),
            'items_list'            => __( 'Listado de sliders', 'text_domain' ),
            'items_list_navigation' => __( 'Lista Navegable de sliders', 'text_domain' ),
            'filter_items_list'     => __( 'Filtro de lista de sliders', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'slide', 'text_domain' ),
            'description'           => __( 'Diferentes sliders con la que cuenta m&q', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 10,
            'menu_icon'             => 'dashicons-format-video',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
            // genera el editor de codigo gutember
            'show_in_rest' => true,

        );
        register_post_type( 'sliders', $args );
    
    }
    add_action( 'init', 'cpt_sliders', 0 );
    
}


    // AGREGAR LAS TAXONOMIAS DE LOS CUSTON TYPE AL LOOP DE TAXONONIAS DE WORDPRESS

    function add_cpt_to_loop( $query ) {
        if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
        
        // Get all your post types
        $post_types = get_post_types();
        
        $query->set( 'post_type', $post_types );
        return $query;
        }
        }
        add_filter( 'pre_get_posts', 'add_cpt_to_loop' );

        // custon Types Combos

// Register Custom Post Type
function cpt_combos() {

	$labels = array(
		'name'                  => _x( 'combos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'combo', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Combos', 'text_domain' ),
		'name_admin_bar'        => __( 'Combos', 'text_domain' ),
		'archives'              => __( 'Archivo de Combos', 'text_domain' ),
		'attributes'            => __( 'Atributos de Combo', 'text_domain' ),
		'parent_item_colon'     => __( 'Combo Padre', 'text_domain' ),
		'all_items'             => __( 'Todos los Combos', 'text_domain' ),
		'add_new_item'          => __( 'Añadir Nuevo Combo', 'text_domain' ),
		'add_new'               => __( 'Añadir Combo', 'text_domain' ),
		'new_item'              => __( 'Nuevo Combo', 'text_domain' ),
		'edit_item'             => __( 'Editar Combo', 'text_domain' ),
		'update_item'           => __( 'Actualizar Combo', 'text_domain' ),
		'view_item'             => __( 'Ver Combos', 'text_domain' ),
		'view_items'            => __( 'Ver Combos', 'text_domain' ),
		'search_items'          => __( 'Buscar Combos', 'text_domain' ),
		'not_found'             => __( 'No Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la Papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen Destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar Imagen Destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Remover Imagen Destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el Combo', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en este Combo', 'text_domain' ),
		'items_list'            => __( 'Listado de Combos', 'text_domain' ),
		'items_list_navigation' => __( 'Lista Navegable de combos', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de listas de Combos', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'combo', 'text_domain' ),
		'description'           => __( 'Tenemos los mejores combos únicos para ti.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_icon'             => 'dashicons-food',
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'combos', $args );

}
add_action( 'init', 'cpt_combos', 0 );

// AGREGAR UNA TAXONIMIA EN PRODUCTOS
add_action( 'init', 'productosTaxonomia' );
function productosTaxonomia(){
    $arg = array(
        // permite que tenga jerarquía de categorias
        'hierarchical'  => true,
        // Labels recibe un array con dos parámetros
        // 1- nombre en plural
        // 2- nombre en singular
        'labels'            => array(
            'name'          => 'Categorias de Productos',
            'singular_name' => 'Categoría de Producto'
        ),
        // permite que sea mostrado en el menu principal
        'show_in_nav_menu'  => true,
        'show_admin_column' => true,
        // rewrite: es la forma del slug
        'rewrite'           => array('slug', 'categoria-productos')
    );
    // recibe 3 parámetros: 1- el slug de la taxonomía creada
    // 2- los custom types a los que queremos que aparezca
    // 3- Los argumentos configurados en la parte de arriba
    register_taxonomy( 'categoria-productos', array ('producto'), $arg );
}
