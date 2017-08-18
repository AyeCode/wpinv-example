<?php
/**
 * Create a simple recurring item.
 *
 * @see https://wpinvoicing.com/docs/wpinv_create_item/#example-3
 */
 
$data = array(
    'title'                 => __( 'Simple Recurring Item', 'textdomain' ),
    'price'                 => '199.00',
    'status'                => 'publish',
    'is_recurring'          => 1,
    'recurring_period'      => 'M',
    'recurring_interval'    => 1,
    'recurring_limit'       => 6,
);
 
$item = wpinv_create_item( $data, true );