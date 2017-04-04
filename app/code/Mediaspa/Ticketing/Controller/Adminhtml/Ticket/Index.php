<?php

namespace Mediaspa\Ticketing\Controller\Adminhtml\Ticket;

class Index extends \Mediaspa\Ticketing\Controller\Adminhtml\Ticket
{
    public function execute()
    {
        if ($this->getRequest()->getQuery('ajax')) {
            $resultForward = $this->resultForwardFactory->create();
            $resultForward->forward('grid');
            return $resultForward;
        }
        $resultPage = $this->resultPageFactory->create();

        $resultPage->setActiveMenu('Mediaspa_Ticketing::ticket_manage');
        $resultPage->getConfig()->getTitle()->prepend(__('Tickets'));

        $resultPage->addBreadcrumb(__('Tickets'), __('Tickets'));
        $resultPage->addBreadcrumb(__('Manage Tickets'), __('Manage Tickets'));

        return $resultPage;
    }
}
