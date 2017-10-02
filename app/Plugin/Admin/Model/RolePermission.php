<?php

/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 24/07/2017
 * Time: 1:40 AM
 */
App::uses('AppModel', 'Model');
class RolePermission extends AdminAppModel
{
    public $name = 'RolePermission';

    public $useTable = 'role_permission';

    public function getPermissions($roleId){
        $conditions = array('RolePermission.role_id' => $roleId);
        return $this->find('first', array('conditions'=> $conditions, 'fields'=>array('RolePermission.menu_permissions')));
    }
}