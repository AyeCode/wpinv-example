<?php
/**
 * Increase quantity for existing item. Following example will increase item quantity by 2.
 *
 * @see https://wpinvoicing.com/docs/wpinv_update_invoice/#example-2
 */

$data = array(
    'ID'            => 2559,
    'cart_details'  => array(
        'add_items'     => array( 
            array(
                'id'        => 2517,
                'quantity'  => 2,
            )
        ),
    ),
);

$invoice = wpinv_update_invoice( $data, true );