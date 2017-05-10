<?php 
namespace Sagar\HelloWorld\Block;

class HelloWorld extends \Magento\Framework\View\Element\Template 
{
	/*public function __construct(
			\Sagar\HelloWorld\Helper\Data $helper
		){
		$this->helper = $helper;
	}*/
	public function getHelloWorldText(){
		return "Hello World";
	}
	/*public function callHelperFunction(){
		$this->helper->HelperFunction();
	}*/
}
?>