<?php

namespace Mediaspa\Ticketing\Model\Ticket\Grid;

class Status implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return \Mediaspa\Ticketing\Model\Ticket::getStatusesOptionArray();
    }
}

