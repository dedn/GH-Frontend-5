<aside class="blog-right">
    <!-- Start Sidebar Single widget -->
    <div class="single-widget">
        <h2>Search</h2>
        <form class="blog-search">
            <input type="text" name="s">
            <button class="button button-default" data-text="Search" type="submit">
                <span>Search</span></button>
        </form>
    </div>
    <!-- End Sidebar Single widget -->
    <!-- Start Sidebar Single widget -->
    <?php if(!dynamic_sidebar('sidebar')): ?>
    <div class="single-widget">
        <h2>Follow us on</h2>
        <div class="follow-us">
            <a class="facebook" href="<?php echo get_theme_mod('social_links_facebook'); ?>"><span class="fa fa-facebook"></span></a>
            <a class="twitter" href="<?php echo get_theme_mod('social_links_twitter'); ?>"><span class="fa fa-twitter"></span></a>
            <a class="google-plus" href="<?php echo get_theme_mod('social_links_googleplus'); ?>"><span class="fa fa-google-plus"></span></a>
            <a class="youtube" href="<?php echo get_theme_mod('social_links_youtube'); ?>"><span class="fa fa-youtube"></span></a>
            <a class="linkedin" href="<?php echo get_theme_mod('social_links_linkedin'); ?>"><span class="fa fa-linkedin"></span></a>
            <a class="dribbble" href="<?php echo get_theme_mod('social_links_pinterest'); ?>"><span class="fa fa-dribbble"></span></a>
        </div>
    </div>
    <?php endif;?>
    <!-- End Sidebar Single widget -->
    <!-- Start Sidebar Single widget -->
    <?php if(!dynamic_sidebar('sidebar2')): ?>
    <div class="single-widget">
        <h2>Popular post</h2>
        <div class="popular-post-widget">
            <div class="media">
                <div class="media-left">
                    <a href="blog-single.html">
                        <img class="media-object"
                             src="<?php bloginfo('template_url'); ?>/assets/images/popular-post-img.jpg"
                             alt="img">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href="blog-single.html">A lonely
                            flower</a></h4>
                    <p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium
                        done.</p>
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="blog-single.html">
                        <img class="media-object"
                             src="<?php bloginfo('template_url'); ?>/assets/images/popular-post-img.jpg"
                             alt="img">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href="blog-single.html">A lonely
                            flower</a></h4>
                    <p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium
                        done.</p>
                </div>
            </div>
            <div class="media">
                <div class="media-left">
                    <a href="blog-single.html">
                        <img class="media-object"
                             src="<?php bloginfo('template_url'); ?>/assets/images/popular-post-img.jpg"
                             alt="img">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href="blog-single.html">A lonely
                            flower</a></h4>
                    <p>Sed ut perspiciatis omnis natus error sit voluptatem accusantium
                        done.</p>
                </div>
            </div>
        </div>
    </div>
    <?php endif;?>
    <!-- End Sidebar Single widget -->
    <!-- Start Sidebar Single widget -->
    <?php if(!dynamic_sidebar('sidebar3')): ?>
    <div class="single-widget">
        <h2>Instagram feed</h2>
        <div class="instagram-feed">
            <div class="single-instagram-feed">
                <img
                    src="<?php bloginfo('template_url'); ?>/assets/images/instagram-feed-img.jpg"
                    alt="img">
            </div>
            <div class="single-instagram-feed">
                <img
                    src="<?php bloginfo('template_url'); ?>/assets/images/instagram-feed-img.jpg"
                    alt="img">
            </div>
            <div class="single-instagram-feed">
                <img
                    src="<?php bloginfo('template_url'); ?>/assets/images/instagram-feed-img.jpg"
                    alt="img">
            </div>
        </div>
    </div>
    <?php endif;?>
    <!-- End Sidebar Single widget -->
    <!-- Start Sidebar Single widget -->
    <!-- Start Sidebar Single widget -->
    <?php if(!dynamic_sidebar('sidebar4')): ?>
    <div class="single-widget">
        <h2>Subscribe to newslater</h2>
        <form class="blog-search">
            <input type="text">
            <button class="button button-default" data-text="Subscribe" type="submit">
                <span>Subscribe</span></button>
        </form>
    </div>
    <?php endif;?>
    <!-- End Sidebar Single widget -->
</aside>