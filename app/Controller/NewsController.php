<?php
/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 30/06/2017
 * Time: 1:03 AM
 */
class NewsController extends AppController{

    public $layout = 'main_layout1';
    public $uses = 'News';

    public function viewNews(){
        if(is_numeric($this->request->query('newsId'))){
            $news = $this->News->findById($this->request->query('newsId'));
            $this->set('news', $news);
        } else {
            throw new NotFoundException("Invalid Link");
        }
    }
}