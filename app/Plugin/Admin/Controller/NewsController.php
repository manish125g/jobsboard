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

    public function add_news()
    {
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $this->News->set($data);
            $fields = array('news_title', 'news_short_desc', 'news_desc');
            if ($this->News->validates(array('fieldList' => $fields))) {
                $data['News']['created_by'] = $this->Session->read('userId');
                $data['News']['status'] = 1;
                if ($this->News->save($data, false)) {
                    $url = array('controller' => 'news', 'action' => 'add_news', 'plugin' => 'admin');
                    $this->redirect($url);
                }
            }
        }
    }

    public function admin()
    {
        $news = $this->News->find('all', array('conditions' => array('News.status' => 1), 'order' => array('News.id DESC')));
        $this->set('news', $news);
    }

    public function updateNews()
    {
        if (is_numeric($this->request->query('newsId'))) {
            $news = $this->News->findById($this->request->query('newsId'));
            $this->set('news', $news);
            $this->Session->write('newsId', $this->request->query('newsId'));
        } else {
            throw new NotFoundException("Invalid Link");
        }
    }

    public function update_news()
    {
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $this->News->set($data);
            CakeLog::error(json_encode($data));
            $this->News->id = $this->Session->read('newsId');
            $fields = array('news_title', 'news_short_desc', 'news_desc');
            if ($this->News->validates(array('fieldList' => $fields))) {
                $data['News']['updated_by'] = $this->Session->read('userId');
                $data['News']['status'] = 1;
                if ($this->News->save($data, false)) {
                    $this->Flash->set('News Updated successfully');
                    $url = array('controller' => 'news', 'action' => 'admin', 'plugin' => 'admin');
                    $this->redirect($url);
                }
            }
        }
    }

    public function deleteNews()
    {
        if (is_numeric($this->request->query('newsId'))) {
            $news = $this->News->findById($this->request->query('newsId'));
            if ($news) {
                $this->News->id = $this->request->query('newsId');
                $this->News->saveField('status', 0);
                $this->redirect(
                    array(
                        "controller" => "News",
                        "action" => "admin"));
            } else {
                throw new NotFoundException("Invalid Link");
            }
        } else {
            throw new NotFoundException("Invalid Link");
        }
    }
}