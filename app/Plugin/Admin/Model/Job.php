<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 1/7/2017
 * Time: 10:22 PM
 */
class Job extends AdminAppModel
{
    public $name = 'jobs';

    public $useTable = 'jobs';

    public $validate = array(
        'company_name' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Company Name cannot be left blank',
                'last' => true
            ),
            'minimum' => array(
                'rule' => array('minLength', '3'),
                'message' => 'Company Name should be minimum of 3 characters',
                "last" => true
            ),
            'alphabet' => array(
                'rule' => '/[a-zA-Z0-9 ]{3,}$/i',
                'message' => 'Title should be a alphanumeric'
            )
        ),
        'job_title' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Job Title cannot be left blank',
                'last' => true
            ),
            'minimum' => array(
                'rule' => array('minLength', '3'),
                'message' => 'Job Title should be minimum of 3 characters',
                "last" => true
            ),
            'alphabet' => array(
                'rule' => '/[a-zA-Z0-9 ]{3,}$/i',
                'message' => 'Title should be a alphanumeric'
            )
        ),
        'job_designation' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Job Designation cannot be left blank',
                'last' => true
            ),
            'minimum' => array(
                'rule' => array('minLength', '3'),
                'message' => 'Job Designation should be minimum of 3 characters',
                "last" => true
            )
        ),
        'job_department' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Job Department cannot be left blank',
                'last' => true
            ),
            'minimum' => array(
                'rule' => array('minLength', '3'),
                'message' => 'Job Department should be minimum of 3 characters',
                "last" => true
            )
        ),
        'job_location' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Job Location cannot be left blank',
                'last' => true
            ),
            'minimum' => array(
                'rule' => array('minLength', '3'),
                'message' => 'Job location should be minimum of 3 characters',
                "last" => true
            )
        ),
    );
    
    public function getJobById($id){
        return $this->find('first', array('conditions' => array('Job.id' => $id)));
    }
}