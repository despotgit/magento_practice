<?php 

class Alanstormdotcom_Helloworld_FooController extends Mage_Core_Controller_Front_Action {        
	public function indexAction() {
	   
		echo "from foo controller indexAction";
		
		return;
		
		$this->loadLayout();
	    $this->renderLayout();
	    
	}
    
    public function goodbyeAction() {
    	
    	echo "from foo controller goodbyeAction";
    	
    	return;
    	
    	$this->loadLayout();
    	$this->renderLayout();
    	
    	
    }
}


?>