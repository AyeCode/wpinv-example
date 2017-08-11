<?php
/**
 * Update item with advance data.
 *
 */
 
$data = array(
    'ID'                   => 2571,
    'type'                 => 'custom',
    'title'                => __( 'Advance Item', 'textdomain' ),
    'custom_id'            => 123457,
    'price'                => '49.00',
    'status'               => 'publish',
    'custom_name'          => 'Custom name',
    'custom_singular_name' => 'For Sale',
    'vat_rule'             => 'digital',
    'editable'             => true,
    'excerpt'              => __( 'This is my first item.', 'textdomain' ),
    'is_recurring'         => 1,
    'recurring_period'     => 'M',
    'recurring_interval'   => 1,
    'recurring_limit'      => 6,
    'free_trial'           => 1,
    'trial_period'         => 'M',
    'trial_interval'       => 1,
 );
 
$item = wpinv_update_item( $data, true );