<?php

/**
 * For full documentation, please visit: http://docs.reduxframework.com/
 * For a more extensive sample-config file, you may look at:
 * https://github.com/reduxframework/redux-framework/blob/master/sample/sample-config.php
 */

if (!class_exists('Redux')) {
    return;
}

// This is your option name where all the Redux data is stored.
$opt_name = "bstrap";

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    'opt_name' => 'bstrap',
    'dev_mode' => FALSE,
    'display_name' => '<img src="' . get_bloginfo('template_url') . '/admin/assets/img/favicon.png' . '" /> Blankstrap',
    'display_version' => '2.7',
    'page_slug' => 'blankstrap_',
    'page_title' => __('Theme options', 'blankstrap'),
    'footer_text' => sprintf('© %s Created by <a href="http://www.clickmedia.es" target="_blank" rel="nofollow">clickmedia</a>', date('Y')),
    'menu_type' => 'menu',
    'menu_title' => 'Blankstrap',
    'menu_icon' => get_bloginfo('template_url') . '/admin/assets/img/favicon.png',
    'page_parent' => 'themes.php',
    'page_parent_post_type' => 'your_post_type',
    'default_mark' => '*',
    'class' => 'theme-options',
    'hints' => array(
        'icon' => 'el el-info-sign',
        'icon_position' => 'left',
        'icon_size' => 'large',
        'tip_style' => array(
            'color' => 'cream',
            'style' => 'bootstrap',
        ),
        'tip_position' => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect' => array(
            'show' => array(
                'effect' => 'fade',
                'duration' => '500',
                'event' => 'mouseover',
            ),
            'hide' => array(
                'duration' => '500',
                'event' => 'mouseleave unfocus',
            ),
        ),
    ),
    'output' => TRUE,
    'output_tag' => TRUE,
    'settings_api' => TRUE,
    'cdn_check_time' => '1440',
    'compiler' => TRUE,
    'page_permissions' => 'manage_options',
    'save_defaults' => TRUE,
    'show_import_export' => FALSE,
    'database' => 'options',
    'transient_time' => '3600',
    'network_sites' => TRUE,
    'system_info' => TRUE,
);


Redux::setArgs($opt_name, $args);

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> START HELP TABS
 */

$tabs = array(
    array(
        'id' => 'redux-help-tab-1',
        'title' => __('Theme Information 1', 'admin_folder'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'admin_folder')
    ),
    array(
        'id' => 'redux-help-tab-2',
        'title' => __('Theme Information 2', 'admin_folder'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'admin_folder')
    )
);
Redux::setHelpTab($opt_name, $tabs);

// Set the help sidebar
$content = __('<p>This is the sidebar content, HTML is allowed.</p>', 'admin_folder');
Redux::setHelpSidebar($opt_name, $content);


Redux::setSection($opt_name, array(
    'title' => __('General', 'blankstrap'),
    'id' => 'general',
    'icon' => false,
    'fields' => array(
        array(
            'id' => 'logo',
            'type' => 'media',
            'title' => __('Default logo', 'blankstrap'),
        ),
        array(
            'id' => 'mobile-logo',
            'type' => 'media',
            'title' => __('Mobile Logo', 'blankstrap'),
        ),
        array(
            'id' => 'footer-logo',
            'type' => 'media',
            'title' => __('Footer logo', 'blankstrap'),
        ),
    )
));

Redux::setSection($opt_name, array(
    'title' => __('Contact', 'blankstrap'),
    'id' => 'contact',
    'icon' => false,
    'fields' => array(
        array(
            'id'       => 'address',
            'type'     => 'text',
            'title'    => __( 'Address', 'blankstrap' ),
        ),
        array(
            'id'       => 'city',
            'type'     => 'text',
            'title'    => __( 'City', 'blankstrap' ),
        ),
        array(
            'id'       => 'zipcode',
            'type'     => 'text',
            'title'    => __( 'Zip Code', 'blankstrap' ),
        ),
        array(
            'id'       => 'state',
            'type'     => 'text',
            'title'    => __( 'State', 'blankstrap' ),
        ),
        array(
            'id'       => 'country',
            'type'     => 'text',
            'title'    => __( 'Country', 'blankstrap' ),
        ),
        array(
            'id'       => 'phone',
            'type'     => 'text',
            'title'    => __( 'Phone number', 'blankstrap' ),
        ),
        array(
            'id'       => 'mobile',
            'type'     => 'text',
            'title'    => __( 'Mobile number', 'blankstrap' ),
        ),
        array(
            'id'       => 'email',
            'type'     => 'text',
            'title'    => __( 'Email', 'blankstrap' ),
        ),
    )
));


Redux::setSection($opt_name, array(
    'title' => __('Social', 'blankstrap'),
    'id' => 'social',
    'icon' => false,
    'fields' => array(
        array(
            'id'       => 'facebook',
            'type'     => 'text',
            'title'    => __( 'Facebook', 'blankstrap' ),
        ),
        array(
            'id'       => 'twitter',
            'type'     => 'text',
            'title'    => __( 'Twitter', 'blankstrap' ),
        ),
        array(
            'id'       => 'instagram',
            'type'     => 'text',
            'title'    => __( 'Instagram', 'blankstrap' ),
        ),
        array(
            'id'       => 'youtube',
            'type'     => 'text',
            'title'    => __( 'Youtube', 'blankstrap' ),
        ),
    )
));

