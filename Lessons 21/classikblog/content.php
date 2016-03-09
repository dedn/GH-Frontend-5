        <article <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
            <h2 class="main-post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <span class="date-post">Posted on <?php the_time('F j, Y'); ?></span>
            <img class="post-img" src="<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'full-thumbnail', array( 'class' => 'thumbnail' ) );
}  ?>
            <p class="description"><?php the_content(); ?></p>
             <a class="read-more" href="<?php the_permalink(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/images/read-more-icon.png">Read More</a>

        </article>