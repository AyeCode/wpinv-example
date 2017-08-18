<?php
/**
 * Create a item with advance data.
 *
 * @see https://wpinvoicing.com/docs/wpinv_create_item/#example-2
 */
 
$data = array(
    'type'                 => 'custom',
    'title'                => __( 'Advance Item', 'textdomain' ),
    'custom_id'            => 123456,
    'price'                => '99.00',
    'status'               => 'publish',
    'custom_name'          => 'Custom name',
    'custom_singular_name' => 'For Sale',
    'vat_rule'             => 'digital',
    'editable'             => true,
    'excerpt'              => __( 'This is my first item.', 'textdomain' ),
 );
 
$item = wpinv_create_item( $data, true );