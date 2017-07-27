<?php

add_filter('get_the_archive_title', 'archive_title');



function archive_title() {
    if (is_category()) {

        $title = single_cat_title('', false);
    } elseif (is_tag()) {

        $title = single_tag_title('', false);
    } elseif (is_author()) {

        $title = sprintf(__('Author: %s'), '<span class="vcard">' . get_the_author() . '</span>');
    } elseif (is_year()) {

        $title = sprintf(__('Year: %s'), get_the_date(_x('Y', 'yearly archives date format')));
    } elseif (is_month()) {

        $title = sprintf(__('Month: %s'), get_the_date(_x('F Y', 'monthly archives date format')));
    } elseif (is_day()) {

        $title = sprintf(__('Day: %s'), get_the_date(_x('F j, Y', 'daily archives date format')));
    } elseif (is_tax('post_format')) {
        if (is_tax('post_format', 'post-format-aside')) {
            $title = _x('Asides', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-gallery')) {
            $title = _x('Galleries', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-image')) {
            $title = _x('Images', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-video')) {
            $title = _x('Videos', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-quote')) {
            $title = _x('Quotes', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-link')) {
            $title = _x('Links', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-status')) {
            $title = _x('Statuses', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-audio')) {
            $title = _x('Audio', 'post format archive title');
        } elseif (is_tax('post_format', 'post-format-chat')) {
            $title = _x('Chats', 'post format archive title');
        }
    } elseif (is_post_type_archive()) {

        $title = sprintf(__('Archives: %s'), post_type_archive_title('', false));
    } elseif (is_tax()) {
        $tax = get_taxonomy(get_queried_object()->taxonomy);

        $title = sprintf(__('%1$s: %2$s'), $tax->labels->singular_name, single_term_title('', false));
    } else {
        $title = __('Archives');
    }

    return $title;
}

