<?php

namespace Mediaspa\Ticketing\Model\ResourceModel;

class Ticket extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
   
    protected function _construct()
    {
        $this->_init('mediaspa_ticketing_ticket', 'ticket_id');
    }
}