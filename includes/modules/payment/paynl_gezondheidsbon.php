<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of paynl_gezondheidsbon
 *
 * @author gaetan
 */
require_once('paynl/paynl.php');

class paynl_gezondheidsbon extends paynl
{
  function paynl_gezondheidsbon()
  {
    parent::__construct(
        'paynl gezondheidsbon signature', 
        '2.1',
        'paynl_gezondheidsbon',
        812,
        'GEZONDHEIDSBON' , 
        MODULE_PAYMENT_PAYNL_GEZONDHEIDSBON_TEXT_TITLE,
        MODULE_PAYMENT_PAYNL_GEZONDHEIDSBON_TEXT_PUBLIC_TITLE,
        MODULE_PAYMENT_PAYNL_GEZONDHEIDSBON_TEXT_DESCRIPTION,
        defined('MODULE_PAYMENT_PAYNL_GEZONDHEIDSBON_SORT_ORDER') ? MODULE_PAYMENT_PAYNL_GEZONDHEIDSBON_SORT_ORDER : 0,
        defined('MODULE_PAYMENT_PAYNL_GEZONDHEIDSBON_STATUS') && (MODULE_PAYMENT_PAYNL_GEZONDHEIDSBON_STATUS == 'True') ? true : false, 
        defined('MODULE_PAYMENT_PAYNL_GEZONDHEIDSBON_ORDER_STATUS_ID') && ((int)MODULE_PAYMENT_PAYNL_GEZONDHEIDSBON_ORDER_STATUS_ID > 0) ? (int)MODULE_PAYMENT_PAYNL_GEZONDHEIDSBON_ORDER_STATUS_ID : 0,
        'MODULE_PAYMENT_PAYNL_GEZONDHEIDSBON_STATUS'
    );



    
  }//end constructor
  
  
}