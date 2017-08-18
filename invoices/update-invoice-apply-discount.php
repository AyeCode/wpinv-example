<?php
/**
 * Apply discount coupon to invoice. It will overwrite existing discount if invoice has other 
 * discount coupon already applied.
 *
 * @see https://wpinvoicing.com/docs/wpinv_update_invoice/#example-4
 */

$data = array(
    'ID'            => 2559,
    'user_info'     => array(
        'discount'      => '10P'
    ),
);

$invoice = wpinv_update_invoice( $data, true );