<?php
/**
 * Remove items or decrease quantity for existing invoice items. 
 * Following example will decrease item quantity by 1. If item reaches 
 * to the zero quantity then item will be removed from invoice items.
 *
 * @see https://wpinvoicing.com/docs/wpinv_update_invoice/#example-3
 */

$data = array(
    'ID'            => 2559,
    'cart_details'  => array(
        'remove_items'  => array( 
            array(
                'id'        => 2517,
                'quantity'  => 1,
            )
        ),
    ),
);

$invoice = wpinv_update_invoice( $data, true );