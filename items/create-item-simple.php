<?php
/**
 * Create a simple item.
 *
 * @see https://wpinvoicing.com/docs/wpinv_create_item/#example-1
 */
 
$data = array(
    'title'    => __( 'Simple Item', 'textdomain' ),
    'price'    => '199.00',
    'status'   => 'publish'
 );
 
$item = wpinv_create_item( $data, true );