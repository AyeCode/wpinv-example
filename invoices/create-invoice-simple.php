<?php
/**
 * Create a simple invoice.
 *
 */
 
$data = array(
    'status'            => 'pending',                   /* Invoice status */
    'user_id'           => 1,                           /* User id */
    'post_date'         => date( 'Y-m-d H:i:s' ),       /* Invoice date */
    'cart_details'      => array(                       /* Cart details */
        array(
            'id'            => 2483,                    /* Item ID */
            'quantity'      => 1,                       /* Item quantity */
            'custom_price'  => '100.00',                /* Custom base price for the item */
            'meta'          => array()                  /* Cart item custom meta */
        ),
    ),
    'payment_details'   => array(                       /* Payment details */
        'gateway'           => 'bank_transfer',         /* Payment gateway */
        'currency'          => 'USD',                   /* Payment currency */
        'transaction_id'    => time()                   /* Payment transaction id for paid invoice */
    ),
    'user_info'         => array(                       /* User info */
        'first_name'        => 'GD',                    /* Fast name */
        'last_name'         => 'User',                  /* Last name */
        'phone'             => '+91 1119348834',
        'address'           => 'GD Road',
        'city'              => 'Ahmedabad',
        'country'           => 'IN',
        'state'             => 'GJ',
        'zip'               => '345123',
        'company'           => '',
        'vat_number'        => '',
        'discount'          => '10P'
    ),
    'ip'                => '1.39.51.23',
    'invoice_key'       => microtime( true ),
    'user_note'         => 'This is user note',
    'private_note'      => 'This is private note',
    'parent'            => 0
);

$invoice = wpinv_insert_invoice( $data, true );