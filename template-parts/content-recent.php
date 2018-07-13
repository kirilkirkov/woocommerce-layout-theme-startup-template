<h2><?php echo __('Recent Posts', 'abitwo'); ?></h2>

<?php
$args = array('numberposts' => '5');
$recent_posts = wp_get_recent_posts($args);
foreach ($recent_posts as $recent) {
    ?>
    <article id="post-<?php echo $recent["ID"]; ?>" <?php post_class(); ?>>
        <div class="post">
            <h2><a href="<?php the_permalink($recent["ID"]); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute($recent["ID"]); ?>"><?php the_title($recent["ID"]); ?></a></h2>
            <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
            <div class="entry">
                <?php the_content(); ?>
            </div>
            <p class="postmetadata"><?php _e('Posted in'); ?> <?php the_category($recent["ID"], ', '); ?></p>
        </div> 
    </article>
    <?php
}
wp_reset_query();
?> 