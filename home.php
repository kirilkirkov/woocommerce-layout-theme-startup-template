<?php
/**
 * The home template file.
 * This page is loaded when exists instead index.php
 *
 * @package Sydney
 */
get_header();
?>
<div class="row">
    <div class="col-sm-6"> 
        <?php echo do_shortcode('[featured_products]'); ?>
    </div>
    <div class="col-sm-6"> 
        <div class="home-posts">
            <?php
            if (have_posts()) :
                get_template_part('template-parts/content', 'recent');
            else :
                get_template_part('template-parts/content', 'none');
            endif;
            ?>
        </div>
    </div>
</div>
<div class="categories-archives">
    <?php get_sidebar() ?>
</div>
<?php get_footer(); ?>