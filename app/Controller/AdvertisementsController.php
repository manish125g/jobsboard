<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 2/16/2017
 * Time: 11:48 PM
 */
class AdvertisementsController extends AppController
{
    public $name = "Advertisements";

    public $uses = array('User', 'Advertise', 'AdsCategory');

    public $layout = 'main_layout1';

    public $defaultAction = 'home';

    public function beforeFilter(){
        parent::beforeFilter();
        $this->set('adsCategories', $this->AdsCategory->getAllActiveList());
    }

    public function home(){

    }

}