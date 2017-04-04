<?php

namespace Mediaspa\Ticketing\Block\Adminhtml;

class Ticket extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_controller = 'adminhtml';
        $this->_blockGroup = 'Mediaspa_Ticketing';
        $this->_headerText = __('Tickets');

        parent::_construct();

        $this->removeButton('add');
    }
}
