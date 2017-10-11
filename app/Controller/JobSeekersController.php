<?php

/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 11/10/2017
 * Time: 12:20 AM
 */
class JobSeekersController extends AppController
{
    public $name = 'JobSeekers';

    public $layout = 'main_layout1';

    public $uses = array('Jobseeker', 'User', 'Jobs');

    public function beforeFilter(){
    }

    public function apply_job(){
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $this->Jobseeker->set($data);
            if (!empty($data['Jobseeker']['resume_file'])) {
                $file = $data['Jobseeker']['resume_file'];
                $fileName = $file['tmp_name'];
                $data['Jobseeker']['resume_file'] = $file['name'];
            }
            $data['Jobseeker']['created_by'] = $this->Session->read('userId');
            $data['Jobseeker']['dob'] = date('Y-m-d', strtotime($this->request->data['Jobseeker']['dob']));
            if($this->Jobseeker->save($data)){
                if(!empty($fileName)){
                    $uploadPath = 'files/resume/';
                    $uploadFile = $uploadPath.$file['name'];
                    move_uploaded_file($fileName,$uploadFile);
                }
                $this->Flash->set('Job Applied successfully');
                $url = array('controller' =>'jobs', 'action' =>'job_detail',$data['Jobseeker']['applied_jobid']);
                $this->redirect($url);
            }
        }
    }

}