<?php
/**
 * Add a new items to invoice. It will increase quantity if an item already was already added to invoice.
 *
 * @see https://wpinvoicing.com/docs/wpinv_update_invoice/#example-1
 */

$data = array(
    'ID'            => 2559,
    'cart_details'  => array(
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
            )
        ),
    ),
);

$invoice = wpinv_update_invoice( $data, true );