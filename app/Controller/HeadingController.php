<?php

/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 21/07/2017
 * Time: 11:26 AM
 */
class HeadingController extends AppController
{
    public $name = 'Heading';

    public $layout = 'main_layout';

    public $uses = array('Heading', 'User');

    public function beforeFilter(){
        parent::beforeFilter();
        $this->set('heading', $this->Heading->find('first', array('order'=>array('Heading.id DESC'))));
    }

    public function home(){}
}