<!-- PRODUCTOS DESTACADOS -->
<section class="productos-destacados">
    <div class="titulo texto-md texto-negro texto-centrado">
        Nuestros Productos Destacados
    </div>
    <div class="contenedor d-flex-centrado">

        <?php
            $arg = array(
                // nombre del post type creado en function.php
                'post_type'             => 'producto',
                'post_per_page'         => -1,
                'order'                 => 'ASC',
                'orderby'               => 'date,'
            );
        
        $productos = new WP_Query($arg);
        
        if($productos->have_posts( )){
            while($productos->have_posts()){
                $productos->the_post(  );
                ?>
                <div class="card-producto-destacado">
                    <a class="text-dark" href="<?php the_permalink( ) ?>">
                    <!-- Icono destacado -->
                    <div class="icono-destacado icono-sm bg-amarillo d-flex-centrado">
                        <img src=<?php echo $url . '/assets/img/Logo_favoritos-8.png' ?> alt="">
                    </div>
                    <!-- fin icono destacada -->
                    <div class="card-imagen">
                        <?php the_post_thumbnail('thumbnail'); ?>
                     </div>
                    <div class="py-1 mx-2 card-titulo texto-naranja texto-centrado">
                    <?php the_title(  ) ?>
                    </div>
                </a> 
                </div>
                <?php
            }
        }
        
        ?>
        
    </div>
    <!-- boton ver todos los productos -->
    <div class="btn-magenta mt-3">!Conoce nuestros productos Únicos en Sabor¡</div>
</section>
<!-- FIN PRODUCTOS DESTACADOS -->