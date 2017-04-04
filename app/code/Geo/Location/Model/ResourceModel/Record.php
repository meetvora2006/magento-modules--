<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Record
 *
 * @author meet
 */
namespace Geo\Location\Model\ResourceModel;
class Record extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
    protected function _construct() {
       $this-> _init ('geo_location_record', 'id'); 
    }

//put your code here
}
