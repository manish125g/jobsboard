<?php

/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 21/07/2017
 * Time: 11:07 AM
 */
class Heading extends AdminAppModel
{
    public $name = 'Heading';

    public $useTable = 'heading';

    public $belongsTo = array(
        'Admin' => array(
            'className' =>'Admin',
            'foreignKey' => 'created_by'
        )
    );

    public $validate = array(
        'heading' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Heading cannot be left blank',
                'last' => true
            ),
            'minimum' => array(
                'rule' => array('minLength', '3'),
                'message' => 'Heading should be minimum of 3 characters',
                "last" => true
            )
        ),
    );
}