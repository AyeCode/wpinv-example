<?php
/**
 * Create a item with advance data.
 *
 */
 
$data = array(
    'type'                 => 'custom',
    'title'                => __( 'Advance Item', 'textdomain' ),
    'custom_id'            => 1234567891,
    'price'                => '99.00',
    'status'               => 'publish',
    'custom_name'          => 'Custom name',
    'custom_singular_name' => 'For Sale',
    'vat_rule'             => 'digital',
    'excerpt'              => __( 'This is my first item.', 'textdomain' ),
 );
 
$item = wpinv_create_item( $data, true );