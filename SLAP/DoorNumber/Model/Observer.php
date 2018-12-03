<?php 
class SLAP_DoorNumber_Model_Observer {
    public function saveCustomData($observer){
        $event = $observer->getEvent();
        $order = $event->getOrder();
        $fieldVal = Mage::app()->getFrontController()->getRequest()->getParams();
        $order->setDoorNumber($fieldVal['door_number']);
    }
}