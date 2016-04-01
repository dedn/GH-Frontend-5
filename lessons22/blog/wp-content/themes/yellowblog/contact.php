
<?php
/*
Template Name: Contact
*/
?>

<?php get_header();?>

<?php

 if(isset($_POST['submitted'])) {
    if(trim($_POST['contact_name']) === '') {
        $nameError = 'Введите ваше имя';
        $hasError = true;
    } else {
        $name = trim($_POST['contact_name']);
    }

    if(trim($_POST['contact_email']) === '')  {
        $emailError = 'Введите e-mail';
        $hasError = true;
    } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['contact_email']))) {
        $emailError = 'Не верный адрес.';
        $hasError = true;
    } else {
        $email = trim($_POST['contact_email']);
    }

    if(trim($_POST['contact_theme']) === '') {
        $themeError = 'Введите тему ';
        $hasError = true;
    } else {
        $theme = trim($_POST['contact_theme']);
    }

    if(trim($_POST['contact_comments']) === '') {
        $commentError = 'Введите сообщение';
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['contact_comments']));
        } else {
            $comments = trim($_POST['contact_comments']);
        }
    }

    if(!isset($hasError)) {
        $emailTo = get_option('tz_email');
        if (!isset($emailTo) || ($emailTo == '') ){
            $emailTo = get_option('admin_email');
        }
        $subject = 'Сообщение с сайта от '.$name;
        $body = "Имя: $name \n\nE-mail: $email \n\nТема: $theme \n\nСообщение: $comments";
        $headers = 'From: '.$name.' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;
        wp_mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }

} ?>

    <section id="contact" class="contact">
        <div class="container">
            <ul>
                <li class="title-block-contact">
                    <h3>Contact</h3>
                    <span>Morbi accumsan ipsum velit. </span>
                    <p class="description-contact">Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</p>

                </li>
                <li class="big-phone">
                    <img src="<?php bloginfo('template_url'); ?>/images/tel.png" alt="big telephone images">
                </li>
                <li class="communication">
                    <ul>
                        <li class="communication-title">Name</li>
                        <li class="communication-phone"><img src="<?php bloginfo('template_url'); ?>/images/small-tel.png" alt="small telephone"><span class="number"><?php echo get_theme_mod('contact_section_control'); ?></span></li>
                        <li class="communication-discription">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. </li>
                        <li class="communication-email"><img src="<?php bloginfo('template_url'); ?>/images/email-icon.png" alt="email"><a href="#"><?php echo get_theme_mod('email_section_control'); ?></a></li>
                    </ul>


                </li>
            </ul>
            <?php the_content (); ?>
           <div id="contact_form">
                           <?php if(isset($emailSent) && $emailSent == true) { ?>
                                 <div class="contact_message">
                                     Your message was successfully sent !</div>
                           <?php } else { ?>
                                 <?php if(isset($hasError) || isset($captchaError)) { ?>
 
                                 <?php } ?>
 
                                 <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
 
                                       <div class="contact_left">
                                            <div class="contact_name">
                                                 <input type="text" placeholder="Name" name="contact_name" id="contact_name" value="<?php if(isset($_POST['contact_name'])) echo $_POST['contact_name'];?>" class="required requiredField" />
                                                 <?php if($nameError != '') { ?>
                                                       <div class="errors"><?=$nameError;?></div>
                                                 <?php } ?>
                                            </div>
                                            <div class="contact_email">
                                                 <input type="text" placeholder="Email" name="contact_email" id="contact_email" value="<?php if(isset($_POST['contact_email']))  echo $_POST['contact_email'];?>" class="required requiredField email" />
                                                 <?php if($emailError != '') { ?>
                                                       <div class="errors"><?=$emailError;?></div>
                                                 <?php } ?>
                                            </div>
                                            <div class="contact_theme">
                                                 <input type="text" placeholder="Phone" name="contact_theme" id="contact_theme" value="<?php if(isset($_POST['contact_theme'])) echo $_POST['contact_theme'];?>" class="required requiredField" />
                                                 <?php if($themeError != '') { ?>
                                                       <div class="errors"><?=$themeError;?></div>
                                                 <?php } ?>
                                            </div>
                                       </div>
 
                                       <div class="contact_right">
                                            <div class="contact_textarea">
                                                 <textarea placeholder="Message" name="contact_comments" id="commentsText" rows="12" cols="56" class="required requiredField"><?php if(isset($_POST['contact_comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['contact_comments']); } else { echo $_POST['contact_comments']; } } ?></textarea>
                                                 <?php if($commentError != '') { ?>
                                                       <div class="errors"><?=$commentError;?></div>
                                                 <?php } ?>
                                            </div>
 
                                            <button type="contsubmit" class="contact_submit">Send</button>
                                            <input type="hidden" name="submitted" id="submitted" value="true" />
                                       </div>
                                 </form>
                           <?php } ?>
                      </div>
        </div>

    </section>

<?php get_footer(); ?>
<script type="text/javascript" src="js/jquery.1.7.1.min.js"></script>
<script src="js/jquery.bxslider.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">

</script>
</body>
</html>