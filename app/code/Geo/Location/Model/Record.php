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
namespace Geo\Location\Model;

class Record extends \Magento\Framework\Model\AbstractModel {
    
    protected function _construct(){
        $this-> _init ('Geo\Location\Model\ResourceModel\Record');
    }
}
