<?php 

class Alanstormdotcom_Helloworld_IndexController extends Mage_Core_Controller_Front_Action {        
	public function indexAction() {
	   
		echo "faruk";
		
		return;
		
		$this->loadLayout();
	    $this->renderLayout();
	    
	}
    
    public function goodbyeAction() {
    	
    	echo "Goodbye!";
    	
    	return;
    	
    	$this->loadLayout();
    	$this->renderLayout();
    	
    	
    }
}


?>