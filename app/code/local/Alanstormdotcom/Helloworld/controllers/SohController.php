<?php 

class Alanstormdotcom_Soh_IndexController extends Mage_Core_Controller_Front_Action {        
	public function indexAction() {
	    //remove our previous echo
	    //echo 'Hello Index!';
	    
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