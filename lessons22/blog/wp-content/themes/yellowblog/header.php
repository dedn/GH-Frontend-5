<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); wp_title; ?></title>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css"
          href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <!--    <link rel="stylesheet" href="--><?php //echo bloginfo('template_url'); ?><!--/css/style.css">-->
    <!--    <link rel="stylesheet" type="text/css" href="--><?php //echo bloginfo('template_url'); ?><!--/css/jquery.bxslider.css">-->
    <style type="text/css">
        body .itemsMenu,
        .main .comment-form #submit,
        body .cat-item a .number-category,
        body .cat-item a:hover,
        body .filter2 li p:after,
        body .discription .more-link,
        body footer .social-networks li a:hover,
        body .subscribe-block .subscribe-form .subscribe-btn,
        body .popular-topic ul li a:hover,
        body .communication-phone,
        body .communication-email,
        body .gallery .item .title-gallery,
        body .contact_submit,
        body .portfolio .label-bg,
        body #filters li span.active
        {
            background-color: <?php echo get_theme_mod( 'tcx_link_color' ); ?> ; }
    </style>

    <style type="text/css">
        body .filter2 li:after
        {
            border-color:transparent transparent  <?php echo get_theme_mod( 'tcx_link_color' ); ?> transparent ; }
    </style>
    <style type="text/css">
        body .nav li a:after
        {
            border-color:transparent transparent transparent  <?php echo get_theme_mod( 'tcx_link_color' ); ?> ; }
    </style>
    <style type="text/css">
        body #bx-pager a:hover,
        body footer .copyright a:hover,
        body #hero .logo a
        {
            color:<?php echo get_theme_mod( 'tcx_link_color' ); ?> ; }
    </style>
    <?php wp_head(); ?>
</head>
<body>
<section id="hero" class="hero">
    <header id="navbar" class="navbar">
        <div class="container clearfix">
            <h1 class="logo"><a href="<?php echo home_url() ; ?> "><?php bloginfo('name'); ?>  <span><?php bloginfo('description'); ?> </span></a></h1>
            <form class="form-search" action="#" method="post">
                <input type="text" name="s" placeholder="search">
                <input type="submit" class="search" name="search-btn" value="">
            </form>
            <ul class="nav">
                <div class="iconMenu"><i class="fa fa-bars fa-2x"></i></div>
                <div class="itemsMenu">
                    <?php wp_nav_menu(array('theme_location' => 'menu')); ?>
<!--                    <li><a href="#hero">home</a></li>-->
<!--                    <li><a href="#about">Category 1</a></li>-->
<!--                    <li><a href="#services">Category 1</a></li>-->
<!--                    <li><a href="#team">Category 1</a></li>-->
<!--                    <li><a href="#team">Category 1</a></li>-->
<!--                    <li><a href="#team">Category 1</a></li>-->
<!--                    <li><a href="#team">Category 1</a></li>-->
<!--                    <li><a href="#portfolio">Category 1</a></li>-->
<!--                    <li><a href="#testimonials">About</a></li>-->
<!--                    <li><a href="#blog">Contact</a></li>-->

                </div>
            </ul>
        </div>
    </header>
</section>