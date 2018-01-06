<div id="main">
    <div id="content">
        <h2 class="atit">Daftar Laptop <?php single_cat_title(); ?></h2>
        <?php
            require get_template_directory() . '/archive/grab-product.php';
        ?>
        <div class="entry blk cage">
            <?php
                $contentapps = array(
                    'post_type'       => 'archives',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                );
                query_posts($contentapps); while (have_posts()) : the_post(); ?>

                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <br>
            <?php endwhile;?>
        </div>
    </div>

    <div class='clearfix'></div>
 </div>
