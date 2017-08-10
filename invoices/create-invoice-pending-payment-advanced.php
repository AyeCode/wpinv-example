<?php
/**
 * Create a simple invoice.
 *
 */
 
$data = array(
    'status'            => 'pending',
    'user_id'           => 1,
    'cart_details'      => array(
        array(
            'id'            => 2118,
            'quantity'      => 1,
            'custom_price'  => '100.00',
            'meta'          => array(
                'post_id'   => 1239
            )
        ),
    ),
    'user_info'         => array(
        'first_name'        => 'GD',
        'last_name'         => 'User',
        'phone'             => '+91 1119348834',
        'address'           => 'Kankaria Lake',
        'city'              => 'Ahmedabad',
        'country'           => 'IN',
        'state'             => 'GJ',
        'zip'               => '380002',
        'company'           => '',
        'vat_number'        => '',
        'discount'          => '10P'
    ),
    'due_date'          => '2017-08-10',
    'ip'                => '1.39.51.23',
    'invoice_key'       => 'tuy445gf45ghlvety',
    'user_note'         => 'This is user note.',
    'private_note'      => 'This is a system note.',
);

$invoice = wpinv_insert_invoice( $data, true );