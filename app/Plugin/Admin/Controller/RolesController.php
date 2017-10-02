<?php

/**
 * Created by phpstorm.
 * User: Manish
 * Date: 8/7/2017
 * Time: 10:21 PM
 */
class RolesController extends AdminAppController
{
    public $name = 'roles';

    public $layout = 'admin_dashboard_layout';

    public $uses = array('Admin.Roles');

    public function add_roles()
    {
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $this->Roles->set($data);
            $roles = $this->Roles->find('all', array('conditions' => array('Roles.role' => $data['Roles']['role'], 'Roles.enabled !='=> 'D'), 'order' => array('Roles.id DESC')));
            if (count($roles)) {
                $this->Flash->failure('Role already exist.', array(
                    'key' => 'failure'));
            } else {
                $fields = array('role');
                if ($this->Roles->validates(array('fieldList' => $fields))) {
                    if ($this->Roles->save($data, false)) {
                        $this->Flash->success('Role has been created successfully.', array(
                            'key' => 'success'));
//                    $this->Flash->set('Role has been created successfully.', "default", array('class' => 'alert alert-success', 'plugin' => 'admin'));
                        $url = array('controller' => 'roles', 'action' => 'add_roles', 'plugin' => 'admin');
                        $this->redirect($url);
                    } else {
                        $this->Flash->failure('Role creation failed.', array(
                            'key' => 'failure'));
                    }
                }
            }
        }
    }

    public function admin()
    {
        $roles = $this->Roles->find('all', array('conditions'=> array('Roles.enabled !='=>'D')));
        $this->set('roles', $roles);
    }

    public function change_status($id, $status)
    {
        $this->Roles->id = $id;
        if ($this->Roles->saveField('enabled', $status)) {
            $this->Flash->success('Role has been updated successfully.', array(
                'key' => 'success'));
            $this->redirect($this->referer());
        }
    }


    public function updateRole()
    {
        if (is_numeric($this->request->query('roleId'))) {
            $role = $this->Roles->findById($this->request->query('roleId'));
            $this->set('role', $role);
            $this->Session->write('roleId', $this->request->query('roleId'));
        } else {
            throw new NotFoundException("Invalid Link");
        }
    }

    public function update_role()
    {
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $this->Roles->set($data);
            CakeLog::error(json_encode($data));
            $roles = $this->Roles->find('all', array('conditions' => array('Roles.role' => $data['Roles']['role'], 'Roles.enabled !='=> 'D'), 'order' => array('Roles.id DESC')));
            if (count($roles)) {
                $this->set('role', $data);
                $this->Flash->failure('Role already exist.', array(
                    'key' => 'failure'));
            } else {
                $this->Roles->id = $this->Session->read('roleId');
                $fields = array('role');
                if ($this->Roles->validates(array('fieldList' => $fields))) {
                    if ($this->Roles->save($data, false)) {
                        $this->Flash->success('Role has been updated successfully.', array(
                            'key' => 'success'));
                        $url = array('controller' => 'roles', 'action' => 'admin', 'plugin' => 'admin');
                        $this->redirect($url);
                    }
                }
            }
        }
    }

    public function deleteRole()
    {
        if (is_numeric($this->request->query('roleId'))) {
            $role = $this->Roles->findById($this->request->query('roleId'));
            if ($role) {
                $this->Roles->id = $this->request->query('roleId');
                $this->Roles->saveField('enabled', 'D');
                $this->Flash->success('Role has been deleted successfully.', array(
                    'key' => 'success'));
                $this->redirect(
                    array(
                        "controller" => "Roles",
                        "action" => "admin"));
            } else {
                throw new NotFoundException("Invalid Link");
            }
        } else {
            throw new NotFoundException("Invalid Link");
        }
    }
}