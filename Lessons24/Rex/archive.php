<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
    <!-- BEGAIN PRELOADER -->
    <div id="preloader">
        <div class="loader">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start menu section -->
    <section id="menu-area">
        <nav class="navbar navbar-default main-navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <a class="navbar-brand logo" href="index.php"><img
                            src="<?php bloginfo('template_url'); ?>/assets/images/logo.jpg" alt="logo"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="blog-archive.php">BLOG </a></li>
                    </ul>
                </div><!--/.nav-collapse -->
                <div class="search-area">
                    <form action="">
                        <input id="search" name="search" type="text" placeholder="What're you looking for ?">
                        <input id="search_submit" value="Rechercher" type="submit">
                    </form>
                </div>
            </div>
        </nav>
    </section>
    <!-- End menu section -->
    <!-- Start blog banner section -->
    <section id="blog-banner">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/blog-banner.jpg" alt="img">
        <div class="blog-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-banner-area">
                            <h2>Blog Archive</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Blog Archive</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog banner section -->

    <!-- Start blog section -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-area">
                        <div class="row">
                            <div class="col-lg-8 col-md-7 col-sm-12">
                                <div class="blog-left blog-archive">
                                    <!-- Start single blog post -->
                                    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                                        <article class="single-from-blog">
                                            <figure>
                                                <a href="blog-single.html"></a>
                                            </figure>
                                            <div class="blog-title">
                                                <h2><a href="blog-single.html"><a
                                                            href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h2>
                                                <p>Posted by <a href="#" class="blog-admin"><?php the_author() ?></a> on
                                                    <span class="blog-date"><?php the_time('j F, Y'); ?></span></p>
                                            </div>
                                            <p><?php the_content(); ?></p>
                                            <div class="blog-footer">
                                                <a href="<?php comments_link(); ?>"><span
                                                        class="fa fa-comment"></span><?php comments_number('1', '2', '%'); ?>
                                                    Comments</a>
                                                <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                                            </div>
                                        </article>
                                    <?php endwhile; ?>
                                    <?php else: ?>
                                        <h3 class="not found">not found...</h3>
                                    <?php endif; ?>


                                    <!--Start Blog pagination -->
                                    <nav>
                                        <ul class="pagination blog-pagination">
                                            <li>
                                                <a href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li>
                                                <a href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- End blog pagination -->
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 col-sm-12">
                                <?php get_sidebar(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End blog section -->

<?php get_footer(); ?>