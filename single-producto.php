<?php get_header(  ); ?>
<main class="contenedor">
    <?php
        if (have_posts()){
            while(have_posts(  )){
                the_post(  ); ?>
                    <div class="informacion-producto">
                        <div class="">
                            <h1 class="texto-magenta"><?php the_title( ); ?></h1>
                            <em><?php the_category( ) ?></em>
                        </div>
                        <div class="vegetariano texto-blanco rounded p-1">
                            Opción Vegetariana: <?php the_field( 'opcion_vegetariana') ?>
                        </div>
                    </div>
                    <hr class="my-1 texto-magenta" style="opacity: .1;">
                    <div class="contenedor-productos">
                        <div class=""><?php the_post_thumbnail( 'medium' ); ?></div>
                        <div class=""><?php the_content( ); ?></div>
                    </div>
                <?php
            }
        }
    ?>
</main>
<?php get_footer( ) ;?>