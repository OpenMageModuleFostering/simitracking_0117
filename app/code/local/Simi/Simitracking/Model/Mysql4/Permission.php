<?php

class Simi_Simitracking_Model_Mysql4_Permission extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('simitracking/permission', 'entity_id');
    }
}
