<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Mediaspa\Ticketing\Model\ResourceModel\Ticket;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{
    
    protected function _construct() {
        $this->_init('Mediaspa\Ticketing\Model\Ticket', 'Mediaspa\Ticketing\Model\ResourceModel\Ticket');
    }
    
}
