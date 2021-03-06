<?php
if(isset($_POST['submitted'])) {
  if(trim($_POST['contactName']) === '') {
    $nameError = 'Введите ваше имя.';
    $hasError = true;
  } else {
    $name = trim($_POST['contactName']);
  }

  if(trim($_POST['email']) === '')  {
    $emailError = 'Введите вашу почту';
    $hasError = true;
  } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
    $emailError = 'Вы ввели неправильный адрес.';
    $hasError = true;
  } else {
    $email = trim($_POST['email']);
  }

  if(trim($_POST['comments']) === '') {
    $commentError = 'Введите сообщение.';
    $hasError = true;
  } else {
    if(function_exists('stripslashes')) {
      $comments = stripslashes(trim($_POST['comments']));
    } else {
      $comments = trim($_POST['comments']);
    }
  }

  if(!isset($hasError)) {
    $emailTo = get_option('tz_email');
    if (!isset($emailTo) || ($emailTo == '') ){
      $emailTo = get_option('admin_email');
    }
    $subject = 'Сообщение с Блога от пользователя '.$name;
    $body = "Имя: $name \n\nE-mail: $email \n\nСообщение: $comments";
    $headers = 'От: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Ответить: ' . $email;
    $headers = "Content-type: text/plain; charset=\"utf-8\"";
    mail($emailTo, $subject, $body, $headers);
    $emailSent = true;
  }

} ?>
<?php get_header(); ?>
<!-- BEGAIN PRELOADER -->
<div id="preloader">
  <div class="loader">&nbsp;</div>
</div>
<!-- END PRELOADER -->

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<!-- Start header section -->
<header id="header">
  <div class="header-inner">
    <!-- Header image -->
    <img src="<?php bloginfo('template_url'); ?>/assets/images/header-bg.jpg" alt="img">
    <div class="header-overlay">
      <div class="header-content">
        <!-- Start header content slider -->
        <h2 class="header-slide">WE GENERATE
          <span>MOST CREATIVE</span>
          <span>MOST Design</span>
          <span>MOST Valuable</span>
          IDEA</h2>
        <!-- End header content slider -->
        <!-- Header btn area -->
        <div class="header-btn-area">
          <a class="knowmore-btn" href="#">KNOW MORE</a>
          <a class="download-btn" href="#">DOWNLOAD Theme</a>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- End header section -->
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
        <a class="navbar-brand logo" href="index.html"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo.jpg" alt="logo"></a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul id="top-menu" class="nav navbar-nav main-nav menu-scroll">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#team">TEAM</a></li>
          <li><a href="#service">SERVICE</a></li>
          <li><a href="#portfolio">PORTFOLIO</a></li>
          <li><a href="#pricing-table">PRICE </a></li>
          <li><a href="#from-blog">BLOG </a></li>
          <li><a href="#contact">CONTACT</a></li>
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
  <!-- Start about section -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Start welcome area -->
          <div class="welcome-area">
            <div class="title-area">
              <h2 class="tittle">Welcome to <span>Nex</span></h2>
              <span class="tittle-line"></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  labore et dolore magna aliqua. Ut enim ad minim veniamo laboris nis</p>
            </div>
            <div class="welcome-content">
              <ul class="wc-table">
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-users wc-icon"></span>
                    <h4 class="wc-tittle">Creative concept</h4>
                    <p>At vero eos et accusamus et iusto odio in dignissimos ducimus voluptatum in delenatque </p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-sellsy wc-icon"></span>
                    <h4 class="wc-tittle">interface design</h4>
                    <p>At vero eos et accusamus et iusto odio in dignissimos ducimus voluptatum in delenatque </p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-line-chart wc-icon"></span>
                    <h4 class="wc-tittle">strategy</h4>
                    <p>At vero eos et accusamus et iusto odio in dignissimos ducimus voluptatum in delenatque </p>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content wow fadeInUp">
                    <span class="fa fa-bus wc-icon"></span>
                    <h4 class="wc-tittle">business solution</h4>
                    <p>At vero eos et accusamus et iusto odio in dignissimos ducimus voluptatum in delenatque </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- End welcome area -->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="about-area">
            <div class="row">
              <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="about-left wow fadeInLeft">
                  <img src="<?php bloginfo('template_url'); ?>/assets/images/about-img.jpg" alt="img">
                  <a class="introduction-btn" href="#">Introduction</a>
                </div>
              </div>
              <div class="col-md-7 col-sm-6 col-xs-12">
                <div class="about-right wow fadeInRight">
                  <div class="title-area">
                    <h2 class="tittle">About <span>Nex</span> design</h2>
                    <span class="tittle-line"></span>
                    <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illotore itatis et quasi architecto beatae vitae dicta sunt explicabo.</p> 

                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores e</p>
                    <div class="about-btn-area">
                      <a href="#" class="button button-default" data-text="KNOW MORE"><span>KNOW MORE</span></a>
                    </div>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End about section -->

  <!-- Start call to action -->
  <section id="call-to-action">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/call-to-action-bg.png" alt="img">
    <div class="call-to-overlay">
      <div class="container">
        <div class="call-to-content wow fadeInUp">
          <h2>The most impressive templete you will find</h2>
          <a href="#" class="button button-default" data-text="GET IT NOW"><span>GET IT NOW</span></a>
        </div>
      </div>
    </div> 
  </section>
  <!-- End call to action -->

  <!-- Start Team action -->
  <section id="team">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="team-area">
            <div class="title-area">
              <h2 class="tittle">Meet our team</h2>
              <span class="tittle-line"></span>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
            </div>
            <!-- Start team content -->
            <div class="team-content">
              <ul class="team-grid">
                <li>
                  <div class="team-item team-img-1 wow fadeInUp">
                    <div class="team-info">
                      <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-pinterest"></span></a>
                      <a href="#"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>John Richerd</p>
                    <span>CEO & Founder</span>
                  </div>
                </li>
                <li>
                  <div class="team-item team-img-2 wow fadeInUp">
                    <div class="team-info">
                      <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-pinterest"></span></a>
                      <a href="#"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>MIKE BATTON</p>
                    <span>Co-founder</span>                  
                  </div>
                </li>
                <li>
                  <div class="team-item team-img-3 wow fadeInUp">
                    <div class="team-info">
                      <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-pinterest"></span></a>
                      <a href="#"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>JOHN VICK</p>
                    <span>Developer</span>
                  </div>
                </li>
                  <li>
                  <div class="team-item team-img-4 wow fadeInUp">
                    <div class="team-info">
                      <p> I must explain to you how all this mistaken idea of denouncing pleasure n</p>
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-pinterest"></span></a>
                      <a href="#"><span class="fa fa-rss"></span></a>
                    </div>
                  </div>
                  <div class="team-address">
                    <p>ROB HANSOM</p>
                    <span>Senior designer</span>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End team content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Team action -->

  <!-- Start service section -->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="service-area">
            <div class="title-area">
              <h2 class="tittle">Service we offer</h2>
              <span class="tittle-line"></span>
              <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore</p>
            </div>
            <!-- service content -->
            <div class="service-content">
              <ul class="service-table">
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-edit service-icon"></span>
                    <h4 class="service-title">UX Design</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-sort-amount-asc service-icon"></span>
                    <h4 class="service-title">Strategy</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                 <div class="single-service wow slideInUp">
                    <span class="fa fa-map-o service-icon"></span>
                    <h4 class="service-title">UI Design</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-rocket service-icon"></span>
                    <h4 class="service-title">Analystic</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-car service-icon"></span>
                    <h4 class="service-title">Usibility</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-bank service-icon"></span>
                    <h4 class="service-title">Business solution</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-user-secret service-icon"></span>
                    <h4 class="service-title">Creative concept</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-support service-icon"></span>
                    <h4 class="service-title">Support</h4>
                    <p>At vero eos et accusa mus odio in dignissimos ducimus qui anditiis the tatum</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service section -->

  <!-- Start Portfolio section -->
  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="portfolio-area">
            <div class="title-area">
              <h2 class="tittle">Recent portfolio</h2>
              <span class="tittle-line"></span>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
            </div>
            <!-- Portfolio content -->
            <div class="portfolio-content">
                <!-- portfolio menu -->
               <div class="portfolio-menu">
                 <ul>
                   <li class="filter" data-filter="all">All</li>
                   <li class="filter" data-filter=".branding">Branding</li>
                   <li class="filter" data-filter=".design">Design</li>
                   <li class="filter" data-filter=".development">Development</li>
                   <li class="filter" data-filter=".photography">Photography</li>
                 </ul>
               </div>
               <!-- Portfolio container -->
               <div id="mixit-container" class="portfolio-container">
                 <div class="single-portfolio mix branding">
                   <div class="single-item">
                     <img src="<?php bloginfo('template_url'); ?>/assets/images/portfolio-img-small1.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="<?php bloginfo('template_url'); ?>/assets/images/portfolio-img-big1.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix design">
                   <div class="single-item">
                     <img src="<?php bloginfo('template_url'); ?>/assets/images/portfolio-img-small2.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="<?php bloginfo('template_url'); ?>/assets/images/portfolio-img-big2.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix development">
                   <div class="single-item">
                     <img src="<?php bloginfo('template_url'); ?>/assets/images/portfolio-img-small3.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="<?php bloginfo('template_url'); ?>/assets/images/portfolio-img-big3.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix photography">
                   <div class="single-item">
                     <img src="<?php bloginfo('template_url'); ?>/assets/images/portfolio-img-small4.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="<?php bloginfo('template_url'); ?>/assets/images/portfolio-img-big4.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix photography">
                   <div class="single-item">
                     <img src="<?php bloginfo('template_url'); ?>/assets/images/portfolio-img-small5.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="<?php bloginfo('template_url'); ?>/assets/images/portfolio-img-big5.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix photography">
                   <div class="single-item">
                     <img src="<?php bloginfo('template_url'); ?>/assets/images/portfolio-img-small6.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="<?php bloginfo('template_url'); ?>/assets/images/portfolio-img-big6.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix photography">
                   <div class="single-item">
                     <img src="<?php bloginfo('template_url'); ?>/assets/images/portfolio-img-small7.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="<?php bloginfo('template_url'); ?>/assets/images/portfolio-img-big7.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
                 <div class="single-portfolio mix photography">
                   <div class="single-item">
                     <img src="<?php bloginfo('template_url'); ?>/assets/images/portfolio-img-small2.jpg" alt="img">
                     <div class="single-item-content">
                        <div class="portfolio-social-icon">
                          <a class="fancybox" data-fancybox-group="gallery" href="<?php bloginfo('template_url'); ?>/assets/images/portfolio-img-big2.jpg"><i class="fa fa-eye"></i></a>
                          <a class="link-btn" href="#"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="portfolio-title">
                          <h4>Mobile application</h4>
                          <span>UI Design</span>
                        </div>
                     </div>
                   </div>
                 </div>
               </div>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Portfolio section -->

  <!-- Start counter section -->
  <section id="counter">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/counter-bg.jpg" alt="img">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start counter area -->
            <div class="counter-area">
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-users"></span>
                  <div class="counter-count">
                    <span class="counter">1050</span>
                    <p>Happy Clients</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-bus"></span>
                  <div class="counter-count">
                    <span class="counter">750</span>
                    <p>Project delivery</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-twitter"></span>
                  <div class="counter-count">
                    <span class="counter">2,300</span>
                    <p>Followers</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-tasks"></span>
                  <div class="counter-count">
                    <span class="counter">800</span>
                    <p>Project done</p>
                  </div>
                </div>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <!-- End counter section -->

  <!-- Start Pricing Table section -->
  <section id="pricing-table">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pricing-table-area">
            <div class="title-area">
              <h2 class="tittle">Pricing table</h2>
              <span class="tittle-line"></span>
              <p>unde omnis iste natus error sit voluptatem accusantium doloremque laudantium  aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>
            </div>
            <!-- service content -->
            <div class="pricing-table-content">
                <ul class="price-table">
                  <li class="wow slideInUp">
                    <div class="single-price">
                      <h4 class="price-header">Basic</h4>
                      <span class="price-amount">$0.00/mo</span>
                      <p>5GB Storage</p>
                      <p>1GB RAM</p>
                      <p>400GB Bandwidth</p>
                      <p>10 Email Address</p>
                      <p>Unlimited access</p>
                      <p>Forum Support</p>
                      <a data-text="SIGN UP" class="button button-default" href="#"><span>SIGN UP</span></a>
                    </div>
                  </li>
                  <li class="wow slideInUp">
                    <div class="single-price standard-price">
                      <h4 class="price-header">Standard</h4>
                      <span class="price-amount">$10.00/mo</span>
                      <p>5GB Storage</p>
                      <p>1GB RAM</p>
                      <p>400GB Bandwidth</p>
                      <p>10 Email Address</p>
                      <p>Unlimited access</p>
                      <p>Forum Support</p>
                      <a data-text="SIGN UP" class="button button-default" href="#"><span>SIGN UP</span></a>
                    </div>
                  </li>
                  <li class="wow slideInUp">
                    <div class="single-price">
                      <h4 class="price-header">Advance</h4>
                      <span class="price-amount">$19.00/mo</span>
                      <p>5GB Storage</p>
                      <p>1GB RAM</p>
                      <p>400GB Bandwidth</p>
                      <p>10 Email Address</p>
                      <p>Unlimited access</p>
                      <p>Forum Support</p>
                      <a data-text="SIGN UP" class="button button-default" href="#"><span>SIGN UP</span></a>
                    </div>
                  </li>
                  <li class="wow slideInUp">
                    <div class="single-price">
                      <h4 class="price-header">Mighty</h4>
                      <span class="price-amount">$39.00/mo</span>
                      <p>5GB Storage</p>
                      <p>1GB RAM</p>
                      <p>400GB Bandwidth</p>
                      <p>10 Email Address</p>
                      <p>Unlimited access</p>
                      <p>Forum Support</p>
                      <a data-text="SIGN UP" class="button button-default" href="#"><span>SIGN UP</span></a>
                    </div>
                  </li>
               </ul>     
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Pricing Table section -->

  <!-- Start Testimonial section -->
  <section id="testimonial">
    <img src="<?php bloginfo('template_url'); ?>/assets/images/testimonial-bg.jpg" alt="img">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start Testimonial area -->
            <div class="testimonial-area">
              <div class="title-area">
                <h2 class="tittle">What people say about us</h2>
                <span class="tittle-line"></span>              
              </div>
              <div class="testimonial-conten">
                <!-- Start testimonial slider -->
                <div class="testimonial-slider">
                  <!-- single slide -->
                  <div class="single-slide">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoquat. Duis aute irure d olor in reprehenderit</p>
                    <div class="single-testimonial">
                      <img class="testimonial-thumb" src="<?php bloginfo('template_url'); ?>/assets/images/testimonial-image1.png" alt="img">
                      <p>Jonna Hike</p>
                      <span>CEO, Themeforest</span>
                    </div>
                  </div>
                  <!-- single slide -->
                  <div class="single-slide">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoquat. Duis aute irure d olor in reprehenderit</p>
                    <div class="single-testimonial">
                      <img class="testimonial-thumb" src="<?php bloginfo('template_url'); ?>/assets/images/team-member2.png" alt="img">
                      <p>Jonna Hike</p>
                      <span>CEO, Themeforest</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <!-- End Testimonial section -->

  <!-- Start from blog section -->
  <section id="from-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="from-blog-area">
            <div class="title-area">
              <h2 class="tittle"><?php wp_nav_menu(array('theme_location' => 'menu')); ?></h2>
              <span class="tittle-line"></span>
              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est</p>
            </div>
            <!-- From Blog content -->
            <div class="from-blog-content">
              <div class="row">
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="<?php bloginfo('template_url'); ?>/assets/images/the-sky.jpg" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog-single.html">Here is the post title</a></h2>
                      <p>Posted by <a class="blog-admin" href="#">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                    </div>
                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis </p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="<?php bloginfo('template_url'); ?>/assets/images/photographer.jpg" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog-single.html">Here is the post title</a></h2>
                      <p>Posted by <a class="blog-admin" href="#">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                    </div>
                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis </p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                </div>
                <div class="col-md-4">
                  <article class="single-from-blog">
                    <figure>
                      <a href="blog-single.html"><img src="<?php bloginfo('template_url'); ?>/assets/images/sealand.jpg" alt="img"></a>
                    </figure>
                    <div class="blog-title">
                      <h2><a href="blog-single.html">Here is the post title</a></h2>
                      <p>Posted by <a class="blog-admin" href="#">admin</a> on <span class="blog-date">23rd july 2015</span></p>
                    </div>
                    <p>Sed ut perspiciatis unde mnis is te natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis </p>
                    <div class="blog-footer">
                      <a href="#"><span class="fa fa-comment"></span>18 Comments</a>
                      <a href="#"><span class="fa fa-thumbs-o-up"></span>35 Likes</a>
                    </div>
                  </article>
                </div>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End from blog section -->

  <section id="client">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="client-area">
            <ul class="client-table">
              <li><img src="<?php bloginfo('template_url'); ?>/assets/images/envato.png" alt="client logo"></li>
              <li><img src="<?php bloginfo('template_url'); ?>/assets/images/google.png" alt="client logo"></li>
              <li><img src="<?php bloginfo('template_url'); ?>/assets/images/amazon.png" alt="client logo"></li>
              <li><img src="<?php bloginfo('template_url'); ?>/assets/images/discovery.png" alt="client logo"></li>
              <li><img src="<?php bloginfo('template_url'); ?>/assets/images/envato.png" alt="client logo"></li>
              <li><img src="<?php bloginfo('template_url'); ?>/assets/images/tuenti.png" alt="client logo"></li>
              <li><img src="<?php bloginfo('template_url'); ?>/assets/images/envato.png" alt="client logo"></li>
              <li><img src="<?php bloginfo('template_url'); ?>/assets/images/google.png" alt="client logo"></li>
              <li><img src="<?php bloginfo('template_url'); ?>/assets/images/amazon.png" alt="client logo"></li>
              <li><img src="<?php bloginfo('template_url'); ?>/assets/images/discovery.png" alt="client logo"></li>
              <li><img src="<?php bloginfo('template_url'); ?>/assets/images/envato.png" alt="client logo"></li>
              <li><img src="<?php bloginfo('template_url'); ?>/assets/images/tuenti.png" alt="client logo"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Start Contact section -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="contact-left wow fadeInLeft">
            <h2>Contact with us</h2>
            <address class="single-address">
              <h4>Postal address:</h4>
              <p>PO Box 16122 Collins Street West Victoria 8007 Australia</p>
            </address>
             <address class="single-address">
              <h4>Headquarters:</h4>
              <p>121 King Street, Melbourne Victoria 3000 Australia</p>
            </address>
             <address class="single-address">
              <h4>Phone</h4>
              <p>Phone Number: (123) 456 7890</p>
              <p>Fax Number: (123) 456 7890</p>
            </address>
             <address class="single-address">
              <h4>E-Mail</h4>
              <p>Support: Support@example.com</p>
              <p>Sales: sales@example.com</p>
            </address>
          </div>
        </div>
        <div class="col-md-8 col-sm-6 col-xs-12">
          <div class="contact-right wow fadeInRight">
            <h2>Send a message</h2>
            <?php if(isset($emailSent) && $emailSent == true) { ?>
              <div class="thanks">
                <p>Спасибо, ваше сообщение отправлено.</p>
              </div>
            <?php } else { ?>
              <?php if(isset($hasError) || isset($captchaError)) { ?>
                <p class="error">Извините, произошла ошибка.<p>
              <?php } ?>
              <form action="<?php the_permalink(); ?>" id="contactForm" method="post" class="contact-form">
                <ul class="contactform">
                  <li class="form-group">
                    <label for="contactName">Имя:</label>
                    <input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="required requiredField form-control" />
                    <?php if($nameError != '') { ?>
                      <span class="error"><?=$nameError;?></span>
                    <?php } ?>
                  </li>
                  <li class="form-group">
                    <label for="email">E-mail</label><input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="required requiredField email form-control" />
                    <?php if($emailError != '') { ?>
                      <span class="error"><?=$emailError;?></span>
                    <?php } ?>
                  </li>
                  <li class="form-group">
                    <label for="commentsText">Сообщение:</label>
                    <textarea name="comments" id="commentsText" rows="20" cols="50" class="required requiredField form-control"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
                    <?php if($commentError != '') { ?>
                      <span class="error"><?=$commentError;?></span>
                    <?php } ?>
                  </li>
                  <li>
                    <button type="submit" value="<?php _e('Send', 'theme_textdomain'); ?>" data-text="SUBMIT" class="button button-default"><span>SUBMIT</span></button>
                  </li>
                </ul>
                <input type="hidden" name="submitted" id="submitted" value="true" />
              </form>
            <?php } ?>

<!--            <form action="" class="contact-form">-->
<!--              <div class="form-group">-->
<!--                <input type="text" class="form-control" placeholder="Name">-->
<!--              </div>-->
<!--              <div class="form-group">-->
<!--                <input type="email" class="form-control" placeholder="Enter Email">-->
<!--              </div>-->
<!--              <div class="form-group">-->
<!--                <textarea class="form-control"></textarea>-->
<!--              </div>-->
<!--              <button type="submit" data-text="SUBMIT" class="button button-default"><span>SUBMIT</span></button>-->
<!--            </form>-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->
  <!-- Start Google Map -->
  <section id="google-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d6303.67022361714!2d144.955652!3d-37.817331!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-37.8173306!2d144.9556518!5e0!3m2!1sen!2sbd!4v1442411159706" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>  
  </section>
  <!-- End Google Map -->
<?php get_footer(); ?>
