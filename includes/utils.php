<?php
/**
 * Created by PhpStorm.
 * User: Malgin
 * Date: 24.01.15
 * Time: 19:18
 */

function dwr_required_fields_are_set() {
    $merchant_login = get_option('dwr_merchant_login');
    $merchant_pass_one = get_option('dwr_merchant_pass_one');
    $merchant_pass_two = get_option('dwr_merchant_pass_two');
    $dwr_result_url = get_option('dwr_result_url');
    $dwr_result_url_method = get_option('dwr_result_url_method');
    $dwr_default_donation_amount = get_option('dwr_default_donation_amount');
    $dwr_operation_description = get_option('dwr_operation_description');

    if ($merchant_login AND
        $merchant_pass_one AND
        $merchant_pass_two AND
        $dwr_result_url AND
        $dwr_result_url_method AND
        $dwr_default_donation_amount AND
        $dwr_operation_description)
    {
        return true;
    } else {
        return false;
    }
}

/**
 * Create donation entry in the DB
 *
 * @param float $amount      Sum of transaction
 * @param int   $robokassaId Robokassa-assigned operation ID
 * @return id                   Database ID of the transaction
 */
function dwr_create_donation_entry($amount, $robokassaId)
{
    global $wpdb;

    $table_donations = $wpdb->prefix . DWR_DONATIONS_TABLE_NAME;

    $wpdb->insert(
        $table_donations,
        array(
            'amount' => number_format($amount, 2),
            'robokassa_id' => (int)$robokassaId,
            'donation_date' => current_time('mysql', 1)
        ),
        array(
            '%f',
            '%d',
            '%s'
        )
    );

    return $wpdb->insert_id;
}
