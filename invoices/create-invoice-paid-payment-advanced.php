<?php
/**
 * Create a simple invoice.
 *
 * @see https://wpinvoicing.com/docs/wpinv_insert_invoice/#example-4
 */
 
$data = array(
    'status'            => 'publish',
    'user_id'           => 1,
    'post_date'         => '2017-08-08 10:10:15',
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
    'payment_details'   => array(
        'gateway'           => 'bank_transfer',
        'currency'          => 'USD',
        'transaction_id'    => 'BNK443545454557'
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
    'ip'                => '1.39.51.23',
    'invoice_key'       => 'f3445gf45ghlvety',
    'user_note'         => 'This is user note.',
    'private_note'      => 'This is a system note.',
    'parent'            => 0
);

$invoice = wpinv_insert_invoice( $data, true );