<?php

namespace Mediaspa\Ticketing\Block\Ticket;

class Index extends \Magento\Framework\View\Element\Template {

    protected $dateTime;

    protected $customerSession;

    protected $ticketFactory;

    public function __construct(
            \Magento\Framework\View\Element\Template\Context $context, 
            \Magento\Framework\Stdlib\DateTime $dateTime,
            \Magento\Customer\Model\Session $customerSession,
            \Mediaspa\Ticketing\Model\TicketFactory $ticketFactory,
            array $data = []
    ) {
        $this->dateTime = $dateTime;
        $this->customerSession = $customerSession;
        $this->ticketFactory = $ticketFactory;
        parent::__construct($context, $data);
    }

    public function getTickets() {
        return $this->ticketFactory
                        ->create()
                        ->getCollection()
                        ->addFieldToFilter('customer_id', $this->customerSession->getCustomerId());
    }

    public function getSeverities() {
        return \Mediaspa\Ticketing\Model\Ticket::getSeveritiesOptionArray();
        }

}
