<?php
/**
 * Create a simple invoice with pending payment.
 *
 */

$data = array(
    'status'            => 'publish',
    'user_id'           => 1,
    'post_date'         => '2017-08-08 11:20:38',
    'cart_details'      => array(
        array(
            'id'        => 2118
        ),
    ),
    'payment_details'   => array(
        'gateway'           => 'paypal',
        'currency'          => 'USD',
        'transaction_id'    => '9TK485797B9101342'
    ),
);

$invoice = wpinv_insert_invoice( $data, true );