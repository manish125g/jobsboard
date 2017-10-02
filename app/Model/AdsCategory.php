<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 2/1/2017
 * Time: 8:22 AM
 */
class AdsCategory extends AppModel
{
    public $name = 'AdsCategory';

    public $useTable = 'ads_categories';

    public function getAllActiveList(){
        return $this->find('all', array('conditions' =>array('AdsCategory.status' => true)));
    }
}