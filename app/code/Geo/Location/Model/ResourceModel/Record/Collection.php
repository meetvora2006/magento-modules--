<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Collection
 *
 * @author meet
 */
namespace Geo\Location\Model\ResourceModel\Record;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {
     protected function _construct() {
       $this-> _init (
               'Geo\Location\Model\Record',
               'Geo\Location\Model\ResourceModel\Record'
               ); 
    }
//put your code here
}
