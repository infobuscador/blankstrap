<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/assets/css/fonts.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/assets/css/global.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/html5shiv.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <?php wp_nav_menu([
                    'menu' => 'top-menu',
                    'theme_location' => 'topbar-menu',
                    'depth' => 2,
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'bs-example-navbar-collapse-1',
                    'menu_class' => 'nav navbar-nav',
                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                    'walker' => new wp_bootstrap_navwalker()
                ]); ?>
            </div>
            <div class="col-sm-4">
                Phone
            </div>
        </div>
    </div>
</div>