<?php get_header(  );?>
<div class="contenedor mt-2">
    <div class="post-sedes">
        <?php
            if (have_posts(  )){
                while (have_posts(  )) {
                    the_post(  )
                    ?>
                    <a href="<?php the_permalink() ?>">
                        <div class="post-item">
                            <div>
                                <?php the_post_thumbnail('medium') ?>
                            </div>
                            <div class="p-1">
                                <h2><?php the_title(  )?></h2> 
                                <div class="texto-negro-light">
                                    <div class=""><?php the_field( 'telefono_movil' ); ?></div>
                                    <div class=""><span class="texto-bold">Dirección:</span> <?php the_field( 'direccion' ); ?></div>
                                    <div class=""><span class="texto-bold">Horario de Atención:</span> <?php the_field( 'horario_de_atencion' ); ?></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php
                }
            }
        ?>
    </div>
</div>
<?php get_footer( ); ?>