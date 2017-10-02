<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 1/26/2017
 * Time: 11:47 PM
 */
class Media extends AdminAppModel
{
    public $name = 'Media';

    public $useTable = 'medias';

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
            ),
            'alphabet' => array(
                'rule' => '/[a-zA-Z0-9 ]{3,}$/i',
                'message' => 'Name should be a alphanumeric'
            )
        ),
        'description' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Description cannot be left blank',
                'last' => true
            ),
            'minimum' => array(
                'rule' => array('minLength', '3'),
                'message' => 'Description should be minimum of 15 characters',
                "last" => true
            )
        ),
        'media_type' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Media Type cannot be left blank',
                'last' => true
            ),
            'minimum' => array(
                'rule' => array('minLength', '3'),
                'message' => 'Please Choose Media Type',
                "last" => true
            )
        ),
        "file" => array(
            'notBlank' => array(
                'rule' => 'checkEmptyFile',
                'message' => 'Please choose an File',
                'last' => true
            ),
            "size" => array(
                "rule" => array("fileSize", "<=", "4MB"),
                "message" => "Fil size must be less than or equal to 4MB"
            )
        ),
        "update_file" => array(
            "size" => array(
                "rule" => array("fileSize", "<=", "4MB"),
                "message" => "Image size must be less than or equal to 4MB"
            )
        ),
        'url' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Please Enter Url',
                'last' => true
            ),
        ),
        'published_on' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Please Enter Date',
                'last' => true
            ),
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