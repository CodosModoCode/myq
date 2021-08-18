<?php get_header(  ); ?>
<main class="contenedor">
    <?php
        if (have_posts()){
            while(have_posts(  )){
                the_post(  ); ?>
                        <hr class="my-1 texto-magenta" style="opacity: .1;">
                    <div class="informacion-producto">
                        
                        <div class="vegetariano texto-blanco rounded p-1">
                             Opción Vegetariana: <?php  the_field( 'opcion_vegetariana'); ?>
                        </div>
                    </div>
                    <div class="contenedor-productos">
                        <div class=""><?php the_post_thumbnail( 'large' ); ?></div>
                        <div class="p-2">
                            <div class="">
                                <h1 class="texto-magenta" style="font-size:3rem"><?php the_title( ); ?></h1>
                                <em class="texto-gris">Categoría: <?php the_category( ) ?></em>
                                <hr style="margin: 1rem 0">
                            </div>
                            <div class="texto-negro" style="text-align: left;">
                                <?php the_content( ); ?>
                            </div>
                        </div>
                    </div>
                <?php
            }
        }
    ?>
</main>
<?php get_footer( ) ;?>