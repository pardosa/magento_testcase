<?php

namespace TestCase\CustomAttribute\Plugin;

class After
{
	public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $subject->getData('manufacturer') . ' ' . $result;
        //return $subject->getCreatedAt() . ' ' . $result;
    }
}