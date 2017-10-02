<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 1/15/2017
 * Time: 2:15 PM
 */
class Advertise extends AppModel
{
    public $name = 'Advertise';

    public $useTable = 'advertisements';
    
    public $belongsTo = array(
        'AdsCategory' => array(
            'className' =>'AdsCategory',
            'foreignKey' => 'category_id'
        )
    );

    public function getMainAds($main, $limit){
        $conditions = array('AdsCategory.name' =>$main);
        return $this->find('all', array('conditions' => $conditions, 'limit' => $limit));
    }

}