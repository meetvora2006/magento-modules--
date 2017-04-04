<?php

namespace Mediaspa\Ticketing\Controller\Adminhtml;

abstract class Ticket extends \Magento\Backend\App\Action {

    protected $resultPageFactory;
    protected $resultForwardFactory;
    protected $resultRedirectFactory;

    public function __construct(
    \Magento\Backend\App\Action\Context $context,
     \Magento\Framework\View\Result\PageFactory $resultPageFactory, 
      \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->resultForwardFactory = $resultForwardFactory;
        $this->resultRedirectFactory = $context->getResultRedirectFactory();
        parent::__construct($context);
    }

    protected function _isAllowed() {
        return $this->_authorization->isAllowed('Mediaspa_Ticketing::ticket_manage');
    }

    protected function _initAction() {
        $this->_view->loadLayout();
        $this->_setActiveMenu(
                'Mediaspa_Ticketing::ticket_manage'
        )->_addBreadcrumb(
                __('Ticketing'), __('Tickets')
        );
        return $this;
    }

}
