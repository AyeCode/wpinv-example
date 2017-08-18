<?php
/**
 * Create a simple invoice with pending payment.
 *
 * @see https://wpinvoicing.com/docs/wpinv_insert_invoice/#example-1
 */

$data = array(
    'status'        => 'wpi-pending',
    'user_id'       => 1,
    'cart_details'  => array(
        array(
            'id'    => 2118
        ),
    )
);

$invoice = wpinv_insert_invoice( $data, true );