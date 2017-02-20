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

class paynl_bitcoin extends paynl
{
  function paynl_bitcoin()
  {
    parent::__construct(
        'paynl bitcoin signature', 
        '2.1',
        'paynl_bitcoin',
        1594,
        'BITCOIN' , 
        MODULE_PAYMENT_PAYNL_BITCOIN_TEXT_TITLE,
        MODULE_PAYMENT_PAYNL_BITCOIN_TEXT_PUBLIC_TITLE,
        MODULE_PAYMENT_PAYNL_BITCOIN_TEXT_DESCRIPTION,
        defined('MODULE_PAYMENT_PAYNL_BITCOIN_SORT_ORDER') ? MODULE_PAYMENT_PAYNL_BITCOIN_SORT_ORDER : 0,
        defined('MODULE_PAYMENT_PAYNL_BITCOIN_STATUS') && (MODULE_PAYMENT_PAYNL_BITCOIN_STATUS == 'True') ? true : false, 
        defined('MODULE_PAYMENT_PAYNL_BITCOIN_ORDER_STATUS_ID') && ((int)MODULE_PAYMENT_PAYNL_BITCOIN_ORDER_STATUS_ID > 0) ? (int)MODULE_PAYMENT_PAYNL_BITCOIN_ORDER_STATUS_ID : 0,
        'MODULE_PAYMENT_PAYNL_BITCOIN_STATUS'
    );



    
  }//end constructor
  
  
}