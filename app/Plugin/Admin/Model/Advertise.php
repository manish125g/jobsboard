<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 1/15/2017
 * Time: 4:10 PM
 */
class Advertise extends AdminAppModel
{

    public $name = 'advertise';

    public $useTable = 'advertisements';

    public $belongsTo = array(
        'AdvertiseCategory' => array(
            'className' =>'Admin.AdvertiseCategory',
            'foreignKey'  =>'category_id'
        )
    );

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
            ),
            "isUnique" => array(
                "rule" => "isUnique",
                "message" => "This Name already exists. Please fill another name."
            )
        ),
        'category_id' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Name cannot be left blank',
                'last' => true
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
        "image" => array(
            'notBlank' => array(
                'rule' => 'checkEmptyFile',
                'message' => 'Please choose an image',
                'last' => true
            ),
            "image" => array(
                "rule" => array("extension", array("gif", "jpeg", "png", "jpg")),
                "message" => "Please choose valid image.",
                "last" => true
            ),
            "size" => array(
                "rule" => array("fileSize", "<=", "3MB"),
                "message" => "Image size must be less than or equal to 3MB"
            )
        ),
        "image_file" => array(
            "image" => array(
                "rule" => array("extension", array("gif", "jpeg", "png", "jpg")),
                "message" => "Please choose valid image.",
                "last" => true
            ),
            "size" => array(
                "rule" => array("fileSize", "<=", "3MB"),
                "message" => "Image size must be less than or equal to 3MB"
            )
        ),
        'url' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Please choose an image',
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
    
    public function getById($id){
        return $this->find('first', array('conditions' => array('Advertise.id' => $id)));
    }
}