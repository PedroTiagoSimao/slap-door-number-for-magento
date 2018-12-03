<?php
$this->addAttribute('customer_address', 'door_number', array(
    'type'      => 'varchar',
    'label'     => 'Door Number',
    'input'     => 'text',
    'position'  => 75,
    'required'  => true,//or true
    'is_system' => 0,
));
$attribute = Mage::getSingleton('eav/config')->getAttribute('customer_address', 'door_number');

$used_in_forms = array();
$used_in_forms[] = "customer_address_edit"; //this form code is used in checkout billing/shipping

$attribute->setData('used_in_forms', array(
    'customer_register_address',
    'customer_address_edit',
    'adminhtml_customer_address'
));
$attribute->setData('is_user_defined', 0);
$attribute->save();