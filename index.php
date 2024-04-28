<?php
/**
 * Plugin Name: Woocommerce c_s
 * Author: Rupom
 * Description: Plugin description
 * Version: 1.0
 */




{
    // add_filter('woocommerce_short_description', 'sp_short_description_callback');
    // function sp_short_description_callback($desc){
    //  return strtoupper($desc);
    // }


    // remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price');
    // add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 12);
    // add_action( 'init', 'remove_my_action' );
    // function remove_my_action() {
    // }
    // remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta',99);

    // add_action('plugins_loaded','alter_woo_hooks');
    // function alter_woo_hooks() {
    //     remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
    // }
    // add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 9);
    // add_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 19);

    // add_filter( 'loop_shop_columns', function($nc){
    //     return 2;
    // } );
    // add_filter( 'woocommerce_product_query', function($wc){
    //     $wc->set('post__not_in',array(235,240));
    //     return $wc;
    // });

    // add_filter( 'woocommerce_product_query', function($wq){
    //     $wq_query = $wq->get('tax_query');
    //     $wq_query[] = array(
    //         'taxonomy' => 'product_cat',
    //         'field' => 'slug',
    //         'terms' => array('music'),
    //         'operator' => 'NOT IN'
    //     );
    //     $wq->set('tax_query',$wq_query);
    // } );
    // remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 1 );

    // add_action('init','remove_excerpt_text',20);
    // function remove_excerpt_text() {
    //     remove_action('woocommerce_single_product_summary','woocommerce_template_single_excerpt',20);
    // }
    // add_action('woocommerce_single_product_summary','woocommerce_template_single_excerpt',42);
    // add_action('init','remove_excerpt_text',40);
    // function remove_excerpt_text() {
    //     remove_action('woocommerce_single_product_summary','woocommerce_template_single_meta',40);
    // }
    // add_action('woocommerce_after_single_product_summary','woocommerce_template_single_meta',60);

    // add_action( 'woocommerce_before_shop_loop', function(){
    
    //     <ul>
    //         <?php woocommerce_output_product_categories() 
    //     </ul>
    //     <?php
    // } );

}
?>
