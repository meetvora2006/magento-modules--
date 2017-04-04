<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RercordData
 *
 * @author meet
 */

namespace Geo\Location\Observer;

use Magento\Framework\Event\ObserverInterface;

class RercordData implements ObserverInterface {

    protected $_recordFactory;
    protected $_curl;
    protected $_sessionManager;
     protected $_request;

    public function __construct(
    \Geo\Location\Model\RecordFactory $recordFactory,
    \Magento\Framework\HTTP\Client\Curl $curl,
    \Magento\Framework\Session\SessionManagerInterface $sessionManager,
    \Magento\Framework\App\RequestInterface $request
    ) {
        $this->_recordFactory = $recordFactory;
        $this->_curl = $curl;
        $this->_sessionManager = $sessionManager;
        $this->_request = $request;
        
    }

    public function execute(\Magento\Framework\Event\Observer $observer) {
        $observer->getEvent();
        $item = $this->_recordFactory->create();
       
        $visitSession = $this->_sessionManager->getGeo_location();
        
       
        if (!isset($visitSession)) {
        
        $ipaddress =  $this->_request->getServer('REMOTE_ADDR');
        
            
            $url = "http://freegeoip.net/json/".$ipaddress;

            $this->_curl->get($url);
            $response = $this->_curl->getBody();
            $responseArray = json_decode($response);


            $item->setData(['country' => $responseArray->country_name,
                            'region' => $responseArray->region_name,
                            'city' => $responseArray->city,
                            'zip' => $responseArray->zip_code]);
            $item->save();  
            
            
            $this->_sessionManager->setGeo_location(['geo_location_stored' => 1]);
        }
    }
//put your code here
}
