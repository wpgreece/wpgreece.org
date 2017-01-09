
<?php the_post_thumbnail( 'medium' ); ?>

<h5 class="post-cat <?php foreach ( get_the_category() as $category ) { echo "cat-" .$category->term_id .' '; }  ?>">

    <?php the_category(' / '); ?>

</h5>

<div class="more-news-container">

    <a href = "<?php the_permalink(); ?>" title = "<?php the_title(); ?>">
        <h4><?php the_title(); ?></h4>
    </a>

    <div class="post-meta"> 
   
        <h6 class= "post-author"> <?php _e('Απο', 'wpgc'); ?> <?php the_author(); ?></h6>

        <h6 class="post-date"><?php the_time('d/m/y'); ?></h6>

    </div>
    
</div>
