<?php
/**
 * Update invoice payment details.
 *
 * @see https://wpinvoicing.com/docs/wpinv_update_invoice/#example-6
 */

$data = array(
    'ID'                => 2559,
    'payment_details'   => array(
        'gateway'           => 'paypal',
        'transaction_id'    => '65756756756756'
    ),
    'invoice_key'       => 'ghfh56733ef47j2g'
);

$invoice = wpinv_update_invoice( $data, true );