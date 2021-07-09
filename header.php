<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="src/fonts/BrandonGrotesque-Medium.woff" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="build/css/app.css">

    <?php wp_head() ?>
</head>
<body>
<!-- SMART BAR -->
<?php $url = get_template_directory_uri(  ); ?>
<div class="smart-Bar bg-magenta">
    <div class="contenedor d-flex-between">
        <div class="texto-blanco d-flex-centrado">
            <div class="">Domicilios:</div>
            <div class="logo-ifood mx-1">
                <img src= <?php echo $url . '/assets/img/IFood_logo.png' ?> alt="">
            </div>
        </div>
        <div class="texto-amarillo d-flex-centrado">
            <div class="mx-1">¿Necesitas un pedido grande? Comunícate al:</div>
            <div class="texto-blanco texto-extrabold">322 529 31 55</div>
            <div class="icono-telefono ml-1">
                <img src="src/img/telefono_icon-8.png" alt="">
            </div>
        </div>   
    </div>
</div>
<!-- REDE SOCIALES -->
<div class="redes-sociales rounded">
    <div class="iconos-redes cursor-pointer m-1">
        <img src="wp-content/themes/myq/build/img/facebook-8.png" alt="">
    </div>
    <div class="iconos-redes cursor-pointer m-1">
        <img src="wp-content/themes/myq/build/img/instagram-8.png" alt="">
    </div>
    <div class="iconos-redes cursor-pointer m-1">
        <img src="wp-content/themes/myq/build/img/whastapp-8.png" alt="">
    </div>
    
</div>
<!-- FIN REDE SOCIALES -->
<!-- FIN SMART BAR -->
<!-- HEADER -->
<header class="header-pc">
    <!-- NAV BAR PC -->
    <nav class="navbar-Pc contenedor d-flex-between">
        
        <div class="logo">
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
            <img src="wp-content/themes/myq/build/img/Logo_M&Q-8.png" alt="">
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
                <img class="mx-5" src="src/img/IFood_logo.png" alt="">
            </ul>
        </div>
    </nav>
    <!-- FIN NAV FIJO BAR -->
</header>
<!-- FIN HEADER -->