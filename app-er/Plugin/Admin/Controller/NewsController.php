<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 1/7/2017
 * Time: 10:21 PM
 */
class NewsController extends AdminAppController
{
    public $name = 'News';

    public $layout = 'admin_dashboard_layout';

    public $uses = array('Admin.News');

    public function add_news(){
        if($this->request->is('post')){
            $data = $this->request->data;
            $this->News->set($data);
            $fields = array('news_title', 'news_short_desc', 'news_desc');
            if($this->News->validates(array('fieldList' => $fields))){
                $data['News']['created_by'] = $this->Session->read('userId');
                $data['News']['status'] = 1;
                if($this->News->save($data, false)){

                    $url = array('controller' =>'news', 'action' => 'add_news', 'plugin' =>'admin');
                    $this->redirect($url);
                }
            }
        }
    }

    public function admin(){
        $news = $this->News->find('all');
        $this->set('news', $news);
    }

}