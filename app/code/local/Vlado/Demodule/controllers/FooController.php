<?php 

class Vlado_Demodule_FooController extends Mage_Core_Controller_Front_Action {        
	public function indexAction() {
	   
		echo "From Foo controller indexAction in Vlado Namespace";
		
		$this->loadLayout();
	    $this->renderLayout();
	    
	}
    
    public function goodbyeAction() {
    	
    	echo "In goodbyeAction in VladoDemodule_FooController!";
    	
    	$this->loadLayout();
    	$this->renderLayout();
    	
    }
}


?>