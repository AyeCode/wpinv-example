<?php
/**
 * Create a simple item.
 *
 */
 
$data = array(
    'title'    => __( 'Simple Item', 'textdomain' ),
    'price'    => '199.00',
    'status'   => 'publish'
 );
 
$item = wpinv_create_item( $data, true );