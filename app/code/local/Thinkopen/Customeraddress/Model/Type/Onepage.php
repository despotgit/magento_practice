<?php

class Thinkopen_Customeraddress_Model_Type_Onepage extends Mage_Checkout_Model_Type_Onepage
{
    public function saveBilling($data, $customerAddressId)
    {
        $splittedAddressArray = split(',', $data['street'][0]);
        $data['street'][0] = trim($splittedAddressArray[0]) . ', ' . trim($data['civic_number']);
        parent::saveBilling($data, $customerAddressId);
    }
    
    public function saveShipping($data, $customerAddressId)
    {
        $splittedAddressArray = split(',', $data['street'][0]);
        $data['street'][0] = trim($splittedAddressArray[0]) . ', ' . trim($data['civic_number']);
        parent::saveShipping($data, $customerAddressId);
    }

}
