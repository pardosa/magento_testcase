<?php
namespace TestCase\CustomAttribute\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$productId = 47;
	   	$objectManager =  \Magento\Framework\App\ObjectManager::getInstance();
	   	$currentproduct = $objectManager->create('Magento\Catalog\Model\Product')->load($productId);
	   	echo $currentproduct->getName(); 
		//echo "Hello World";
		exit;
	}
}

