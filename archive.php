<?php get_header(  );?>
<div class="contenedor producos-destacados mt-2">
    <h1 class="texto-magenta"> <?php the_archive_title()?></h1>
    <p><?php the_archive_description() ?></p>
    <hr class="my-2" style="opacity: .2;">
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