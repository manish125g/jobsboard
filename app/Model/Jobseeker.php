<?php

/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 11/10/2017
 * Time: 12:21 AM
 */
class Jobseeker extends AppModel
{
    public $validate = array(
        'name' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Name cannot be left blank',
                'last' => true
            ),
            'minimum' => array(
                'rule' => array('minLength', '3'),
                'message' => 'Name should be minimum of 3 characters',
                "last" => true
            )
        ),
        'email' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Email cannot be left blank',
                'last' => true
            ),
            'email' => array(
                'rule' => 'email',
                'message' => 'Please choose valid email address'
            )
        ),
        'phone' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Phone cannot be left blank',
                'last' => true
            )
        ),
        'experience' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'experience cannot be left blank',
                'last' => true
            )
        ),
        'dob' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'dob cannot be left blank',
                'last' => true
            )
        ),
        "resume_file" => array(
            'notBlank' => array(
                'rule' => 'checkEmptyFile',
                'message' => 'Please choose an image',
                'last' => true
            ),
            "image" => array(
                "rule" => array("extension", array("pdf", "docx", "doc",'jpg', 'png')),
                "message" => "Please choose valid image.",
                "last" => true
            )
        ),
        "resume_file_u" => array(
            "image" => array(
                "rule" => array("extension", array("pdf", "docx", "doc",'jpg', 'png')),
                "message" => "Please choose valid File.",
                "last" => true
            )
        )
    );

    public function checkEmptyFile($data)
    {
        if (empty($data["file"]["error"])) {
            return true;
        }
        return false;
    }

}