<?php get_header(  ); ?>
<div class="single-sedes">
    <?php
        if (have_posts()){
            while(have_posts(  )){
                the_post(  ); ?>
                    <div class="contenido-sedes">
                        <div class="">
                            <div class="informacion-sede">
                                <h1><i class="fas fa-map-marked-alt"></i> <?php the_field( 'nombre_de_la_sede' ); ?></h1>
                                <p class="telefono-sede"><span class="texto-extrabold ">Teléfono:</span> <?php the_field( 'telefono_movil' ); ?></p>
                                <p><span class="texto-extrabold texto-gris">Dirección:</span>  <?php the_field( 'direccion' ); ?></p>
                                <p><span class="texto-extrabold texto-gris">Horario de Atención:</span><?php the_field( 'horario_de_atencion' ); ?>
                            </div>
                            <hr class="color-gris mt-2" style="opacity: .2;">
                            <h3 class="my-1 texto-bg">Sobre Nuestra Sede</h3>
                            <div class="texto-gris contenido"><?php the_content( );?></div>
                        </div>
                        <div class="">
                            <div class=""><?php the_post_thumbnail( 'medium' ); ?></div>
                        </div>
                    </div>
                <?php
            }
        }
    ?>
</div>
<?php get_footer( ) ;?>