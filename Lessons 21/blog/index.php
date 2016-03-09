<?php get_header(); ?>
<div class="wrapper clearfix">
<section class="blog-section clearfix">
    <div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article class="posts">
        <?php the_post_thumbnail( 'full' ); ?>
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?><a></h2>
        <?php the_content(); ?>
        <a class="post-btn btn">Continue Reading </a>

    </article>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
    
    
    </div>
    
</section>
<?php get_sidebar(); ?>
</div>
<div class="pagination">
    <div class="container">
        <a href="#" class="previous"><img src="<?php bloginfo('template_url')?>/images/previous.png"> previos </a>
        <a href="#" class="next"> next <img src="<?php bloginfo('template_url')?>/images/next.png"></a>
    </div>
</div>
<?php get_footer(); ?>