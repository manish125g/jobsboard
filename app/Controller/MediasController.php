<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 2/5/2017
 * Time: 1:27 PM
 */
class MediasController extends AppController
{
    public $name = 'Medias';

    public $uses = array('Media');

    public $layout = 'main_layout1';

    public function home(){
        ini_set('allow_url_fopen', 'on');
        $this->set('medias', $this->Media->find('all', array('conditions'=> array('Media.status' => true), 'order' =>'Media.created DESC')));
    }

    public function single($id){
        $this->set('single', $this->Media->find('first', array('conditions' => array('Media.id' =>$id))));
        $this->set('medias', $this->Media->find('all', array('conditions'=> array('Media.status' => true), 'order' =>'Media.created DESC')));
    }

}