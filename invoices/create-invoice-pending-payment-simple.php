<?php
/**
 * Create a simple invoice with pending payment.
 *
 */

$data = array(
    'status'        => 'pending',
    'user_id'       => 1,
    'cart_details'  => array(
        array(
            'id'    => 2118
        ),
    )
);

$invoice = wpinv_insert_invoice( $data, true );