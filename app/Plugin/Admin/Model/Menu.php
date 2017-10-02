<?php
/*
 * @Author : Manish Gupta
 * @Desc : Menu Model
 * @Date : 16/07/2017
 */
class Menu extends AdminAppModel
{
    public $name = 'menu';

    public $useTable = 'menu';

    public $validate = array(
        'menu_name' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Menu Name cannot be left blank',
                'last' => true
            ),
            'minimum' => array(
                'rule' => array('minLength', '3'),
                'message' => 'Menu should be minimum of 3 characters',
                "last" => true
            ),
            'alphabet' => array(
                'rule' => '/[a-zA-Z0-9 ]{3,}$/i',
                'message' => 'Menu should be a alphanumeric'
            )
        ),
        'parent_id' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Menu Name cannot be left blank',
                'last' => true
            ),
        ),
        'url' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Menu Name cannot be left blank',
                'last' => true
            ),
            'minimum' => array(
                'rule' => array('minLength', '3'),
                'message' => 'Menu should be minimum of 3 characters',
                "last" => true
            ),
        ),
    );
}