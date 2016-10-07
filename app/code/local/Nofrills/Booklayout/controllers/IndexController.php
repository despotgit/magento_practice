<?php
/**
 * @author @davidselo
 * @description  
*/
class Nofrills_Booklayout_IndexController extends Mage_Core_Controller_Front_Action
{

	public function indexAction(){
	
		$block_1 = new Mage_Core_Block_Text();
		$block_1 -> setText ("Original Text ");
		
		$block_2 = new Mage_Core_Block_Text();
		$block_2 -> setText ("The second sentence.");
		
		$main_block = new Mage_Core_Block_Template ();
		$main_block -> setTemplate ("helloworld.phtml");
		$main_block -> setChild ("the_first" ,$block_1 );
		$main_block -> setChild ("the_second" ,$block_2 );
		
		$block_1 -> setText ("Wait, I want this text instead.");
		echo $main_block -> toHtml();
	}
	public function blocktemplateAction(){
		/* @daviselo: para  ver como funciona los bloques con plantillas, posterior ejemplo realizaremos con a�aieno
		 * el bloque con estructura de padres e hijos
		$block= new Mage_Core_Block_Template();
		$block->setTemplate('nofrills/helloworld.phtml');
		*/
		$main_block= new Mage_Core_Block_Template();
		$main_block->setTemplate('nofrills/helloworld.phtml');
		//var_dump($block->getTemplateFile());//Con esta instrucci�n averiguamos donde esta buscando Magento el template
		$paragraph_block = new Mage_Core_Block_Text ();
		$paragraph_block -> setText ('One paragraph to rule them all.');
		$main_block->setChild('the_first', $paragraph_block);
		echo $main_block->toHtml();
	}
	public function manejandobloquesAction ()
	
	{
		$block_1 = new Mage_Core_Block_Text ();
		$block_1->setText ('Original Text');
		$block_2 = new Mage_Core_Block_Text();
		$block_2-> setText('The second sentence.');
		$main_block = new Mage_Core_Block_Template();
		$main_block->setTemplate ('nofrills/manejandobloques.phtml');
		$main_block->setChild ('the_first' ,$block_1 );
		$main_block->setChild ('the_second' ,$block_2 );
		$block_1->setText ('Wait , I want this text instead .');
		echo $main_block->toHtml();
	}
	public function helloblockAction()
	{
		
		$main_block = new Nofrills_Booklayout_Block_Helloworld();
		
		
		echo $main_block->toHtml();
	}
	public function layoutAction ()
	{
		
		$layout = Mage::getSingleton('core/layout');
		//print "<pre>"; print_r($layout); print "</pre>";exit;
		$block = $layout->createBlock('nofrills_booklayout/helloworld','root');
		$block -> setTemplate('nofrills/helloworld-2.phtml');
		
		$layout -> addOutputBlock("root") -> setDirectOutput(true) -> getOutput();
		
		
	} 
	
}