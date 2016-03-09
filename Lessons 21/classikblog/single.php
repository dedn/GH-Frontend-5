<?php get_header(); ?>
<section id="hero" class="hero">
    <header id="navbar" class="navbar">
        <div class="container clearfix">
            <h1 class="logo"><a href="#hero">Classic</a></h1>
            <ul class="nav">
                <div class="iconMenu"><i class="fa fa-bars fa-2x"></i></div>
                <div class="itemsMenu">
                   <?php
                    $args = array(
                        'theme_location' => 'primary'
                    );

                    ?>
                    <?php wp_nav_menu( $args ); ?>
                </div>
            </ul>
        </div>
    </header>
</section>
<section class="content">

    <div class="filter">
        <div class="container">
            <div class="filter-meny">
                  <!-- <?php wp_list_categories('orderby=name&title_li='); ?>-->
				 <a href="#">Busines</a>
            <a href="#">Mobile</a>
            <a href="#">Social Media</a>
            <a href="#">Technologi</a>
            </div>
        </div>
    </div>
    <div class="container">
	<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('content', 'single') ?>
	<?php // If comments are open or we have at least one comment, load up the comment template.
 if ( comments_open() || '0' != get_comments_number() ) :
 	comments_template();
 endif;
?>
	<?php endwhile; ?>


    </div>
</section>
<?php get_footer(); ?>