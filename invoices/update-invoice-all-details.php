<?php
/**
 * Update all invoice details at once.
 *
 * @see https://wpinvoicing.com/docs/wpinv_update_invoice/#example-9
 */

$data = array(
    'ID'              => 2559,
    'status'          => 'pending',
    'post_date'       => '2017-08-16 18:50:30',
    'cart_details'    => array(
        'add_items'     => array( 
            array(
                'id'            => 2517,
                'quantity'      => 1,
                'meta'          => array(
                    'post_id'   => 1239
                )
            ),
            array(
                'id'            => 1864,
                'quantity'      => 2,
                'custom_price'  => '10.00',
            ),
        ),
        'remove_items'  => array(
            array(
                'id'            => 1864,
                'quantity'      => 1,
            ),
        ),
    ),
    'user_info'         => array(
        'first_name'        => 'GD',
        'last_name'         => 'User',
        'phone'             => '+91 1119348834',
        'address'           => 'Kankariya Lake',
        'city'              => 'Ahmedabad',
        'country'           => 'IN',
        'state'             => 'GJ',
        'zip'               => '380002',
        'company'           => 'GD INC',
        'vat_number'        => 'GB684565898',
        'discount'          => '10P'
    ),
    'payment_details'   => array(
        'gateway'           => 'paypal',
        'transaction_id'    => '65756756756756'
    ),
    'invoice_key'     => 'ghfh56733ef47j2g',
    'ip'              => '1.39.51.23',
    'due_date'        => '2017-08-19',
    'private_note'    => 'This is a private note.',
    'user_note'       => 'This is a user note.',
);

$invoice = wpinv_update_invoice( $data, true );