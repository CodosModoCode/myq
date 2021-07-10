<?php get_header(  );?>
<div class="contenedor mt-2">
    <div class="post-catergorias">
        <?php
            if (have_posts(  )){
                while (have_posts(  )) {
                    the_post(  )
                    ?>
                    <div class="post-item">
                        <a href="<?php the_permalink() ?>">
                            <div>
                                <?php the_post_thumbnail('medium') ?>
                            </div>
                            
                                <h2><?php the_title(  )?></h2>
                          
                        </a>
                        </div>
                    <?php
                }
            }
        ?>
    </div>
</div>
<?php get_footer( ); ?>