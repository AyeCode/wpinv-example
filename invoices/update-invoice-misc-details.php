<?php
/**
 * Update invoice other details like invoice date, IP address, payment due date, 
 * add user note, add private note etc.
 *
 * @see https://wpinvoicing.com/docs/wpinv_update_invoice/#example-8
 */

$data = array(
    'ID'              => 2559,
    'status'          => 'wpi-pending',
    'post_date'       => '2017-08-17 18:50:30',
    'ip'              => '1.39.51.23',
    'due_date'        => '2017-08-20',
    'private_note'    => 'This is a private note.',
    'user_note'       => 'This is a user note.',
);

$invoice = wpinv_update_invoice( $data, true );