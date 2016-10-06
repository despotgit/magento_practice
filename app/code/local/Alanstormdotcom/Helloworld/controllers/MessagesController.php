<?php 

class Alanstormdotcom_Helloworld_MessagesController extends Mage_Core_Controller_Front_Action {        
    public function AnotherGoodbyeAction() {
        echo "From MessagesController AnotherGoodbyeAction!";
    }
    
    public function indexAction() {
    	echo "From MessagesController index action!";
    }
    
}


?>