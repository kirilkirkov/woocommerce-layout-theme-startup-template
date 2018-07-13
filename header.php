<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body <?php body_class(); ?>>
        <header> 
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-8 col-xs-12">
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                        if (has_custom_logo()) :
                            ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo esc_url($logo[0]); ?>" alt="<?php bloginfo('name'); ?>" /></a>
                        <?php else : ?>
                            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                            <h2 class="site-description"><?php bloginfo('description'); ?></h2>	        
                        <?php endif; ?>
                    </div>
                    <div class="col-md-8 col-sm-4 col-xs-12">
                        <nav id="mainnav" class="mainnav" role="navigation">
                            <?php wp_nav_menu(array('theme_location' => 'extra-menu', 'container_class' => 'my_extra_menu_class')); ?>
                        </nav>
                    </div>
                </div>
            </div> 
        </header>
        <div class="full-body">
            <div class="container">

  