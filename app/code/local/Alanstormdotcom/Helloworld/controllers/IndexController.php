<?php 

class Alanstormdotcom_Helloworld_IndexController extends Mage_Core_Controller_Front_Action {        
	public function indexAction() {
	    //remove our previous echo
	    //echo 'Hello Index!';
	    
		$this->loadLayout();
	    $this->renderLayout();
	    
	}
    
    public function goodbyeAction() {
    	$this->loadLayout();
    	$this->renderLayout();
    	
    	
    }
}


?>