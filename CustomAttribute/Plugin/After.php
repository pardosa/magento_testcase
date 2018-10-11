<?php

namespace TestCase\CustomAttribute\Plugin;

class After
{
	public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        //return '<b>' . $subject->getData('manufacturer') . '</b> ' . $result;
        return $subject->getCreatedAt() . ' ' . $result;
    }
}