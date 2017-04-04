<?php

namespace Mediaspa\Ticketing\Controller\Adminhtml\Ticket;

class Grid extends \Mediaspa\Ticketing\Controller\Adminhtml\Ticket
{
    public function execute()
    {
        $this->_view->loadLayout(false);
        $this->_view->renderLayout();
    }
}
