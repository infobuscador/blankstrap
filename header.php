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
            <div class="col-sm-8 text-left">
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
            <div class="col-sm-4 text-right">
                <a class="phone" rel="nofollow" href="tel:<?php echo str_replace(' ', '', get_redux('phone')); ?>">
                    <i class="fa fa-phone-square"></i> <?php echo get_redux('phone'); ?>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="main-menu">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 text-left">
                <?php if(get_redux('logo', 'url')): ?>
                    <img src="<?php echo get_redux('logo', 'url'); ?>" alt="<?php bloginfo('name'); ?>" class="main-logo"/>
                <?php else: ?>
                    <strong><?php bloginfo('name'); ?></strong>
                <?php endif; ?>
            </div>
            <div class="col-sm-9 text-right">
                <?php wp_nav_menu([
                    'menu' => 'main-menu',
                    'theme_location' => 'main-menu',
                    'depth' => 2,
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'bs-example-navbar-collapse-1',
                    'menu_class' => 'nav navbar-nav pull-right',
                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                    'walker' => new wp_bootstrap_navwalker()
                ]); ?>
            </div>
        </div>
    </div>
</div>