
<?php get_header();?>
<div class="container">
    <section id="main" class="main">


        <div class="slider-bar">
            <ul class="filter2">
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/images/ten.jpeg" alt="slider-img">
                    <p>
                        <span class="slider-title">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</span>
                        Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris
                        vitae erat consequat a
                    </p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/images/seven.jpeg" alt="slider-img">
                    <p>
                        <span class="slider-title">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</span>
                        Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris
                        vitae erat consequat a
                    </p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/images/one.jpeg" alt="slider-img">
                    <p>
                        <span class="slider-title">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</span>
                        Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris
                        vitae erat consequat a
                    </p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/images/one.jpeg" alt="slider-img">
                    <p>
                        <span class="slider-title">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</span>
                        Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris
                        vitae erat consequat a
                    </p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/images/ten.jpeg" alt="slider-img">
                    <p>
                        <span class="slider-title">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</span>
                        Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris
                        vitae erat consequat a
                    </p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/images/seven.jpeg" alt="slider-img">
                    <p>
                        <span class="slider-title">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</span>
                        Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris
                        vitae erat consequat a
                    </p>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/images/one.jpeg" alt="slider-img">
                    <p>
                        <span class="slider-title">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</span>
                        Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris
                        vitae erat consequat a
                    </p>
                </li>


            </ul>
            <div id="bx-pager">
                <a data-slide-index="0" href="">1</a>
                <a data-slide-index="1" href="">2</a>
                <a data-slide-index="2" href="">3</a>
                <a data-slide-index="3" href="">4</a>
                <a data-slide-index="4" href="">5</a>
                <a data-slide-index="5" href="">6</a>
            </div>
        </div>


        <h2 class="title">Latest Blog Post</h2>
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
            <h3 class="not found">not found...</h3>
        <?php endif; ?>




        <div class="pagination">
            <?php wp_pagenavi(); ?>

        </div>


    </section>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
<!--<script type="text/javascript" src="--><?php //echo bloginfo('template_url'); ?><!--/js/jquery.1.7.1.min.js"></script>-->
<!--<script src="--><?php //echo bloginfo('template_url'); ?><!--/js/jquery.bxslider.js"></script>-->
<!--<script src="--><?php //echo bloginfo('template_url'); ?><!--/js/script.js"></script>-->
<!--<script type="text/javascript">-->
<!---->
<!--</script>-->
<?php wp_footer(); ?>

</body>
</html>