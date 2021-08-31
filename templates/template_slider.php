<!-- SLIDER -->
<div class="header-pc">
<div class="slider d-flex-centrado">
        <!-- SLIDER COPY -->
        <div class="copy-slider">
            <div class="body-copy texto-extrabg w-75 texto-der texto-extrabold">
                <span class="texto-naranja">"Somos Únicos</span><br>
                <span class="texto-magenta">en Sabor”</span>   
            </div>
            <p class="texto-gris w-70 texto-der">
                Tenemos un sabor único y especial.
            </p>
            <div class="boton-ver-catalogo btn-magenta my-2">
                <a href="http://myq.com.co/wp-content/uploads/2021/07/Brochure-MQ-1-1.pdf" target="_blank">Conoce Nuestro Catálogo</a></div>
            </div>
        <!-- FIN SLIDER COPY -->

        <!-- slider -->
        <div class="sliderApp">
        <?php
            $arg = array(
                // nombre del post type creado en function.php
                'post_type'             => 'sliders',
                'post_per_page'         => -1,
                'order'                 => 'ASC',
                'orderby'               => 'date,'
            );
        
        $sedes = new WP_Query($arg);
        
        if($sedes->have_posts( )){
            while($sedes->have_posts()){
                $sedes->the_post(  );
                ?>
                <!-- slider 1 -->
                <a href="<?php the_field( 'link' ); ?>">
                <div data-slider class="visual-slider">
                        <div class="titulo">
                            <h3><?php the_title()?></h3>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, inventore?</p> -->
                        </div>
                        <?php $imagen = get_field( 'imagen' ); ?>
                        <?php if ( $imagen ) : ?>
                            <img src="<?php echo esc_url( $imagen['url'] ); ?>" alt="<?php echo esc_attr( $imagen['alt'] ); ?>" />
                        <?php endif; ?>
                    </div>
                </a>
                <div class="miniaruras"></div>
            <!-- slider -->
                <?php
            }
        }
        
        ?>
            <!-- <div class="controles">
            </div> -->
        </div>
    </div>
        <!-- fin slider demon slayer -->
        <!-- FIN IMAGENES SLIDER -->
    </div>
    </div>
    <!-- FIN SLIDER -->