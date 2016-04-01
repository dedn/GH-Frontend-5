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
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO --> 
           <a class="navbar-brand logo" href="index.html"><img src="assets/images/logo.jpg" alt="logo"></a>                      
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
            <li><a href="index.html">Home</a></li>                   
            <li class="active"><a href="blog-archive.html">BLOG </a></li>
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
    <img src="assets/images/blog-banner.jpg" alt="img">
    <div class="blog-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="blog-banner-area">
              <h2>Blog Single</h2>
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>                
                <li class="active">Blog Single</li>
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
                <div class="blog-left blog-details">
                  <!-- Start single blog post -->
                  <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                    <article class="single-from-blog">


                  <article class="single-from-blog">
                    <div class="blog-title">
                      <h2><a href="blog-single.html"><a
                              href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      </h2>
                      <p>Posted by <a href="#" class="blog-admin"><?php the_author() ?></a> on
                        <span class="blog-date"><?php the_time('j F, Y'); ?></span></p>
                    </div>
                    <figure>
                      <a href="blog-single.html"><img alt="img" src="assets/images/the-sky.jpg"></a>
                    </figure>
                   <div class="blog-details-content">
                     <p><?php the_content(); ?></p>
                      <span>Tag : </span><a href="#">Good,</a><a href="#">Nice,</a><a href="#">Post</a>
                      <h1>This is h1 title</h1>
                      <h2>This is h2 title</h2>
                      <h3>This is h3 title</h3>
                      <h4>This is h4 title</h4>
                      <h5>This is h5 title</h5>
                      <h6>This is h6 title</h6>
                   </div>                  
                  </article>
                      <?php 
                      if ( comments_open() || '0' != get_comments_number() ) :
                        comments_template();
                      endif;
                      ?>
                  <?php endwhile; ?>
                  <?php else: ?>
                    <h3 class="not found">not found...</h3>
                  <?php endif; ?>
                  <div class="blog-comment">
                    <h2>Post a comment</h2>
                    <form class="comment-form" action="">
                      <div class="form-group">                
                        <input type="text" placeholder="Name" class="form-control">
                      </div>
                      <div class="form-group">                
                        <input type="email" placeholder="Enter Email" class="form-control">
                      </div>              
                      <div class="form-group">
                        <textarea class="form-control"></textarea>
                      </div>
                      <button class="button button-default" data-text="Comment" type="submit"><span>Comment</span></button>
                    </form>
                  </div>
                  <!-- End single blog post -->                  
                </div>
              </div>
              <div class="col-lg-4 col-md-5 col-sm-12">
                <aside class="blog-right">
                  <?php get_sidebar(); ?>
                  <!-- End Sidebar Single widget -->
                </aside>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End blog section -->


<?php get_footer(); ?>