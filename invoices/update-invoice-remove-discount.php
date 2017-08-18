<?php
/**
 * Remove discount applied to the invoice. Use 'none' to remove discount applied to the invoice.
 *
 * @see https://wpinvoicing.com/docs/wpinv_update_invoice/#example-5
 */

$data = array(
    'ID'            => 2559,
    'user_info'     => array(
        'discount'      => 'none'
    ),
);

$invoice = wpinv_update_invoice( $data, true );