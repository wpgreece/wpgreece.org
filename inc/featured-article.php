<!-- FEATURED ARTICLE -->

<article class = "featured-article-big column tablet-column-100">

    <?php the_post_thumbnail( 'featured-post-100' ); ?>

    <div class="featured-article-big-container <?php if ( is_front_page() ) { echo "homepage-enabled"; } ?>">

        <div class="post-meta">

            <h5 class="post-cat <?php foreach ( get_the_category() as $category ) { echo "cat-" .$category->term_id .' '; }  ?>">

                <?php the_category(); ?>

            </h5>

            <h5 class="post-date">

                <?php the_time('d/m/y'); ?>

            </h5>

        </div>

        <div class="author-image">

            <?php echo get_avatar( get_the_author_meta('user_email') , 90 ); ?>

        </div>

        <h6><?php _e('Απο', 'wpgc'); ?> <?php the_author(); ?></h6>

        <?php if (is_front_page()): ?>

            <a href = "<?php the_permalink(); ?>" title = "<?php the_title(); ?>">

                <h3><?php the_title(); ?></h3>

                <?php the_excerpt();?>

            </a>

        <?php else: ?>

            <h3><?php the_title(); ?></h3>

            <?php get_template_part( 'inc/sharing' ); ?>

            <div class="text">

                <?php the_content();?>

            </div>    

        <?php endif;?>

    </div>

</article><!-- .article-container -->