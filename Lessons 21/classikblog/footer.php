<footer>
    <div class="container">
        <ul class="footer-nav grid-footer">
             <?php
            $args = array(
                'theme_location' => 'footer'
            );
            ?>
            <?php wp_nav_menu( $args); ?>

        </ul>
         <span class="social-block grid-footer">
    <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
    <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
    <a href="#"><i class="fa fa-pinterest-p fa-2x"></i></a>
    <a href="#"><i class="fa fa-google-plus fa-2x"></i></i></a>
    </span>
        <span class="copyright grid-footer ">© Copyright 2013 DesignerFirst.com</span>


    </div>
</footer>
<script src="<?php echo bloginfo('template_url'); ?>/js/jquery.1.7.1.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/js/script.js"></script>
</body>
</html>