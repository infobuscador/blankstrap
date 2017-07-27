<?php get_header(); ?>

<header>
    <h1><?php the_archive_title(); ?></h1>
    <?php the_archive_description(); ?>
</header>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <article>
            <header>
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
            </header>
        </article>
    <?php endwhile; ?>


<?php else: ?>
    <h2><?php _e('Nothing Found', 'blankstrap'); ?></h2>

    <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

        <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'blankstrap' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

    <?php elseif ( is_search() ) : ?>

        <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'blankstrap' ); ?></p>
        <?php get_search_form(); ?>

    <?php else : ?>

        <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'blankstrap' ); ?></p>

    <?php endif; ?>


<?php endif; ?>

<?php get_footer(); ?>
