<?php
/*
 * This is /shop page
 */
get_header();
?>
<div class="sidebar">
<?php get_sidebar('shop'); ?>
</div>
<div id="main" class="row">
    <div id="content" class="col-lg-12 col-sm-6 col-md-6 col-xs-12">
<?php woocommerce_content(); ?>
    </div>
</div>
<?php get_footer(); ?>