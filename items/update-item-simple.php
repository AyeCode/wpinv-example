<?php
/**
 * Update item with simple data.
 *
 */
 
$data = array(
    'ID'       => 2570,
    'title'    => __( 'Simple Item', 'textdomain' ),
    'price'    => '299.00',
 );
 
$item = wpinv_update_item( $data, true );