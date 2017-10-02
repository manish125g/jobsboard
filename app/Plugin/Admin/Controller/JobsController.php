<?php
/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 1/7/2017
 * Time: 10:21 PM
 */
class JobsController extends AdminAppController
{
    public $name = 'Jobs';

    public $layout = 'admin_dashboard_layout';

    public $uses = array('Admin.Job');

    public function add_job(){
        if($this->request->is('post')){
            $data = $this->request->data;
            $this->Job->set($data);
            $fields = array('company_name', 'job_title', 'job_designation', 'job_department', 'job_location',
                'job_contact_number', 'job_description', 'job_expiry_date', 'job_skills', 'is_hot_news', 'is_new_job');
            if($this->Job->validates(array('fieldList' => $fields))){
                $userId = $this->Session->read('userId');
                $data['Job']['created_by'] = $userId;
                if($this->Job->save($data, false)){
                    $this->Session->setFlash(__('Job has been created successfully.'), "default",
                        array('class' => 'alert alert-success'));
                    $url = array('controller' =>'jobs', 'action' =>'add_job', 'plugin' =>'admin');
                    $this->redirect($url);
                }
            }
        }
    }

    public function admin(){
        $isAdmin = $this->Session->read('userType');
        if(isset($isAdmin) && $isAdmin == 'admin'){
            $jobs = $this->Job->find('all');
        } else {
            $userId = $this->Session->read('userId');
            $jobs = $this->Job->find('all', array('conditions'=>array('Job.created_by'=>$userId)));
        }
        $this->set('jobs', $jobs);
    }

    public function update($id){

        $this->set('id', $id);
        if($this->request->is('get') && !empty($id)){
            $data = $this->Job->getJobById($id);
            $this->request->data = $data;
            unset($data["Job"]["id"]);
        }
        if($this->request->is('post')){
            $data = $this->request->data;
            $this->Job->set($data);
            $fields = array('company_name', 'job_title', 'job_designation', 'job_department', 'job_location',
                'job_contact_number', 'job_description', 'job_expiry_date', 'job_skills', 'is_hot_news', 'is_new_job');
            if($this->Job->validates(array('fieldList' => $fields))){
                $this->Job->id = $id;
                if($this->Job->save($data, false)){
                    $this->Session->setFlash(__('Job has been updated successfully.'), "default",
                        array('class' => 'alert alert-success'));
                    $url = array('controller' =>'jobs', 'action' =>'admin', 'plugin' =>'admin');
                    $this->redirect($url);
                }
            }
        }
    }

    public function delete($id){
        $this->Job->id = $id;
        if($this->Job->delete($id)){
            $this->Flash->set('Ads Job has been deleted successfully');
            $this->redirect($this->referer());
        }
    }

    public function change_visible_status($id, $status){
        $this->Job->id = $id;
        if($this->Job->saveField('status', $status)){
            $this->Flash->set('Job Status has been updated successfully');
            $this->redirect($this->referer());
        }
    }

}