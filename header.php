<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="src/fonts/BrandonGrotesque-Medium.woff" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="build/css/app.css">
    <!-- font awesome -->
    <?php  $url = get_template_directory_uri(  ); ?>
    <!-- Our project just needs Font Awesome solid + brand -->
    <script defer src=<?php echo $url . '/node_modules/@fortawesome/fontawesome-free/js/brands.js'?>></script>
    <script defer src=<?php echo $url . '/node_modules/@fortawesome/fontawesome-free/js/solid.js'?>></script>
    <script defer src=<?php echo $url . '/node_modules/@fortawesome/fontawesome-free/js/fontawesome.js'?>></script>
    <!-- Font Awesome -->
    <?php wp_head() ?>
</head>
<body>
<!-- SMART BAR -->
<?php $url = get_template_directory_uri(  ); ?>
<div class="smart-Bar bg-magenta">
    <div class="informacion-Pedidos contenedor d-flex-between">
        <div class="domicilios-ifood texto-blanco">
            <div class="titulo">Domicilios:</div>
            <div class="logo-ifood mx-1">
                <img src= <?php echo $url . '/assets/img/IFood_logo.png' ?> alt="">
            </div>
        </div>
 
        <div class="pedidos">
            <p class="texto-amarillo">¿Necesitas un pedido grande? Comunícate al:</p>
            <div class="telefono texto-blanco texto-extrabold"><i class="fas fa-phone"> </i> 322 529 31 55</div>
        </div>   
    </div>
</div>
<!-- REDE SOCIALES -->
<div class="redes-sociales rounded">
    <div class="iconos-redes d-flex-centrado texto-magenta cursor-pointer m-1">
        <i class="icono fab fa-facebook"></i>
    </div>
    <div class="iconos-redes d-flex-centrado texto-magenta cursor-pointer m-1">
        <i class="icono fab fa-instagram"></i>
    </div>
    <div class="iconos-redes d-flex-centrado texto-magenta cursor-pointer m-1">
        <i class="icono fab fa-whatsapp"></i>
    </div>
    
</div>
<!-- FIN REDE SOCIALES -->
<!-- FIN SMART BAR -->
<!-- HEADER RESPONSIVE -->
<div class="menu-responsive">
    <ul>
        <div class="btn-negro cerrar-menu"><i class="fas fa-times"></i></div>
        <?php 
            wp_nav_menu( 
                array(
                    // Posicion
                    'theme_location' => 'top_menu',
                    // clases del menu
                    'menu_class' => 'd-flex-between texto-bold texto-naranja',
                    'container_class' => 'menu-principal',
                )
            )
        ?>
    </ul>
</div>
<div class="header-responsive">
    <figure class="logo">
        <img src=<?php echo $url . '/assets/img/Logo_M&Q-8.png' ?> alt="">
    </figure>
    <h3 class="texto-magenta texto-bold"><i class="fas fa-phone"></i> 322 529 31 55</h3>
    <div id="boton-menu-responsive" class="cursor-pointer menu" value="holaaa">
        <i class="fas fa-bars"></i>
    </div>
</div>
<!-- FIN HEADER RESPONSIVE -->
<!-- HEADER -->
<header class="header-pc">
    <!-- NAV BAR PC -->
    <nav class="navbar-Pc contenedor d-flex-between">
        
        <div class="logo-menu">
            <img src=<?php echo $url . '/assets/img/Logo_M&Q-8.png' ?> alt="">
        </div>
        <div class="menu-principal">
            <ul class="d-flex-between texto-bold texto-naranja">
                <?php 
                    wp_nav_menu( 
                        array(
                            // Posicion
                            'theme_location' => 'top_menu',
                            // clases del menu
                            'menu_class' => 'd-flex-between texto-bold texto-naranja',
                            'container_class' => 'menu-principal',
                        )
                    )
                ?>
                <!-- <li class="link-menu">Home</li>
                <li class="link-menu">Productos</li>
                <li class="link-menu">Nosotros</li>
                <li class="link-menu">Eventos</li> -->
            </ul>
        </div>
        <div class="menu-secundario">
            <ul class="d-flex-between texto-bold">
            <?php 
                    wp_nav_menu( 
                        array(
                            // Posicion
                            'theme_location' => 'top_menu_secondary',
                            // clases del menu
                            'menu_class' => 'd-flex-between texto-bold',
                            'container_class' => 'menu-principal',
                        )
                    )
                ?>
            </ul>
        </div>
    </nav>
    <!-- FIN NAV BAR -->
    <!-- NAV BAR FIJO PC -->
    <nav class="navbar-fijo-Pc contenedor d-flex-between">
        <div class="logo-invisible"></div>
        <div class="logo">
            <img src=<?php echo $url . '/assets/img/Logo_M&Q-8.png' ?> alt="">
        </div>
        <div class="menu-principal">
            <ul class="d-flex-between texto-bold">
            <?php 
                    wp_nav_menu( 
                        array(
                            // Posicion
                            'theme_location' => 'top_menu',
                            // clases del menu
                            'menu_class' => 'd-flex-between texto-bold texto-naranja',
                            'container_class' => 'menu-principal',
                        )
                    )
                ?>
            </ul>
        </div>
        <div class="menu-secundario">
            <ul class="d-flex-between texto-bold">
            <?php 
                    wp_nav_menu( 
                        array(
                            // Posicion
                            'theme_location' => 'top_menu_secondary',
                            // clases del menu
                            'menu_class' => 'd-flex-between texto-bold',
                            'container_class' => 'menu-principal',
                        )
                    )
                ?>
                <img class="mx-5" src=<?php echo $url . '/assets/img/IFood_logo.png' ?> alt="">
            </ul>
        </div>
    </nav>
    <!-- FIN NAV FIJO BAR -->
</header>
<!-- FIN HEADER -->