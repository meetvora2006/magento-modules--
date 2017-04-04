<?php

namespace Mediaspa\Ticketing\Controller\Ticket;

class Index extends \Mediaspa\Ticketing\Controller\Ticket
{
    public function execute()
    {
        $resultPage = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_PAGE);
        return $resultPage;
    }
}