<?php
/*
 * Sidebar for home page
 */
?>
<div id="sidebar-home">
    <h2><?php _e("Categories"); ?></h2>
    <ul> <?php wp_list_cats('sort_column=namonthly'); ?> </ul> 
    <h2><?php _e("Archives"); ?></h2>
    <ul> <?php wp_get_archives('sort_column=namonthly'); ?> </ul> 
</div>