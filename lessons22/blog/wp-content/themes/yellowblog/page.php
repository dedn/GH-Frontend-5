
<?php get_header();?>
<div class="container">
    <section id="main" class="main">

        <h2 class="title"><?php the_title(); ?></h2>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="posts">

                <ul>
                    <li class="date">

                        <span class="number"><?php the_time('j'); ?></span><br>
                        <span class="mounth"><?php the_time('F'); ?></span>
                    </li>
                    <li class="title-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <li class="meta-post">
                        <span class="comment"><a href="<?php comments_link(); ?>"> <i class="fa fa-comment-o"></i> <span class="quantity"><?php comments_number('1', '2', '%'); ?> comments</span></a></span>
                        <span class="category"><i class="fa fa-folder-o"></i> <span class="name-category"><?php the_category(); ?></span></span>
                    </li>
                    <li class="discription">
                        <?php the_content('Continue Reading','<a class="action-btn" href="#"><a>');  ?>
                    </li>



                </ul>

            </article>
        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>







    </section>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

<?php wp_footer(); ?>
</body>
</html>