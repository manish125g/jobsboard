<?php

/**
 * Created by phpstorm.
 * User: Manish
 * Date: 8/7/2017
 * Time: 10:22 PM
 */
class Roles extends AdminAppModel
{
    public $name = 'roles';

    public $useTable = 'roles';

    public $validate = array(
        'role' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Role cannot be left blank',
                'last' => true
            ),
            'minimum' => array(
                'rule' => array('minLength', '3'),
                'message' => 'Role should be minimum of 3 characters',
                "last" => true
            ),
            'alphabet' => array(
                'rule' => '/[a-zA-Z0-9 ]{3,}$/i',
                'message' => 'Title should be a alphanumeric'
            )
        ),
    );
}