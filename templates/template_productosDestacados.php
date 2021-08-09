<!-- PRODUCTOS DESTACADOS -->
<section class="productos-destacados">
    <div class="titulo texto-negro texto-centrado">
    <i class="fas fa-star"></i> Nuestros Productos Destacados
    </div>
    <div class="contendor-productos">

        <?php
            $arg = array(
                // nombre del post type creado en function.php
                'post_type'             => 'producto',
                'posts_per_page'         => 5,
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
    <?php
    // obtener el link de la categoria
    // obtiene el id de una categoria con su nombre
    $category_id = get_cat_ID( 'Productos Destacados' );
    // Obtiene el link de dicha categoría
    $category_link = get_category_link( $category_id );
    ?>

    <div class="btn-magenta mt-3">
        <!-- se linkea al link generado -->
        <a href="<?php echo $category_link ; ?>">!Conoce nuestros productos Únicos en Sabor¡</a></div>
</section>
<!-- FIN PRODUCTOS DESTACADOS -->