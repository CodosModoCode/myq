<!-- PRODUCTOS DESTACADOS -->
<section class="productos-destacados">
    <div class="titulo texto-negro texto-centrado">
        <i class="fas fa-star"></i> Nuestros Productos Destacados
    </div>
    <div class="contendor-productos">

    <!-- Listar las categorias de una taxonomia
 -->
    <?php 
        // Get the taxonomy's terms
        $terms = get_terms(
            array(
                'taxonomy'   => 'categoria-productos',
                'hide_empty' => false,
            )
        );

        // Check if any term exists
        if ( ! empty( $terms ) && is_array( $terms ) ) {
            // Run a loop and print them all
            foreach ( $terms as $term ) { ?>
            
                <!--  -->
                <div class="card-producto-destacado">
                    <a class="text-dark" href="<?php echo esc_url( get_term_link( $term ) ) ?>">
                        <!-- Icono destacado -->
                        <div class="icono-destacado icono-sm bg-amarillo d-flex-centrado"><img src=<?php echo $url . '/assets/img/Logo_favoritos-8.png' ?> alt=""></div>
                        <!-- fin icono destacada -->
                        <div class="card-imagen"><?php z_taxonomy_image($term->term_id); ?></div>
                        <div class="py-1 mx-2 card-titulo texto-naranja texto-centrado"><?php echo $term->name; ?></div>
                     </a> 
                </div>
                <!--  -->
                <?php
            }
        } 
    ?>
    <!--  -->
    
    </div>
    <div class="btn-magenta mt-3">
        <!-- se linkea al link generado -->
        <a href="https://myq.com.co/category/combos/">¡Conoce nuestros combos y precios especiales!</a>
    </div>
</section>
<!-- FIN PRODUCTOS DESTACADOS -->