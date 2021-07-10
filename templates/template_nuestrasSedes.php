<!-- NUESTRAS SEDES -->
<div class="nuestras-sedes mb-4">
    <div class="contenedor nuestras-sedes-items py-3">
        <div class="titulo-sedes titulo texto-md texto-amarillo texto-centrado">Nuestras Sedes</div>

        <?php
            $arg = array(
                // nombre del post type creado en function.php
                'post_type'             => 'sedes',
                'post_per_page'         => -1,
                'order'                 => 'ASC',
                'orderby'               => 'date,'
            );
        
        $sedes = new WP_Query($arg);
        
        if($sedes->have_posts( )){
            while($sedes->have_posts()){
                $sedes->the_post(  );
                ?>
                 <!-- Card Sedes -->
                 <a href="<?php the_permalink( ) ?>">
                <div class="card-sedes">
                    <div class="imagen overflow-hidden">
                        <img src=<?php echo $url . '/assets/img/imagen_sedes.png' ?> alt="">
                    </div>
                    <div class="descripcion">
                        <div class="h2 texto-md texto-blanco"><?php the_field( 'nombre_de_la_sede' ); ?></div>
                        <!-- <p class="texto-gris">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit, suscipit.</p> -->
                        <div class="texto-negro-light">
                            <div class="marco-magenta-sm"><?php the_field( 'telefono_movil' ); ?></div>
                            <div class=""><span class="texto-bold">Dirección:</span> <?php the_field( 'direccion' ); ?></div>
                            <div class=""><span class="texto-bold">Horario de Atención:</span> <?php the_field( 'horario_de_atencion' ); ?></div>
                        </div>
                    </div>
                </div>
            </a>
                <!-- fin Card Sedes -->
                <?php
            }
        }
        
        ?>
    </div>
</div>
<!-- FIN NUESTRAS SEDES -->