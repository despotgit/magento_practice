<?php 

class Alanstormdotcom_Helloworld_IndexController extends Mage_Core_Controller_Front_Action {        
	public function indexAction() {
	   
		echo "faruka";
		
		return;
		
		$this->loadLayout();
	    $this->renderLayout();
	    
	}
    
    public function goodbyeAction() {
    	
    	echo "Goodbye A!";
    	
    	return;
    	
    	$this->loadLayout();
    	$this->renderLayout();
    	
    	
    }
}


?>