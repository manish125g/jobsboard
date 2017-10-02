<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 1/14/2017
 * Time: 4:35 PM
 */
class Group extends AdminAppModel
{
    public $name = 'Group';

    public $useTable = 'groups';

    public $hasOne = array(
        'Admin' =>array(
            'className' => 'Admin',
            'foreignKey' => 'group_id'
        )
    );

}