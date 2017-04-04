<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UpgradeSchema
 *
 * @author meet
 */
namespace Geo\Location\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class UpgradeSchema implements UpgradeSchemaInterface {
   
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context) {
        
        $setup->startSetup();
        
             $dbVersion = $context->getVersion();
             
             if(version_compare($dbVersion, '1.0.0','=')){ 
                
                 $table = $setup->getConnection()
                                ->newTable($setup->getTable('geo_location_record'))
                                ->addColumn(
                                       'id',
                                       \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                                        null,
                                        ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                                        'ID'
                                        )
                                ->addColumn(
                                       'country',
                                       \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                                        64,
                                        [],
                                        'Country'
                                        )
                                ->addColumn(
                                       'region',
                                       \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                                        64,
                                        [],
                                        'Region'
                                        )
                                ->addColumn(
                                       'city',
                                       \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                                        64,
                                        [],
                                        'City'
                                        )
                                ->addColumn(
                                       'zip',
                                       \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                                        64,
                                        [],
                                        'Zip'
                                        )
                                ->setComment('Geo Location Record Table');
                       
              $setup->getConnection()->createTable($table);
             }
        
        $setup->endSetup();
    }

//put your code here
}
