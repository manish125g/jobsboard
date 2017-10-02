<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 2/18/2017
 * Time: 10:52 PM
 */
class JobsController extends AppController
{
    public $name = 'Jobs';

    public $layout = 'main_layout1';

    public $uses = array('Job', 'User');

    public function beforeFilter(){
        parent::beforeFilter();
        $this->set('jobs', $this->Job->find('all'));
    }

    public function home(){}

    public function search(){
        if($this->request->is('post')){
            $data = $this->request->data;
            $this->Job->set($data);
            $title = $data['Job']['job_title'];
            $location = $data['Job']['job_location'];
            if(!empty($title) || !empty($location)){
                $searchResult = $this->Job->find('all', array(
                    'conditions' => array(
                        'Job.job_title LIKE' => '%'.$title.'%',
                        'Job.job_location LIKE' => '%'.$location.'%',
                    )
                ));
                $this->set('searchResult', $searchResult);
            }

        }
    }

    public function job_detail($id){
        if((is_numeric($id))){
            $job = $this->Job->findById($id);
            $this->set('job', $job);
        }else{
            throw new NotFoundException("Invalid Link");
        }
    }
}