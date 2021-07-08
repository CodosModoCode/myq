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
<div class="smart-Bar bg-magenta">
    <div class="contenedor d-flex-between">
        <div class="texto-blanco d-flex-centrado">
            <div class="">Domicilios:</div>
            <div class="logo-ifood mx-1">
                <img src="src/img/IFood_logo.png" alt="">
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
        <img src="src/img/facebook-8.png" alt="">
    </div>
    <div class="iconos-redes cursor-pointer m-1">
        <img src="src/img/instagram-8.png" alt="">
    </div>
    <div class="iconos-redes cursor-pointer m-1">
        <img src="src/img/whastapp-8.png" alt="">
    </div>
    
</div>
<!-- FIN REDE SOCIALES -->
<!-- FIN SMART BAR -->
<!-- HEADER -->
<header class="header-pc">
    <!-- NAV BAR PC -->
    <nav class="navbar-Pc contenedor d-flex-between">
        
        <div class="logo">
            <img src="src/img/Logo_M&Q-8.png" alt="">
        </div>
        <div class="menu-principal">
            <ul class="d-flex-between texto-bold texto-naranja">
            <?php 
                    wp_nav_menu( 
                        array(
                            // Posicion
                            'theme_location' => 'top_menu',
                            // clases del menu
                            'menu_class' => 'menu-principal',
                            'container_class' => 'container-menu',
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
                <li>Blog</li>
                <li>Contacto</li>
            </ul>
        </div>
    </nav>
    <!-- FIN NAV BAR -->
    <!-- NAV BAR FIJO PC -->
    <nav class="navbar-fijo-Pc contenedor d-flex-between">
        <div class="logo-invisible"></div>
        <div class="logo">
            <img src="src/img/Logo_M&Q-8.png" alt="">
        </div>
        <div class="menu-principal">
            <ul class="d-flex-between texto-bold">
                <li class="link-menu">Home</li>
                <li class="link-menu">Productos</li>
                <li class="link-menu">Nosotros</li>
                <li class="link-menu">Eventos</li>
            </ul>
        </div>
        <div class="menu-secundario">
            <ul class="d-flex-between texto-bold">
                <li>Blog</li>
                <li>Contacto</li>
                <img class="mx-5" src="src/img/IFood_logo.png" alt="">
            </ul>
        </div>
    </nav>
    <!-- FIN NAV FIJO BAR -->
    <!-- SLIDER -->
    <div class="slider d-flex-centrado">
        <!-- SLIDER COPY -->
        <div class="copy-slider">
            <div class="texto-extrabg w-75 texto-der texto-extrabold">
                <span class="texto-naranja">"Somos Únicos</span><br>
                <span class="texto-magenta">en Sabor”</span>   
            </div>
            <p class="texto-gris w-70 texto-der">
                Tenemos un sabor único y especial.
            </p>
            <div class="boton-ver-catalogo btn-magenta">Conoce Nuestro Catálogo</div>
        </div>
        <!-- FIN SLIDER COPY -->
        <!-- IMAGENES SLIDER -->
        <div class="Carrousel-slider">
            <div class="control-imagenes d-flex-between">
                <div class="control"></div>
                <div class="control"></div>
                <div class="control"></div>
                <div class="control"></div>
            </div>
            <div class="imagenes-slider">
                <img src="src/img/M&Q_1.jpg" alt="">
            </div>
        </div>
        <!-- FIN IMAGENES SLIDER -->
    </div>
    <!-- FIN SLIDER -->
</header>
<!-- FIN HEADER -->