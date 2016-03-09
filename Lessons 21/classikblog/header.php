<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset=”<?php bloginfo( ‘charset’ ); ?>”>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/style.css">
<?php wp_head(); ?>
</head>

<body>