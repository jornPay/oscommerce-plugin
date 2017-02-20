<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of paynl_ideal
 *
 * @author gaetan
 */
require_once('paynl/paynl.php');

class paynl_paypal extends paynl
{

  function paynl_paypal()
  {
    parent::__construct(
        'paynl paypal signature', '2.1', 'paynl_paypal', 138,'PAYPAL', MODULE_PAYMENT_PAYNL_PAYPAL_TEXT_TITLE, MODULE_PAYMENT_PAYNL_PAYPAL_TEXT_PUBLIC_TITLE, MODULE_PAYMENT_PAYNL_PAYPAL_TEXT_DESCRIPTION, defined('MODULE_PAYMENT_PAYNL_PAYPAL_SORT_ORDER') ? MODULE_PAYMENT_PAYNL_PAYPAL_SORT_ORDER : 0, defined('MODULE_PAYMENT_PAYNL_PAYPAL_STATUS') && (MODULE_PAYMENT_PAYNL_PAYPAL_STATUS == 'True') ? true : false, defined('MODULE_PAYMENT_PAYNL_PAYPAL_ORDER_STATUS_ID') && ((int)MODULE_PAYMENT_PAYNL_PAYPAL_ORDER_STATUS_ID > 0) ? (int)MODULE_PAYMENT_PAYNL_PAYPAL_ORDER_STATUS_ID : 0, 'MODULE_PAYMENT_PAYNL_PAYPAL_STATUS'
    );
  }
//end constructor
}