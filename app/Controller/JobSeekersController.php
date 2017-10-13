<?php

/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 11/10/2017
 * Time: 12:20 AM
 */
App::uses('FrontBasesController', 'Controller');

class JobSeekersController extends FrontBasesController
{
    public $name = 'JobSeekers';

    public $layout = 'main_layout1';

    public $uses = array('JobSeeker', 'User', 'Job');

    public function beforeFilter()
    {
    }

    public function apply_job($id)
    {
        $this->set('id', $id);
        $job = $this->Job->findById($id);
        $this->set('job', $job);
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $this->JobSeeker->set($data);
            $fields = array("name", "email", "resume_file", "experience", "dob", "phone");
            if ($this->JobSeeker->validates(array('fieldList' => $fields))) {
                if (!empty($data['JobSeeker']['resume_file'])) {
                    $file = $data['JobSeeker']['resume_file'];
                    $fileName = $file['tmp_name'];
                    $data['JobSeeker']['resume_file'] = $file['name'];
                    $data['JobSeeker']['created_by'] = $this->Session->read('userId');
                    $data['JobSeeker']['dob'] = date('Y-m-d', strtotime($data['JobSeeker']['dob']));
                    if ($this->JobSeeker->save($data)) {
                        if (!empty($fileName)) {
                            $this->__writeFile($file, $id, 'resume');
                        }
                        $this->Flash->set('You have successfully applied for this Job');
                        $this->request->data = null;
                        $this->set('flashMessage', 'You have successfully applied for this Job');

                        //$url = array('controller' => 'job_seekers', 'action' => 'apply_job', $data['JobSeeker']['applied_jobid']);
                        //    $this->redirect($url);
                    }
                }
            }

        }
    }

}