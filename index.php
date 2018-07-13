

<?php

/*
 * This file is loaded if home.php not exists
 */

get_header();
do_action('woocommerce_after_checkout_form', $checkout);
/*
  $args = array(
  'orderby'  => 'name',
  );
  $products = wc_get_products( $args );
  var_dump($products);
 */
global $woocommerce;
$items = $woocommerce->cart->get_cart();

foreach ($items as $item => $values) {
    $_product = wc_get_product($values['data']->get_id());
    echo "<b>" . $_product->get_title() . '</b>  <br> Quantity: ' . $values['quantity'] . '<br>';
    $price = get_post_meta($values['product_id'], '_price', true);
    echo "  Price: " . $price . "<br>";
}
woocommerce_content();
get_footer();
?>
 