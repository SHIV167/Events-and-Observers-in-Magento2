<?php
namespace Shiv\Mymodule\Model\ResourceModel\View;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Shiv\Mymodule\Model\View::class, \Shiv\Mymodule\Model\ResourceModel\View::class);
    }
}