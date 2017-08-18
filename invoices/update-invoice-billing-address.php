<?php
/**
 * Create a simple invoice with pending payment.
 *
 * @see https://wpinvoicing.com/docs/wpinv_update_invoice/#example-7
 */

$data = array(
    'ID'                => 2559,
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
    ),
);

$invoice = wpinv_update_invoice( $data, true );