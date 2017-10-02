<?php
/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 1/7/2017
 * Time: 10:21 PM
 */
class JobsController extends AdminAppController
{
    public $name = 'jobs';

    public $layout = 'admin_dashboard_layout';

    public $uses = array('Admin.Job');

    public function add_job(){
        if($this->request->is('post')){
            $data = $this->request->data;
            $this->Job->set($data);
            $fields = array('company_name', 'job_title', 'job_designation', 'job_department', 'job_location',
                'job_contact_number', 'job_description', 'job_expiry_date', 'job_skills', 'is_hot_news', 'is_new_job');
            if($this->Job->validates(array('fieldList' => $fields))){
                if($this->Job->save($data, false)){
                    //$this->Job->set(null);
                    $this->Session->setFlash(__('Job has been created successfully.'), "default",
                        array('class' => 'alert alert-success'));
                    $url = array('controller' =>'jobs', 'action' =>'add_job', 'plugin' =>'admin');
                    $this->redirect($url);
                }
            }
        }
    }

    public function admin(){
        $jobs = $this->Job->find('all');
        $this->set('jobs', $jobs);
    }

}